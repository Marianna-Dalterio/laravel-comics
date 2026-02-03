@php
    $footer_columns = [
        [
            ["title" => "DC COMICS", "links" => ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"]],
            ["title" => "SHOP", "links" => ["Shop DC", "Shop DC Collectibles"]]
        ],
        [
            ["title" => "DC", "links" => ["Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"]]
        ],
        [
            ["title" => "SITES", "links" => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]]
        ]
    ];
@endphp


<footer class="text-white">
    <div class="footer-main " style="background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg') }}'); background-size: cover;">
        
        <div class="container position-relative overflow-hidden py-5">
            <div class="row">
                
                @foreach($footer_columns as $column)
                    <div class="col-2">
                        @foreach($column as $section)
                            <h5 class="fw-bold mb-3 mt-3 text-uppercase text-white">{{ $section['title'] }}</h5>
                            <ul class="list-unstyled">
                                @foreach($section['links'] as $link)
                                    <li><a href="#" class="text-secondary text-decoration-none small">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                @endforeach



                <div class="col-6 d-flex justify-content-center align-items-center">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" 
                         alt="DC Logo Background" 
                         class="position-absolute" 
                         style="right: -50px; top: 50%; transform: translateY(-50%); width: 550px;">
                </div>


            </div>
                

            
        </div>
       


        <div class="footer-bottom bg-dark py-4">
            <div class="container d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-primary text-white fw-bold border-2 px-3">SIGN-UP NOW!</button>

                <div class="social-icons d-flex align-items-center">
                    <span class="text-primary fw-bold me-3">
                        FOLLOW US
                    </span>
                    <img src={{vite::Asset("resources/img/footer-facebook.png")}} class="mx-2" alt="facebook logo">
                    <img src={{vite::Asset("resources/img/footer-twitter.png")}} class="mx-2" alt="twitter logo">
                    <img src= {{vite::Asset("resources/img/footer-youtube.png")}} class="mx-2" alt="youtube logo">
                    <img src={{vite::Asset("resources/img/footer-pinterest.png")}} class="mx-2" alt="pinterest logo">
                    <img src={{vite::Asset("resources/img/footer-periscope.png")}} class="mx-2" alt="periscope logo">
                </div>

            </div>
            
            
        </div>
    </div>
    
</footer>