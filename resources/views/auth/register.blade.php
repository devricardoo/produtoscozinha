@extends('layouts.app')

@section('content')
    <div class="container-login">
        <div class="card-login">
            <div class="card-header">{{ __('Registro') }}</div>

            <div class="card-body">
                <div class="card-sp">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="@error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email">{{ __('E-mail') }}</label>

                            <div>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password">{{ __('Senha') }}</label>

                            <div>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm">{{ __('Confirme a senha') }}</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div class="form-button">
                                <button type="submit">
                                    {{ __('Cadastrar novo usuário') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
