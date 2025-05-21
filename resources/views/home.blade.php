@php
    $picture = get_picture();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/Logo.png">
    <title>Homepage</title>

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Sriracha&display=swap" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/Logo.png" alt="logo">
                <h1>
                    Mars<span>Kara</span>
                </h1>
            </div>
            <ul>
                <li><a href="#" class="b">Home</a></li>
                <li><a href="#about" class="p">About</a></li>
                <li><a href="#picture" class="b">Picture</a></li>
                <li><a href="/marsKara" class="p2">LoginAdmin</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <section class="home" id="home">
        <main>
            <img src="img/Hero1.jpg" alt="Hero">
        </main>
        <aside>
            <h1>
                Welcome to ours experience
            </h1>
            <button id="browse">
                Browse ours web
            </button>
        </aside>
    </section>
    <section class="about" id="about">
        <h1>About Us</h1>
        <div class="mainabout">
            <main>
                <img src="" alt="Mars">
                <p class="mars">
                    Berly Marcellino S.<br>
                    Mars<br>
                    Gunungkidul<br>
                    25 Oktober 2005<br>
                    Informatika UNS<br>
                </p>
            </main>
            <aside>
                <p class="kara">
                    Miftah Uljannah<br>
                    Kara<br>
                    Tebingtinggi<br>
                    11 Juni 2006<br>
                    Pariwisata UNS<br>
                </p>
                <img src="" alt="Kara">
            </aside>
        </div>
    </section>
    <section class="picture" id="picture">
        <h1>Pictures</h1>
        <div class="content" id="content">
            @php
                $i=1;
            @endphp
            @foreach ($picture as $item)   
            <div class="img">
                <img src="{{ Storage::url($item->thumbnail) }}" alt="picture {{ $i }}">
                <h3>{{ $item->title }}</h3>
                <p>Date : {{ $item->date }} </p>
            </div>
            @php
                $i++;
            @endphp
            @endforeach
        </div>
        <button id="loadMore">
            Muat lebih banyak
        </button>
    </section>
    <section class="contact" id="contact">
        <h1>Social Media</h1>
        <div class="media">
            <i data-feather="instagram"></i>
            <p>: @maskaraaa.sea</p>
        </div>
        <div class="media">
            <img src="img/tiktok-seeklogo.png" alt="tiktok">
            <p>: @maskaraaa.sea</p>
        </div>
    </section>
    <div class="copyright">
        <p>Copyright MarsKara</p>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>