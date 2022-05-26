<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Add new Series</title>
</head>

<body>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Insert Title here">

        <label for="description">Description</label>
        <input type="text" name='description' placeholder="Insert Description here">

        <label for="thumb">Thumb</label>
        <input type="text" name='thumb' placeholder="Insert Thumb link here">

        <label for="price">Price</label>
        <input type="text" placeholder="Insert Price here" name='price'>

        <label for="series">Price</label>
        <input type="text" placeholder="Insert Series here" name='series'>

        <label for="sale_date">Price</label>
        <input type="date" placeholder="Insert Sale Date here" name='sale_date'>

        <label for="type">Price</label>
        <input type="text" placeholder="Insert Series here" name='type'>

        <button type='submit'>Insert</button>


    </form>

</body>

</html>
