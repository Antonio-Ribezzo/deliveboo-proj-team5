@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form id="formCreate" method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" required min="8"
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
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">Nome Attività </label>
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

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">Indirizzo</label>
                                <div class="col-md-6">
                                    <input type="text" required
                                        class="form-control @error('address') is-invalid @enderror" name="address">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">Partita Iva</label>
                                <div class="col-md-6">
                                    <input type="text" required class="form-control @error('p_iva') is-invalid @enderror"
                                        name="p_iva">
                                    @error('p_iva')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <label class="form-label mb-4 mt-4">Categoria:</label>
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

                            <div class="mb-4 row mb-0 text-center">
                                <div class="col-md-6 offset-md-4">
                                    <button id="submit-btn" type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            let checkboxes = document.getElementsByClassName('category-checkbox');
            let isChecked = false;

            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    isChecked = true;
                    break;
                }
            }

            if (!isChecked) {
                e.preventDefault(); // Blocca l'invio del form
                alert('Seleziona almeno una categoria.');
            }
        });
    </script>
@endsection
