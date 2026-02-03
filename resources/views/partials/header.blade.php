<header class="bg-white py-3">
    
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src={{Vite::asset("resources/img/dc-logo.png")}} alt="Logo" width="80">
        </div>
        
        <nav >
            <ul class="nav">
                @php
                    $links=['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];

                @endphp

                @foreach ($links as $link)
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark fw-bold px-2"> {{$link}} </a>
                </li>
                    
                @endforeach

            </ul>
            

            
        </nav>

    </div>
</header>