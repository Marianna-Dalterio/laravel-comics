<div class="col-2 mb-4">
    <div class="comic-card">
        <div class="img-container mb-3">
            {{-- Usiamo la variabile $item che passeremo dall'esterno --}}
            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" class="img-fluid">
        </div>
        <p class="text-white text-uppercase small">{{ $item['series'] }}</p>
    </div>
</div>