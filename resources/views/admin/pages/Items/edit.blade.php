@extends('layouts.app')

@section('content')
<div class="div-create-dish p-3" >
    <div class=" container ">
        <h1 class=" ps-0 pt-4 text-white container">EDIT DISH</h1>
        <div class=" container ">

            <div class="row">
            @if ($item)
                <form class="p-0" action="{{ route('admin.items.update', $item) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label class="form-label">Name*</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required maxlength="100"
                            value="{{ old('name') ?? $item->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Ingredients*</label>
                        <input type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" required
                            value="{{ old('ingredients') ?? $item->ingredients }}">
                        @error('ingredients')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Price*</label>
                        <input type="text" id="price-input"
                            class="form-control @error('price') is-invalid @enderror" name="price" required
                            value="{{ old('price') ?? $item->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div id="errorDiv" style="display: none; color: red;">Price cannot be negative.</div>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload image</label>
                        <input class="form-control" type="file" id="formFile" name="cover_image">
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" id="flexRadio" value="true"
                            {{ $item->available == true ? 'checked' : '' }}>
                        <label class="form-check-label" for="available">
                            Available
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="available" id="flexRadioChecked" value="false"
                            {{ $item->available == false ? 'checked' : '' }}>
                        <label class="form-check-label" for="available">
                            Not Available
                        </label>
                    </div>

                    <p class="my-4"><b>*Required field</b></p>
                    <div class="d-flex">
                        <button type="submit" id="submit-btn" class="btn btn-warning text-white me-1 fs-5">Edit</button>
                        <a class="btn btn-warning text-white me-3 fs-5 text-decoration-none"
                            href="{{ route('admin.items.index') }}">&larr;
                        </a>
                    </div>

                </form>
            @else
                <span class="my-4">Not authorized</span>
            @endif
            </div>
        </div>

    </div>
</div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            var priceInput = document.getElementById('price-input');
            var price = parseFloat(priceInput.value);

            if (price < 0) {
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv = document.getElementById('errorDiv');
                errorDiv.style.display = 'block'; // Mostra il messaggio di errore
            }
        });
    </script>
@endsection
