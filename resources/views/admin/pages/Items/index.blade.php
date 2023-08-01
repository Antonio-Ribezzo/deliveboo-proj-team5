@extends('layouts.app')

@section('content')
<div class="container-list">
  <div class="container py-4 p-2">
      <div>
          <a class="btn btn-warning text-white me-3 fs-5" href="{{ route('admin.items.create') }}">New Dish</a>
          <a class="btn btn-warning text-white me-3 fs-5" href="{{ route('admin.dashboard') }}">&larr;</a>
      </div>

      <h2 class="mt-4 text-center text-white">Menu</h2>

      <div class="mt-3 container">
        <div class="row">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col" >Id</th>
                <th scope="col">Dish Name</th>
                <th scope="col">Price</th>
                <th scope="col">Available</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($items as $index => $elem)
              <tr>
                <th scope="row">{{ $index + 1}}</th>
                <td><a class="text-decoration-none text-black text-capitalize" href="{{ route('admin.items.show', $elem) }}">{{ $elem->name }}</a></td>
                <td>{{ $elem->price }} &euro;</td>
                <td>{{ ($elem->available === 1) ? "Available" : "Not Available" }}</td>
                <td> 
                  <a class="btn btn-warning text-white me-3 " href="{{ route('admin.items.show', $elem) }}">Show</a>

                  <a class="btn btn-primary me-3" href="{{ route('admin.items.edit', $elem) }}">Edit</a>

                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $elem->id }}">
                    Delete
                  </button>

                      {{-- modale elimina piatto --}}

                      <div class="modal" tabindex="-1" id="modal-{{ $elem->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"                         aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Are you sure to delete it?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="{{ route('admin.items.destroy', $elem) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                  <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                            </div>
                          </div>
                        </div>
                      </div>                      
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
@endsection
