<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Websites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    {{-- <div class="splash">
        <div class="splash-image-div"></div> --}}

    <div class="container-fluid h-100 d-flex gap-5 align-items-center position-relative">
        <ul class="list-unstyled d-flex gap-4 flex-column side-nav">
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-home"></i> <span><a href="{{ url('/') }}">Home</a></span>
                </button>
            </li>
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-user"></i> <span><a href="{{route('user.index')}}">About</a></span>
                </button>
            </li>
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-file"></i> <span><a href="{{ url('users/resume') }}">Resume</a></span>
                </button>
            </li>
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-table-list"></i> <span><a href="{{ url('fillable/info') }}">Portfolio</a></span>
                </button>
            </li>
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-server"></i> <span>Services</span>
                </button>
            </li>
            <li class="list-item">
                <button class="c-btn">
                    <i class="fa-solid fa-envelope"></i> <span><a href="{{ url('users/contact') }}">Contact</a></span>
                </button>
            </li>
        </ul>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>
