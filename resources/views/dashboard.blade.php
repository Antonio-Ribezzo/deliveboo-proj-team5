@extends('layouts.app')

@section('content')
<div class="background-img pt-3"> 

    <div class="container">
        <h2 class="fs-4 mb-3 text-white-Dashboard">Dashboard</h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    {{-- <div class="card-header ">{{ __('User Dashboard') }}</div> --}}
                    <div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        @if ($user->restaurant)
                                    <div class="p-3">
                                        <div class="card-body d-flex">
                                            <div class="restaurant-image">
                                                <img src="{{ asset('storage/' . $restaurant->restaurant_image) }}" alt="" class="img-dashboard">
                                            </div>
                                            <div class="restaurant-details ms-4 d-flex flex-column justify-content-between ">
                                                <div>
                                                    <div id="containerTitle" class="d-flex justify-content-between align-items-center">
                                                        <h2 class="text-black text-capitalize">{{ $restaurant->name }}</h2> 
                                                        <i class="fa-solid fa-bell fs-3"></i>   
                                                    </div>
                                                    <span class="card-text fs-5 mt-4 text-capitalize">address: </span>
                                                    <span class="card-text fs-5"><strong>{{ $restaurant->address }}</strong></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="card-text fs-5 d-block mt-3">Categories</span>
                                                        <div class="d-flex flex-wrap mt-3">
                                                            @foreach ($restaurant->types as $type)
                                                                <span class="badge rounded-pill text-bg-warning text-white  fs-6 me-2">{{ $type->name }}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="{{ route('admin.items.index') }}" class="btn btn-warning text-white me-3 fs-5">Go to Menu</a>
                                                    <a href="{{ route('admin.orders') }}" class="btn btn-primary text-white fs-5">Go to Orders</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                             @else
                                 <div>
                                     <p>Welcome to Dashboard<br/>You didn't create a new restaurant</p>
                                     <a href="{{route('admin.restaurant.create')}}">Create your restaurant</a>
                                 </div>
                             @endif
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
