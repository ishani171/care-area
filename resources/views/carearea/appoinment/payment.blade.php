@extends('layouts.doctors')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
            @if($allow_payment) 
			<div class="col-xl-5 col-lg-6">
				<div class="p-3 shadow mt-5">
					<div>
						<h5>Proceed for payment for the appoinment id - {{ $appoinment->id }}</h5>
						<p>Price - <span>RS.{{ $appoinment->price }}</span></p>
					</div>
					<div class="mt-4">
						<div id="paypal-button-container"></div>
					</div>
				</div>
			</div>
            @else
            <div class="col-xl-4 col-lg-4">
                <div class="alert alert-success mt-4">
                    <h5>Payment has been completed</h5>
                </div>
            </div>
            @endif
		</div>
	</div>
    <input type="hidden" value="{{ $appoinment->price }}" id="price">
@endsection

@section('script')
    <script
        src="https://www.paypal.com/sdk/js?client-id=Aeo48uj2M-KcB-ZO3zfztBJyRhrbLs0Ltqha6gMJVgGhFl445SrLf7ukiLlf09bhtN8JY5Pmma2jwPfT">
    </script>

    <script>
        var appoinment_id = window.location.href.split('/')[5]
        var price = document.getElementById('price').value

        paypal.Buttons({
            createOrder: function(data, actions) {

                return actions.order.create({
                    application_context: {
                        brand_name: 'Care Area Appoinment Payment',
                        user_action: 'PAY_NOW',
                    },
                    purchase_units: [{
                        amount: {
                            value: price
                        }
                    }],
                });
            },
            onApprove: function(data, actions) {
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                return actions.order.capture().then(async function(details) {
                    if (details.status == 'COMPLETED') {
						console.log(
							JSON.stringify({
                                    payment_id: details.id,
                                    status: details.status,
                                    payer_email: details.payer.email_address,
                                    appoinment_id: appoinment_id,
                                })
						)
                        await fetch('/paypal-payment-completed', {
                                method: 'post',
                                headers: {
                                    'content-type': 'application/json',
                                    "Accept": "application/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                body: JSON.stringify({
                                    payment_id: details.id,
                                    status: details.status,
                                    payer_email: details.payer.email_address,
                                    appoinment_id: appoinment_id,
                                })
                            }).then(function(response) {
                                window.location.href = '/dashboard'
                            })
                            .catch(function(error) {
                                //window.location.href = '/pay-failed?reason=internalFailure';
                            });
                    } else {
                        window.location.href = '/pay-failed?reason=failedToCapture';
                    }
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
