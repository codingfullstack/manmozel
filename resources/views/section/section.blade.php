<div class="img grid grid-cols-3 w-full mb-1 ">

    <div class="  col-span-2">
        <img class="w-full" src={{ asset('storage/' . $product->image) }}>
    </div>
    <div>
        <div class="mx-auto w-9/12">
            <h3 class="text-center text-2xl my-2">{{ $product->title }}</h3>
            <p class=" text-xl">{{ $product->description }} </p>
            @auth
                <a class="text-blue-500 text-sm" href="{{ route('product.edit', $product) }}">Redaguoti...</a>
            @endauth
        </div>

    </div>

</div>
