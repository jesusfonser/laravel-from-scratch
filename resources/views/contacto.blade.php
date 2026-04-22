<x-layout title="Contacto">

    <p>Primero de todo: ¿cuánto mide el array este?</p>
    @if (count($alv))
        <p>Pues mide ni más ni menos que <?= count($alv) ?> </p>
    @else
        <p>¡No mide ná!</p>
    @endif    
    <h1>Esta es la página de contacto</h1>
    <p>¿A que mola?</p>

    <x-card class="max-w-400">
        <p>Peazo placeholder. ¿E o no?</p>
    </x-card>
</x-layout>