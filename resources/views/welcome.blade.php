@extends('layouts.layout')
@section('content')
    @include('header.header')
    <div class="grid grid-cols-1">
        @foreach ($products as $product )
            @include('section.section', ['product' => $product])
        @endforeach
    </div>
@endsection
