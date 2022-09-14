<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manmozel</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    @vite('resources/css/app.css')
    <style>
        .img {
            opacity: 0;
            transition: all 2s ease-in-out;
        }

        .active {
            opacity: 100%;

        }
    </style>
</head>

<body class="antialiased font-aboreto">
    @include('navBar.navbar')
    @yield('content')
    @include('footer.footer')
    <script>
        let content = document.querySelectorAll(".img");
        window.addEventListener('scroll', () => {
            for (let i = 0; i < content.length; i++) {
                let contentPosition = content[i].getBoundingClientRect().top;
                let contentPositionBottom = content[i].getBoundingClientRect().bottom;
                let screenPosition = window.innerHeight;

                if (contentPosition < screenPosition ) {

                    content[i].classList.add('active');
                } else {
                    content[i].classList.remove('active');
                }
            }

        });
    </script>
</body>

</html>
