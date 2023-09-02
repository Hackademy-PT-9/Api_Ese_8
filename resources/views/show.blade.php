<x-layout>
    <x-slot name="title">
        Dettaglio articolo
    </x-slot>
    <x-navbar />
    <div class=" d-flex justify-content-center align-items-center ">
        <x-card :item="$product" />


    </div>

    <x-footer />
</x-layout>
