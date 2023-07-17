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

                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-success me-3" href="{{ route('admin.items.show', $elem) }}">Visualizza Piatto</a>

                        <a class="btn btn-primary me-3" href="{{ route('admin.items.edit', $elem) }}">Modifica Piatto</a>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal">
                          Cancella Piatto
                        </button>

                        {{-- modale elimina piatto --}}

                        <div class="modal" tabindex="-1" id="modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Elimina piatto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Sei sicuro di voler eliminare il piatto?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                                <form action="{{ route('admin.items.destroy', $elem) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                    <button class="btn btn-danger" type="submit">Cancella piatto</button>
                                </form>

                              </div>
                            </div>
                          </div>
                        </div>




                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
