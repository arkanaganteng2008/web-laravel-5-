   <!DOCTYPE html>
   <html lang="id">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>@yield('title', 'Website Saya')</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       @stack('styles')
   </head>
   <body>

       <center>
    <div class="header"><h1>Welcome To My Web Personal</h1></div>
    
        <div class="container">
        <nav>
            <div class="biodata"><a href="biodata.php">BIODATA</a></div>
            <div class="beranda"><a href="beranda.php">BERANDA</a></div>
            <div class="portofolio"><a href="portofolio.php">PORTOFOLIO</a></div>
        </nav>
        </div>
    </center>

       <main class="container my-4">
           @yield('content')
       </main>

       {{-- TEMPEL FOOTER LAMA KAMU DI SINI --}}

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
   </html>