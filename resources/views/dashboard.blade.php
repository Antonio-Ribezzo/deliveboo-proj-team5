@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

               

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if ($user->restaurant)
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h3 class="my-2">{{$restaurant->name}}</h3>
                        <span class="text-decoration-underline">Indirizzo</span>
                        <h4 class="my-2">{{$restaurant->address}}</h4>
                        <span class="text-decoration-underline mb-3">Tipologie</span>
                        <ul>
                            @foreach ($restaurant->types as $type)
                                <li>{{$type->name}}</li>
                            @endforeach
                        </ul>
                        <a href="{{route('admin.items.index')}}"><button class="btn btn-primary">Vai al menu</button></a>
                    </div>
                @else
                    <div>
                        <p>Benvenuto nella tua Dashboard!<br/> Non hai ancora creato un ristorante.</p>
                        <a href="{{route('admin.restaurant.create')}}">Crea il tuo ristorante</a>
                    </div>
                @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection