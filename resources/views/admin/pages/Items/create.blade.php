@extends('layouts.app')

@section('content')
    <h1 class=" mt-3  "></h1>
    <div class=" container ">
        <div class="row">
            <form class="p-0" action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="form-label">Nome*</label>
                    <input type="text" maxlength="100" class="form-control @error('name') is-invalid @enderror" required
                        name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Ingredienti*</label>
                    <input type="text" class="form-control @error('ingredients') is-invalid @enderror" required
                        name="ingredients">
                    @error('ingredients')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Prezzo*</label>
                    <input type="text"  id="price-input"
                        class="form-control @error('price') is-invalid @enderror" name="price" required>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Carica immagine</label>
                    <input class="form-control" type="file" id="formFile" name="cover_image">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="available" id="flexRadio" checked value="true">
                    <label class="form-check-label" for="available">
                        Disponibile
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" name="available" id="flexRadioChecked" value="false">
                    <label class="form-check-label" for="available">
                        Non disponibile
                    </label>
                </div>

                <p class="my-4"><b>*Campo obbligatorio</b></p>

                <button type="submit" id="submit-btn" class="btn btn-primary mt-3">Crea</button>

            </form>
        </div>
    </div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            var priceInput = document.getElementById('price-input');
            var price = parseFloat(priceInput.value);

            if (price < 0) {
                e.preventDefault(); // Blocca l'invio del form
                alert('Il prezzo non può essere negativo.');
            }
        });
    </script>
@endsection
