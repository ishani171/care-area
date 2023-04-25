<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h5 class="text-2xl">Your Appoinments</h5>
                    </div>
                    @foreach ($appoinments as $item)
                        <div class="p-3 shadow mb-4 border-[1px] border-slate-100 mt-4">
                            <div class="flex justify-between">
                                <span>Appoinment Id - {{ hash('md5',$item->id) }}</span>
                                @if (!$item->paid)
                                    <span class="px-2 rounded-full bg-amber-300 text-sm h-fit">Pending</span> 
                                @endif
                            </div>
                            <div class="mt-2">
                                <h6 class="font-bold">Doctor Details</h6>
                                <div>
                                    <h5>Dr.{{ $item->doctor->first_name }} {{ $item->doctor->last_name }}</h5>
                                    <p>{{ $item->doctor->speciality_name }}</p>
                                </div>
                                <div class="mt-3">
                                    <p class="font-bold">Date - {{ $item->date }}</p>
                                </div>
                                <div class="mt-3">
                                    @if ($item->paid == 1)
                                        <h5 class="bg-emerald-200 px-3 py-1 rounded shadow-sm w-fit italic">Confirmed & Paid</h5>
                                    @else
                                        <a href="{{ route('appoinment.payment',$item->id) }}" class="bg-slate-100 px-3 py-1 rounded shadow-sm w-fit italic hover:underline text-blue-500">Complete payment to confirm appoinment</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
