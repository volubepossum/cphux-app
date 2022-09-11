<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hello CPHUX</title>
  <meta name="description" content="A simple project for interview.">
  <meta name="author" content="Roland">

  <meta property="og:title" content="Hello CPHUX">
  <meta property="og:type" content="website">
  <meta property="og:description" content="A simple project for interview.">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  @vite('resources/css/app.css')
  <script>
    function dropdownToggle(id) {
    document.getElementById(id).classList.toggle("hidden");
    }
  </script>
  @livewireStyles
</head>

<body>
    <div class="w-11/12 left-[4.1666666667%] static">
        <div class="z-50 relative">@livewire('navbar')</div>
        <div class="absolute top-20">
            @yield('content')
        </div>
        @livewire('footer')
    </div>
@livewireScripts
</body>
</html>


