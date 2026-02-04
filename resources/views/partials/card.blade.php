<div class="col-2 mb-4">
    {{-- link alla rotta per la pagina del dettaglio card --}}
    <a href="{{ route('comics.show', ['index' => $id]) }}" class="text-decoration-none">

        <div class="comic-card">
            <div class="img-container mb-3">
                {{-- Usiamo la variabile $item che passeremo dall'esterno --}}
                <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" class="img-fluid comic-thumb">
            </div>
            <p class="text-white text-uppercase small">{{ $item['series'] }}</p>
        </div>

    </a>
</div>