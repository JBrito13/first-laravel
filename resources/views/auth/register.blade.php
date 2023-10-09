
@extends('layouts.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 p-5">
            <p>Imagen</p>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name"
                           class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text"
                           class="border border-gray-300 p-3 rounded-lg w-full @error('name') border-red-500 @enderror"
                           name="name"
                           id="name"
                           placeholder="Escribe tu nombre">
                </div>
                @error('name')
                    <p class="bg-red-500 text-white text-sm text-center py-2 rounded-lg">{{ $message }}</p>
                @enderror
                <div class="mb-5">
                    <label for="username"
                           class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
                    <input type="text"
                           class="border border-gray-300 p-3 rounded-lg w-full @error('username') border-red-500 @enderror"
                           name="username"
                           id="username"
                           placeholder="Escribe tu nombre de usuario">
                </div>
                @error('username')
                    <p class="bg-red-500 text-white text-sm text-center py-2 rounded-lg">{{ $message }}</p>
                @enderror
                <div class="mb-5">
                    <label for="email"
                           class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                    <input type="email"
                           class="border border-gray-300 p-3 rounded-lg w-full @error('email') border-red-500 @enderror"
                           name="email"
                           id="email"
                           placeholder="Escribe tu correo">
                </div>
                @error('email')
                    <p class="bg-red-500 text-white text-sm text-center py-2 rounded-lg">{{ $message }}</p>
                @enderror
                <div class="mb-5">
                    <label for="password"
                           class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password"
                           class="border border-gray-300 p-3 rounded-lg w-full @error('password') border-red-500 @enderror"
                           name="password"
                           id="password"
                           placeholder="Escribe tu contraseña">
                </div>
                @error('password')
                    <p class="bg-red-500 text-white text-sm text-center py-2 rounded-lg">{{ $message }}</p>
                @enderror
                <div class="mb-5">
                    <label for="password_confirmation"
                           class="mb-2 block uppercase text-gray-500 font-bold">Confirmar Contraseña</label>
                    <input type="password"
                           class="border border-gray-300 p-3 rounded-lg w-full"
                           name="password_confirmation"
                           id="password_confirmation"
                           placeholder="Confirma tu contraseña">
                </div>

                <input type="submit" value="Registrarse"
                class="bg-sky-500 hover:bg-sky-700 transition-colors w-full cursor-pointer uppercase p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
