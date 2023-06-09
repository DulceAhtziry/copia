<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<style>
        body {
            background-image: url(img/escuela.png);
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;

            backdrop-filter: blur(5px); /* Ajusta el valor para aumentar o disminuir el desenfoque */
            background-color: rgba(255, 255, 255, 0.5); /* Cambia el valor alpha (0.5) para ajustar la opacidad */
            padding: 20px;
            text-align: center;
        }
</style>
<body>
        <div class="container mt-4 font-monospace" id="main-container">
            <div class="row">
                <div class="col">
                    @yield('contenido')
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
</body>
</html>