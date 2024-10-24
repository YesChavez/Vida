@extends('layouts.app-master')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; background-color: #12007800; margin-top: -20px;">
        <form method="post" action="{{ route('login.perform') }}" style="background-color: #ffffff; padding: 20px; border-radius: 10px; width: 100%; max-width: 400px;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="text-center mb-4">
                <img class="mb-4" src="{!! url('/images/principal-logo.svg') !!}" alt="" height="57">
            </div>

            <h1 class="h3 mb-3 fw-normal text-center" style="color: #120078;">Iniciar sesión</h1>

            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required="required" autofocus style="border: 1px solid #22A358;">
                <label for="floatingEmail" style="color: #000000;">Correo electrónico</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required" style="border: 1px solid #22A358;">
                <label for="floatingPassword" style="color: #000000;">Contraseña</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg" type="submit" style="background-color: #120078; color: #FFFFFF;">Iniciar sesión</button>

            @include('auth.partials.copy')
        </form>
    </div>
@endsection
