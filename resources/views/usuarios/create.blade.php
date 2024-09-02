<x-layout>
    <h1 class="text-2xl font-bold text-blue-800 mb-5">Crear usuario</h1>

    <div class="flex w-96">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="flex flex-col mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>

            <div class="flex flex-col mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="flex flex-col mb-3">
                <label for="password">Contraseña</label>
                <input type="text" name="password" id="password">
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Guardar</button>
        </form>
    </div>
</x-layout>
