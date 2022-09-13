@extends('layouts.layout')
@section('content')



        <div class="w-full h-[87.8vh] 2xl:h-[88vh]  sm:h-[91.2vh] lg:h-[93.8vh] ">

            <form action="{{ route('product.store') }}" class="mx-2" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Title
                    </label>
                    <input name="title"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Title">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Text
                    </label>
                    <textarea name="description" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        rows="3" placeholder="Your text"></textarea>
                </div>
                <input type="file" name="image" id="photo" accept="image/*" class="form-control-file">
                <div class="flex items-center justify-between">
                    <button
                        class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>


@endsection
