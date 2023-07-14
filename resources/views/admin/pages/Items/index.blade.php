@extends('layouts.app')

@section('content')
    <h2>Items</h2>

    <div>
        <a href="{{route('admin.items.create')}}">Crea piatto</a>
    </div>

    <div class="container mt-5">
        @foreach ($items as $elem)

        <h3>{{$elem->name}}</h3>
            
        @endforeach
    </div>
@endsection
    