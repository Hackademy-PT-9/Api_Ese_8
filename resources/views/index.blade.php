<x-layout>
    <x-slot name="title">
        Elenco articoli
    </x-slot>
    <x-navbar />

    <div class="album py-5 text-bg-dark">
        <div class="container-fluid">

            <div class="row text-center text-success mb-3 ">
                <h1>Il nostro catalogo</h1>

            </div>

            <div class="row d-flex justify-content-center text-center">


                @forelse ($products as $product)
                    <x-card :item="$product" />
                @empty
                    <span class="text-center">Nessun prodotto</span>
                @endforelse

                <x-footer />
</x-layout>
