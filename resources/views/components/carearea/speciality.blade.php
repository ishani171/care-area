<a href="/doctors/{{ $id }}" class="spec-link">
    <div class="rounded-3 shadow p-2 spec">
        <div class="h-100 d-flex flex-column">
            <div class="p-3">
                <h4 class="f-h fs-1 text-dark text-justify">{{ $name }}</h4>
                <p class="f-p fs-4 text-dark text-justify">{{ $description }}</p>
            </div>
            <div class="d-flex justify-content-center flex-grow-1 flex-column px-2">
                <button class="border-0 w-100 rounded-2 view-btn px-3 py-2 text-white">View</button>
            </div>
        </div>
    </div>
</a>
