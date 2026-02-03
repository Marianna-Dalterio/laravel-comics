<section class="shop banner bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center">
            @php
                $items=[
                    ["text" => "Digital Comics", "img" => "resources/img/buy-comics-digital-comics.png"],
                    ["text" => "DC Merchandise", "img" => "resources/img/buy-comics-merchandise.png"],
                    ["text" => "Comic Shop Locator", "img" => "resources/img/buy-comics-shop-locator.png"],
                    ["text" => "Subscriptions", "img" => "resources/img/buy-comics-subscriptions.png"],
                    ["text" => "DC power visa", "img" => "resources/img/buy-dc-power-visa.svg"],
                ];
            @endphp


            <div class="col-11">
                <div class="d-flex justify-content-between align-items-center">

                    @foreach ($items as $item )
                        <div class="banner-item d-flex align-items-center">
                            
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}" class="img-fluid me-3">
                            <span class="text-white text-uppercase">{{ $item['text'] }}</span>

                        </div>
                        
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>