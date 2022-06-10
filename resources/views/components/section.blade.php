<div class="mt-12">
    <div class="flex justify-between items-center py-4">
        <div class="font-bold text-black text-3xl">
            {{$category}}
        </div>
        <div class="flex gap-8">
            <a href="http://" class="text-gray-600 font-bold underline">New Arrivals</a>
            <a href="http://" class="text-gray-600 hover:underline">Specials</a>
            <a href="http://" class="text-gray-600 hover:underline">Bestsellers</a>
            <a href="http://" class="text-gray-600 hover:underline">Most Viewed</a>
            <a href="http://" class="text-gray-600 hover:underline">Featured Products</a>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
    @foreach ($products as $p)
        @include('components.product.item', ['product'=>$p])
    @endforeach
</div>
<div class="my-4 py-4 bg-blue-50 text-center border rounded border-blue-200 w-full">
    Show More
</div>