@extends('layouts.layout')
@section('content')

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  rounded-lg shadow-lg ">

        <div class="w-full h-[87.8vh] 2xl:h-[88vh]  sm:h-[91.2vh] lg:h-[93.8vh] ">

            <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Title
                    </label>
                    <input name="title" value="{{ $product->title }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Title">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Text
                    </label>
                    <textarea name="description" value=""
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        rows="3" placeholder="Your text">{{ $product->description }}</textarea>
                </div>
                <div class="">
                    <input type="file" name="image" id="image" accept="image/*" class="form-control-file">

                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-gray-500 hover:bg-gray-700 my-2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save <i class="fas fa-save"></i>
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection
