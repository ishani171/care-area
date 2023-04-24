<a href="/doctors/{{ $id }}" class="spec-link">
    <div class="rounded-3 shadow p-2 spec">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div class="p-3 flex-fill">
                <h4 class="f-h fs-3 text-dark text-justify">{{ $name }}</h4>
                <p class="f-p text-dark text-justify mt-3" style="font-size:20px;">{{ $description }}</p>
            </div>
            <div class="d-flex flex-fill align-items-end px-2 mt-3">
                <button class="border-0 w-100 rounded-2 view-btn px-3 py-2 f-h" style="background:skyblue;">View</button>
            </div>
        </div>
    </div> 
</a>
