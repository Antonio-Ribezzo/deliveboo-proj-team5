@extends('layouts.app')

@section('content')
    <div class="container py-4">


        <div>
            <a class="btn btn-success" href="{{ route('admin.items.create') }}">Crea nuovo piatto</a>
            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Torna alla dashboard</a>
        </div>

        <h2 class="mt-4 text-center">Piatti del menu</h2>

        <div class="mt-5">
            @foreach ($items as $elem)
                <div class="d-flex justify-content-between">
                    <div>
                        <h3>{{ $elem->name }}</h3>
                    </div>

                    <div class="d-flex">
                        <a class="btn btn-success me-3" href="{{ route('admin.items.show', $elem) }}">Visualizza Piatto</a>

                        <a class="btn btn-primary me-3" href="{{ route('admin.items.edit', $elem) }}">Modifica Piatto</a>

                        <form action="{{ route('admin.items.destroy', $elem) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Are you sure to delete it?')">Cancella piatto</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
