@extends('layouts.app')

@section('content')
    <h2>Items</h2>

    <div>
        <a href="{{route('admin.items.create')}}">Crea piatto</a>
    </div>
@endsection
    