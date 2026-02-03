

    {{-- importo layout --}}
    @extends("layouts.main")

    {{-- riempio sezione del content --}}
    @section("content") 

    <main class="bg-dark">

        <div class="jumbotron">
            {{-- <img src={{Vite::asset("resources/img/jumbotron.jpg")}} alt="jumbotron"> --}}
            {{-- aggiungo jumbotron da .scss --}}
        </div>


        <section class="comics-section position-relative py-5">

            <div class="container">
                {{-- etichetta --}}
                <div class="series-label bg-primary text-white fw-bold px-4 py-2 position-absolute">
                    CURRENT SERIES
                </div>

                {{-- stampo fumetti  --}}
                <div class="row pt-3">
                    @foreach($comics as $comic)
                        {{-- Passiamo l'elemento corrente al partial rinominandolo 'item' --}}
                        @include('partials.card', ['item' => $comic])
                    @endforeach
                </div>


                <div class="text-center mt-5">
                    <button class="btn btn-primary rounded-0 fw-bold px-5">LOAD MORE</button>
                </div>

            </div>

            

        </section>
       

    </main>
        

    {{-- Inclusione del banner blu --}}
    @include('partials.banner')

    @endsection
    
