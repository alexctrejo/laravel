<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>App</title>
</head>
<body>
    @include('layouts/navbar')
    <div class="container">
      <h2 class="mt-5 mb-4 text-center">BIENVENIDOS ALBATROS</h2>
      <div class="row">
          <div class="col-md-4">
              <img src="assets/1.jpg" alt="Imagen 1" class="img-fluid mb-4">
          </div>
          <div class="col-md-4">
              <img src="assets/2.jpg" alt="Imagen 2" class="img-fluid mb-4">
          </div>
          <div class="col-md-4">
              <img src="assets/3.jpg" alt="Imagen 3" class="img-fluid mb-4">
          </div>
  
          <!-- Agrega más columnas según sea necesario para más imágenes -->
      </div>
  </div>
  
  @yield('content')

</body>
</html>