@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form id="formCreate" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}*</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" required
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}*</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" required minlength="8"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                        <div id="errorDiv2" style="display: none; color: red;">Password don't match.</div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">Activity Name* </label>
                                <div class="col-md-6">
                                    <input type="text" maxlength="100" required class="form-control @error('name') is-invalid @enderror"
                                        name="name">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload image</label>
                                <input class="form-control" type="file" id="formFile" name="restaurant_image">
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">
                                    Address*</label>
                                <div class="col-md-6">
                                    <input type="text" required
                                        class="form-control @error('address') is-invalid @enderror" name="address">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">P. Iva*</label>
                                <div class="col-md-6">
                                    <input type="text" id="Vat" pattern="[0-9]{11}" required class="form-control @error('p_iva') is-invalid @enderror"
                                        name="p_iva">
                                    @error('p_iva')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="errorDiv3" style="display: none; color: red;">P. iva must be composed of 11 numbers.</div>
                                </div>
                            </div>

                            <label class="form-label mb-4 mt-4">Category:*</label>
                            <div class="mb-4 d-flex w-50 ">
                                <div>
                                    @foreach ($types as $type)
                                        <div>
                                            <label>
                                                <input class="@error($type->name) is-invalid @enderror category-checkbox"
                                                    type="checkbox" name="category_id[]" value="{{ $type->id }}">
                                                {{ $type->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="submit-btn" type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="modal" id="errorModal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>select a category</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="errorDiv" style="display: none; color: red;">Select almost a category.</div>
                        <p class="my-4"><b>*Campo obbligatorio</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            let checkboxes = document.getElementsByClassName('category-checkbox');
            let isChecked = false;
            let password = document.getElementById('password').value
            let passwordConfirm = document.getElementById('password-confirm').value
            let Vat = document.getElementById('Vat').value

            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    isChecked = true;
                    break;
                }
            }

            if (!isChecked) {
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv = document.getElementById('errorDiv');
                errorDiv.style.display = 'block'; // Mostra il messaggio di errore
            }
            if (password !== passwordConfirm ){
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv2 = document.getElementById('errorDiv2');
                errorDiv2.style.display = 'block'; // Mostra il messaggio di errore
            }
            if (Vat.length !== 11 || isNaN(Vat)) {
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv3 = document.getElementById('errorDiv3');
                errorDiv3.style.display = 'block'; // Mostra il messaggio di errore
}
        });

    </script>
@endsection
