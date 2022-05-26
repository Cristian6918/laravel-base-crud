<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>

    {{-- @include('../partials/header') --}}
    <main>


        @include('../partials.hero')

        <div class="film-container">
            <div class="series-label">CURRENT SERIES</div>
            <a href="{{ route('comics.create') }}">
                <div class="add-new">ADD NEW SERIES</div>
            </a>
            <div clasS='container'>

                @foreach ($comics as $comic)
                    <div class='film-card'>
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="image-container">
                                <img class="film-img" src='{{ $comic['thumb'] }}' alt=''>
                            </div>
                            <div class="title-container">
                                {{ $comic['title'] }}
                            </div>
                        </a>
                        <div class="edit-delete">
                            <div class="edit">
                                <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>

                            </div>
                            <div class="delete">
                                <a href="{{ route('comics.destroy', $comic->id) }}">Delete</a>

                            </div>
                        </div>
                        <div class="delete-page">
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <span>ARE YOU SURE?</span>
                                <input type="submit" value="DELETE">
                            </form>
                        </div>
                    </div>
                @endforeach




            </div>
            <button>Load More</button>
        </div>
        @include('partials.banner')
    </main>
    <footer>
        @include('partials.footer')
    </footer>




</body>

</html>
