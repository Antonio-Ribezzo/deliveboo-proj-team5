@extends('layouts.app')

@section('content')
<div class="background-img pt-3"> 

    <div class="container">
        <h2 class="fs-4 mb-3 text-white-Dashboard">Dashboard</h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header ">{{ __('User Dashboard') }}</div>
                    <div class=" m-2 p-2">

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        @if ($user->restaurant)
                                
                                    <div class="card mb-4">
                                        <div class="card-body d-flex">
                                            <div class="restaurant-image">
                                                <img src="{{ asset('storage/' . $restaurant->restaurant_image) }}" alt="Restaurant Image" class="img-dashboard">
                                            </div>
                                            <div class="restaurant-details ms-4">
                                                <h4 class=" mb-2 text-black a">{{ $restaurant->name }}</h4>
                                                <p class="card-text fs-5">ADDRESS: {{ $restaurant->address }}</p>
                                                <div class="d-flex flex-wrap mt-3">
                                                    @foreach ($restaurant->types as $type)
                                                        <span class="btn btn-outline-warning  fs-6 me-2">{{ $type->name }}</span>
                                                    @endforeach
                                                </div>
                                                <a href="{{ route('admin.items.index') }}" class="btn btn-primary mt-4 fs-5">Go to Menu</a>
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
