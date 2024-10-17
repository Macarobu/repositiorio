<!doctype html>
<html lang="en">

<head>
    <title>C. Componente Metodológico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/stylemetod.css') }}">
</head>

<body>
    <h1>C. Modelado de investigación</h1>
    <h2>C1. Enfoque</h2>
    <form id="myForm">
        <select id="mySelect" multiple>
            <option value="Cualitativa Enfoque de investigación normalmente (pero no excluyente) de carácter INDUCTIVO, cuya principal fuente de información reposa en datos de carácter NO NUMERICO (Lo cual no implica que se utilicen algunos datos numéricos para validar o sustentar afirmaciones), y su propósito es dar cuenta de las relaciones de significado y sentido implícitas en una determinada realidad, para su identificación y análisis normalmente se utilizan dimensiones o categorías de análisis  predeterminadas  o que emergen del proceso investigativo.">Cualitativa
                Enfoque de investigación normalmente (pero no excluyente) de carácter INDUCTIVO, cuya principal fuente de información reposa en datos de carácter NO NUMERICO (Lo cual no implica que se utilicen algunos datos numéricos para validar o sustentar afirmaciones), y su propósito es dar cuenta de las relaciones de significado y sentido implícitas en una determinada realidad, para su identificación y análisis normalmente se utilizan dimensiones o categorías de análisis  predeterminadas  o que emergen del proceso investigativo.</option>
            <option value="Cuantitativa">Cuantitativa:
                Enfoque de investigación normalmente (pero no excluyente) de carácter DEDUCTIVO, cuya principal fuente de información reposa en datos de carácter NUMERICO (Lo cual no implica que se utilicen algunos datos NO numéricos para validar o sustentar afirmaciones), su propósito es identificar tendencias y regularidades que a su vez pueden (o podrán) servir de sustento a relaciones de significado y sentido implícitas en una determinada realidad.</option>
            <option value="Mixta">Mixta</option>
                       
        </select>

        <button type="button" onclick="ajustarTexto()">seleccione enfoque</button>
    </form>

    </select>
    
    <div id="output"></div>

    <script>
        
    </script>
    <h2>C2. Tipo de investigación</h2>
    <form id="myForm">
        <select id="mySelect" multiple>
            <option value="Cualitativa Enfoque de investigación normalmente (pero no excluyente) de carácter INDUCTIVO, cuya principal fuente de información reposa en datos de carácter NO NUMERICO (Lo cual no implica que se utilicen algunos datos numéricos para validar o sustentar afirmaciones), y su propósito es dar cuenta de las relaciones de significado y sentido implícitas en una determinada realidad, para su identificación y análisis normalmente se utilizan dimensiones o categorías de análisis  predeterminadas  o que emergen del proceso investigativo.">Cualitativa
                Enfoque de investigación normalmente (pero no excluyente) de carácter INDUCTIVO, cuya principal fuente de información reposa en datos de carácter NO NUMERICO (Lo cual no implica que se utilicen algunos datos numéricos para validar o sustentar afirmaciones), y su propósito es dar cuenta de las relaciones de significado y sentido implícitas en una determinada realidad, para su identificación y análisis normalmente se utilizan dimensiones o categorías de análisis  predeterminadas  o que emergen del proceso investigativo.</option>
            <option value="Cuantitativa">Cuantitativa:
                Enfoque de investigación normalmente (pero no excluyente) de carácter DEDUCTIVO, cuya principal fuente de información reposa en datos de carácter NUMERICO (Lo cual no implica que se utilicen algunos datos NO numéricos para validar o sustentar afirmaciones), su propósito es identificar tendencias y regularidades que a su vez pueden (o podrán) servir de sustento a relaciones de significado y sentido implícitas en una determinada realidad.</option>
            <option value="Mixta">Mixta</option>
            
        </select>

        <button type="button" onclick="ajustarTexto()">seleccione enfoque</button>
    </form>


    <div id="output"></div>

    <script>
        function ajustarTexto() {
            const select = document.getElementById('mySelect');
            const selectedOptions = Array.from(select.selectedOptions).map(option => option.value);
            const outputDiv = document.getElementById('output');

            if (selectedOptions.length === 0) {
                outputDiv.textContent = 'No has seleccionado ninguna opción.';
            } else {
                outputDiv.textContent = 'Has seleccionado: ' + selectedOptions.join(', ');
               resultado=selectedOptions.join;
               return(resultado);
               return(clean);
            }
        }
    </script>
 <form id="myForm">
<label for="categoriaInvestigacion">Categoría de Investigación: </label>
<select id="categoriaInvestigacion" name="categoriaInvestigacion" required>
    <option value="">Seleccione una categoría</option>
    <option value="fundamental">Propuesta de investigación</option>
    <option value="aplicada">Investigación en Curso</option>
    <option value="desarrollo">Investigación y Desarrollo</option>
</select>

<button type="submit">Enviar</button>
<button type="button" onclick="ajustarTexto()">seleccione enfoque</button>
    </form>
</form>

<script>
    function ajustarTexto() {
        const select = document.getElementById('categoriaInvestigacion');
        const selectedOptions = Array.from(select.selectedOptions).map(option => option.value);
        const outputDiv = document.getElementById('output');

        if (selectedOptions.length === 0) {
            outputDiv.textContent = 'No has seleccionado ninguna opción.';
        } else {
            outputDiv.textContent = 'Has seleccionado: ' + selectedOptions.join(', ');
           resultado=selectedOptions.join;
           return(resultado);
           return(clean);
        }
    }
</script>

</body>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>


