<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $comic['title'] }}</title>
</head>

<body>

    <form class="delete-page" action="{{ route('comics.destroy', $comic->id) }}" method="post">
        @csrf
        @method('DELETE')
        <h1>Are you Sure?</h1>
        <input class="cancel-button" type="button" value="Cancel" onclick="closeForm()">
        <input type="submit" value="DELETE">
    </form>

    @include('/partials.header')
    @include('/partials.hero')



    <div class="main-top">
        <div class="img-container">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="buttons">
            <a href="{{ route('comics.edit', $comic->id) }}" class="edit-button">Edit</a>
            <span onclick="openForm()" class="delete-button">Delete</span>
        </div>

    </div>
    <div class="main-content">
        <div class="container">
            <div class="content">
                <h2>{{ $comic['title'] }}</h2>
                <div class="comic-details">

                    <div class="upper-details">
                        <div class="upper-details-left">
                            <p>U.S Price: <span>{{ $comic['price'] }} </span></p>
                            <p>Available</p>
                        </div>
                        <div class="upper-details-right">
                            <span>Check Availability</span>
                        </div>
                    </div>

                    <div class="description">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>


            </div>
            <div class="ad">
                <img src='/assets/images/supermanBanner.jpg' alt="superman">

            </div>

        </div>
    </div>

    <div class="secondary-main">
        <div class="container">
            <div class="secondary-left">
                <div class="row">
                    <div class="left-row">

                        <h2>Talent</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="left-row">
                        Art by:
                    </div>
                    <div class="right-row">
                        {{-- @foreach ($comic['artists'] as $artist)
                            <a href="">{{ $artist }}</a> ,
                        @endforeach --}}
                    </div>
                </div>

                <div class="row">
                    <div class="left-row">
                        Written by:
                    </div>
                    <div class="right-row">
                        {{-- @foreach ($comic['writers'] as $artist)
                            <a href="">{{ $artist }}</a> ,
                        @endforeach --}}
                    </div>
                </div>

            </div>
            <div class="secondary-right">
                <div class="row">
                    <div class="left-row">
                        <h2>Specs</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="left-row">
                        Series:
                    </div>
                    <div class="right-row">
                        <a href="#">{{ $comic['series'] }}</a>
                    </div>
                </div>

                <div class="row">
                    <div class="left-row">
                        U.S Price:
                    </div>
                    <div class="right-row">
                        {{ $comic['price'] }}
                    </div>
                </div>

                <div class="row">
                    <div class="left-row">
                        On Sale Date:
                    </div>
                    <div class="right-row">
                        {{ $comic['sale_date'] }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="details-banner">
        <div class="container">
            <a href='#' class="section-banner">
                <span>digital comics</span>
                <div id="img-div1"></div>

            </a>
            <a href='#' class="section-banner">
                <span>shop dc</span>
                <div id="img-div2"></div>

            </a>
            <a href='#' class="section-banner">
                <span>comic shop locator</span>
                <div id="img-div3"></div>

            </a>
            <a href='#' class="section-banner">
                <span>subscriptions</span>
                <div id="img-div4"></div>

            </a>
        </div>

    </div>




















    @include('/partials.footer')

</body>
<script>
    function openForm() {
        document.querySelector(".delete-page").style.display = "flex";
    }

    function closeForm() {
        document.querySelector(".delete-page").style.display = "none";
    }
</script>

</html>
