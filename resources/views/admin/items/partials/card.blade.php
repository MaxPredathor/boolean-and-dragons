<div class="col-2">
    <div class="text-center border p-1 text-white rounded" style="background-color: #272822">
        <h2 class="fs-6 ">Name: {{ $item->name }}</h2>
        <img class="w-50" src="{{ Vite::asset('public/images/items_images/' . $item->name . '.png') }}" alt="">
        <p class="fst-italic m-0">Slug: {{ $item->slug }}</p>
        <p class="fst-italic m-0">Type: {{ $item->type }}</p>
        <p class="fst-italic m-0">Weight: {{ $item->weight }}</p>
        <p class="fst-italic m-0">Cost: {{ $item->cost }}</p>
        <a href="{{ route('admin.items.show', $item->id) }}" class="btn btn-primary mb-4">See detail</a>
    </div>
</div>
