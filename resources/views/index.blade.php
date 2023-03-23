<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"><link rel="stylesheet" href="style.css">

        <title>NamaElektro</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
        
        <div style="text-align: center; background-color: white;">
                <img src="https://www.nama.si/wp-content/uploads/2021/02/logo-nama.png" class="rounded" alt="..." width="400" height="100">
                <hr style="width:80%;text-align:center;">
        </div>
        <div style="margin-top:60px"  style="text-align: left;" class="col-md-12 text-center">
                <!--<h1>Elektro Nama Test</h1>-->
        </div>
        <div class="container">
        <div class="row">
           <div class="col-md-6 text-center">
           <a href="/oprLog">
                <input type="button" class="btn btn-outline-info full-width mb-0 mt-0" id="1" value="Operater">
           </a>
           </div>
           <div class="col-md-6 text-center">
           <a href="/dobLog">
                <input type="button" class="btn btn-outline-info full-width mb-0" id="2" value="Dobavitelj">
           </a>
           </div>
        </div>
        </div>
        <footer>
        <div style="background: black; padding: 10px;text-align: center; margin-top: 300px; margin-bottom: 0px;">
                <img src="https://www.bilumina.com/assets/images/logo.png" class="rounded" alt="..." width="200" height="40"><br />
                <a href="/" style="color: white;">Domov</a>
                <span style="color: white;"> · </span>
                <a href="/dobLog" style="color: white;">Dobavitelj</a>
                <span style="color: white;"> · </span>
                <a href="/oprLog" style="color: white;">Operater</a>
        </div>
        </footer>
</body>
</html>
