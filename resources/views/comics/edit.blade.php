<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <title>Add new Series</title>
</head>

<body>
    @include('/partials.header')
    @include('../partials.hero')
    <main>

        <div class="form-container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class='input-section'>
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Insert Title here" value="{{ $comic->title }}">
                </div>
                <div class='input-section'>
                    <label for="description">Description</label>
                    <textarea type="text" name='description' placeholder="Insert Description here">{{ $comic->description }}</textarea>
                </div>
                <div class='input-section'>
                    <label for="thumb">Thumb</label>
                    <input type="text" name='thumb' placeholder="Insert Thumb URL here" value="{{ $comic->thumb }}">
                </div>
                <div class='input-section'>
                    <label for="price">Price</label>
                    <input type="text" placeholder="Insert Price here" name='price' value="{{ $comic->price }}">
                </div>
                <div class='input-section'>
                    <label for="series">Series</label>
                    <input type="text" placeholder="Insert Series here" name='series' value="{{ $comic->series }}">
                </div>
                <div class='input-section'>
                    <label for="sale_date">Sale Date</label>
                    <input type="date" placeholder="Insert Sale Date here" name='sale_date'
                        value="{{ $comic->sale_date }}">
                </div>
                <div class='input-section'>
                    <label for="type">Type</label>
                    <input type="text" placeholder="Insert Series here" name='type' value="{{ $comic->type }}">
                </div>
                <button type='submit'>Change</button>


            </form>
        </div>

        @include('../partials.banner')

    </main>
    @include('../partials.footer')

</body>

</html>
