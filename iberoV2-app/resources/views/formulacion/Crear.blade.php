<!doctype html>
<html lang="en">

<head>
    <title>Crear Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="cabecera">
        <h1>Crear Proyecto</h1>
    </div>
    <div class="container">
        <img src="{{ asset('assets/iberov2.png') }}"  class="iberov">
        <img src="{{ asset('assets/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>
    <form method="post">
    
        <h3>A. Caracterización proyecto</h3>

        <div class="input-wrapper">
        <input type="text" id="name" placeholder="Nombre" required>
        </div>
        <div class="input-wrapper">
        <input type="email" id="email" placeholder="Email" required>
        </div>
        <div class="input-wrapper">
        <input type="text" id="direction" placeholder="Direccion" required>
        </div>
        <div class="input-wrapper">
        <input type="tel" id="phone" placeholder="Telefono" required>
        </div>
           
        <input class="btn" type="submit" name="register" value="Enviar">
        
    
    </form>
    <!--<h3>A. Caracterización proyecto</h3>
    <form action="#" method="post" class="form-container">
      <label for="titulo">Título del proyecto:</label>
      <input type="text" id="titulo" name="titulo" required>
      <label for="titulo">Fecha:</label>
      <input type="text" id="titulo" name="titulo" required>

      <label for="pais">País:(escribir pais de origen de proyecto)</label>
        <input type="text" id="pais" name="pais" required>

        <label for="religion">Región:(Declarar estado o departamento, municipio)</label>
        <input type="text" id="religion" name="religion" required>

        <label for="universidad">Universidad:(filial del proyecto si hay mas de uno separar por comas)</label>
        <input type="text" id="universidad" name="universidad" required>

        <label for="nombrePrograma">Nombre de Programa o programas vinculados:</label>
        <input type="text" id="nombrePrograma" name="nombrePrograma" required>

       
       
        <label for="integrantes">Integrantes:(separar por comas los integrantes)</label>
        <input type="text" id="integrantes" name="integrantes" required>

        <label for="identificacion">Identificación:(separar por comas según el orden de los integrantes)</label>
        <input type="text" id="identificacion" name="identificacion" required>

        <label for="email">E-mail de Contacto:(separar por comas según el orden de los integrantes)</label>
        <input type="email" id="email" name="email" required>

        <label for="categoriaInvestigacion">Categoría de Investigación: </label>
        <select id="categoriaInvestigacion" name="categoriaInvestigacion" required>
            <option value="">Seleccione una categoría</option>
            <option value="fundamental">Propuesta de investigación</option>
            <option value="aplicada">Investigación en Curso</option>
            <option value="desarrollo">Investigación y Desarrollo</option>
        </select>

        <button type="submit">Enviar</button>-->
    </form>

    <div class="buttons-container">
        <a href="#" class="btn1 btn-secondary">Atrás</a>
        <a href="{{ url('/Realidad')}}" class="btn3 btn-primary">Siguiente</a>
        <a href="#" class="btn2 btn-secondary">Guardar</a>
        <a href="{{ url('/welcome')}}" class="btn1 btn-secondary">Anterior</a>
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
