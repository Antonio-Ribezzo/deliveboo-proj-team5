@extends('layouts.app')

@section('content')
<div class="background-img-dish "> 

    <div class="container">
        <h2 class="fs-4 mb-3 text-white-Dashboard">Dish</h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    @if ($item)
                    <div class="p-3">
                        <div class="card-body d-flex justify-content-center align-items-start">
                            <div class="restaurant-image">
                                <img src="{{ asset('storage/' . $item->cover_image )}}" alt="" class="img-dashboard">
                            </div>
                            <div class="restaurant-details ms-4 d-flex flex-column justify-content-start ">
                                <div>
                                    <div id="containerTitle" class="d-flex justify-content-between align-items-center">
                                        <h2 class="text-black text-capitalize">{{ $item->name }}</h2> 
                                    </div>
                                    <span class="card-text fs-5 mt-4 text-capitalize">Ingredients: </span>
                                    <span class="card-text fs-5"><strong>{{$item->ingredients}}</strong></span>
                                </div>
                                <div class="mt-4">
                                    <span class="d-block">Price:</span>
                                    <div class="fs-3">
                                        {{$item->price}} &euro;
                                    </div>
                                </div>
                                @else
                                <span class="d-block my-4">Item non trovato</span>
                                <a class="rounded-circle bg-primary p-2 text-white text-decoration-none" href="{{ route('admin.items.index')}}">&larr;</a>
                                @endif

                            </div>
                            <a class="btn btn-warning text-white text-decoration-none rounded-circle" href="{{ route('admin.items.index') }}">&larr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>               
</div>

@endsection