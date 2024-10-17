<!doctype html>
<html lang="en">

<head>
    <title>B. componente Realidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
  <img src="{{ asset('assets/iberov2.png') }}" alt="Logo Virtual Research Assistant" class="logo">
  <img src="{{ asset('assets/uNIVERSIDA TRES CULTURAS.png') }}" alt="Logo Virtual Research Assistant" class="logo1">

    <h3>B. componente Realidad</h3>
    <form action="#" method="post" class="form-container">
      <label for="titulo">B1. Fenómeno:Situación de una realidad que se presenta de manera arbitraria a los parámetros esperados y que genera la inquietud o necesidad <br>de interpretar/comprender,
        describir el fenómeno.    </label>
      <input type="text" id="titulo" name="titulo" required>
      

      <label for="pais">B2. Necesidad:Situación de una realidad que se constituye en un imperativo a cumplir nolmalmente asociado con el cumplimiento de una determinada <br> imposicion politica o legal, describir necesidad.</label>
        <input type="text" id="pais" name="pais" required>

        <label for="religion">B3. Problemática: Situación de una realidad que afecta el bienestar de un individuo  o una organización y que genera la necesidad imperiosa de resolver /suplir </label>
        <input type="text" id="religion" name="religion" required>
        
        <label for="religion">B4. Experiencia: Acción consciente o deliberada, normalmente no documentada a través de la cual se  ha interpretado un fenómeno o resuelto una problemática <br> y que genera la necesidad de sistematizar / compilar </label>
        <input type="text" id="religion" name="religion" required>
       
    </form>

    <div class="buttons-container">
        <a href="{{ url('/welcome') }}" class="btn1 btn-secondary">Atrás</a>
        <a href="{{url('/Metodologico')}}" class="btn3 btn-primary">Siguiente</a>
        <a href="#" class="btn2 btn-secondary">Guardar</a>
        <a href="{{url('/formulacion')}}" class="btn1 btn-secondary">Anterior</a>
        <section class="portfolio-experiment">
          
    </div>
    <body>
      
     
      
          
     
      
      
        </div>
      </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
