<x-layout>
    <x-navbar />
    <section>
        <div class="  row text-success text-center mt-5">
            <h1>Lista prodotti ricavati da un API creata </h1>
        </div>
        <div class="row text-center mt-5">
            <ul class="list-unstyled" id="lista-api">
            </ul>
        </div>
    </section>
    <script>
        const list = document.getElementById('lista-api');
        fetch('{{ Route('api.prodotti') }}')
            .then(response => response.json())
            .then(elements => {
                console.log(elements);
                for (let item of elements) {
                    list.innerHTML += `<li>${item.title}</li>`
                }
            })
    </script>
</x-layout>
