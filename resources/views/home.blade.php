
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    @extends("layouts.main")

    @section("content") 
        <div class="row pt-4">
            @foreach($comics as $comic)
                {{-- Passiamo l'elemento corrente al partial rinominandolo 'item' --}}
                @include('partials.card', ['item' => $comic])
            @endforeach
        </div>
    @endsection
    
</body>

</html>