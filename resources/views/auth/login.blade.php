@extends('layouts.app')

@section('content')
    <div class="container-login">
        <div class="card-login">
            <div class="card-header">{{ __('Bem-vindo(a), faça seu login!') }}</div>

            <div class="card-body">
                <div class="card-sp">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-body">
                            <label for="email">{{ __('E-mail') }}</label>


                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>
                            <label for="password">{{ __('Senha') }}</label>

                            <div class="form-body">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Mantenha-me conectado') }}
                            </label>


                        </div>
                        <div class="form-button">
                            <button type="submit">
                                {{ __('Entrar') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
