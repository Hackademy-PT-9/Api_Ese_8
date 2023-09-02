<div class="card m-2  d-flex justify-content-center align-items-center   " style="width:18rem  ;">

    <img src={{ $item['image'] }} class="card-img-top img-fluid w-50 mt-5" alt="immagine prodotto">

    <div class="card-body">
        <h6 class="card-title">{{ $item['title'] }}</h6>
        <p>Prezzo: {{ $item['price'] }}</p>
        <p>{{ $item['description'] }}</p>

        <a href="{{ route('show', ['id' => $item['id']]) }}" class="btn btn-primary">Leggi dettagli</a>
    </div>
</div>
