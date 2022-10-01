<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contraction Theme</title>
        <link rel="icon" type="image/png" href="assets/images/myicon.png" />
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
        <script src="assets/plugin/swiper/js/main.js"></script>
    <body>
        {{-- @if (auth()->user()->can('create role'))    
        <button>Tambah</button>
        @endif --}}

        @can('create role')
        <button>Tambah</button>
        @endcan
   </body>
</html>