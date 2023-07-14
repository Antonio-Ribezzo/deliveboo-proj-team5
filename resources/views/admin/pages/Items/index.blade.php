@extends('layouts.app')

@section('content')
<div class="container py-4">


    <div>
        <a class="btn btn-success" href="{{route('admin.items.create')}}">Crea nuovo piatto</a>
        <a class="btn btn-primary" href="{{route('admin.dashboard')}}">Torna alla dashboard</a>
    </div>

    <h2 class="mt-4 text-center">Piatti del menu</h2>

    <div class="mt-5">
        @foreach ($items as $elem)

        <h3>{{$elem->name}}</h3>
            
        @endforeach
    </div>
</div>
@endsection
    