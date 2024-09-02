<x-layout>
    <div class="m-5">
        @php
            $usuarios = ['Juan', 'Pedro', 'Daiana', 'Carolina'];
        @endphp

        <h1 class="text-3xl font-bold text-blue-900">Listado de usuarios</h1>

        <ul class="mt-4">
            @foreach ($usuarios as $usuario)
                <x-link-listado>{{ $usuario }}</x-link-listado>
            @endforeach
        </ul>
    </div>
</x-layout>
