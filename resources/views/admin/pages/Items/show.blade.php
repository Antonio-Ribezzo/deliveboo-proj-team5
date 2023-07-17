@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="display-5 fw-bolder mb-0 text-center"><span>{{ $item->name }}</span></h1>
    
    <div class="mt-3 d-flex justify-content-center">
        <img src="{{ asset('storage/' . $item->cover_image )}}" alt="" width="450">
    </div>
    <p class="my-4"><b>Ingredients:</b> {{$item->ingredients}}</p>
    <p class="my-4"><b>Price:</b> {{$item->price}}&euro;</p>
    <a class="rounded-circle bg-primary p-2 text-white text-decoration-none" href="{{ route('admin.items.index')}}">&larr;</a>
</div>

@endsection