<x-layout>
    <x-slot name="title">
        Elenco articoli
    </x-slot>
    <x-navbar />
    <div class="album py-5 bg-body-tertiary">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center text-center">


                @forelse ($products as $product)
                    <x-card :item="$product" />
                @empty
                    <span class="text-center">Nessun prodotto</span>
                @endforelse

                <x-footer />
</x-layout>
