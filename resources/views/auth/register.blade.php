@extends('layouts.app-master')

@section('content')

    <form method="post" action="{{ route('register.perform') }}" style="background-color: #12007800; padding: 20px; border-radius: 10px;">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="text-center mb-4">
            <img class="mb-4" src="{!! url('/images/principal-logo.svg') !!}" alt="" height="57">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required="required" autofocus style="border: 1px solid #22A358;">
                    <label for="floatingName" style="color: #000000;">Nombre</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required="required" style="border: 1px solid #22A358;">
                    <label for="floatingEmail" style="color: #000000;">Correo electrónico</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required" style="border: 1px solid #22A358;">
                    <label for="floatingPassword" style="color: #000000;">Contraseña</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar Contraseña" required="required" style="border: 1px solid #22A358;">
                    <label for="floatingConfirmPassword" style="color: #000000;">Confirmar Contraseña</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Dirección" required="required" autofocus style="border: 1px solid #22A358;">
                    <label for="floatingAddress" style="color: #000000;">Dirección</label>
                    @if ($errors->has('address'))
                        <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Número de teléfono" required="required" autofocus style="border: 1px solid #22A358;">
                    <label for="floatingPhoneNumber" style="color: #000000;">Número de Teléfono</label>
                    @if ($errors->has('phone_number'))
                        <span class="text-danger text-left">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Fecha de Nacimiento" required="required" autofocus style="border: 1px solid #22A358;">
                    <label for="floatingDateOfBirth" style="color: #000000;">Fecha de Nacimiento</label>
                    @if ($errors->has('date_of_birth'))
                        <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="rfc" value="{{ old('rfc') }}" placeholder="RFC" required="required" autofocus style="border: 1px solid #22A358;">
                    <label for="floatingRFC" style="color: #000000;">RFC</label>
                    @if ($errors->has('rfc'))
                        <span class="text-danger text-left">{{ $errors->first('rfc') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <button class="w-100 btn btn-lg" type="submit" style="background-color: #120078; color: #FFFFFF;">Registrarse</button>

        @include('auth.partials.copy')
    </form>
@endsection
