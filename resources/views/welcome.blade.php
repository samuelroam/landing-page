<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta charset="utf-8" />

  <title>Landing page</title>

  <!-- include de enlaces a css y js -->
  @include('resources')
  <script>
    $(document).ready(function() {
      $("#demo").hide();
      $("#ocultar").click(function() {
        console.log("pene")
        $("#demo").slideToggle();
      });
    });
  </script>
</head>

<body>
  <div id="inicio"></div>
  <div class="container-fluid justify-content-center">
    <h1>TimeWorkers</h1>

  </div>

  <div id="masInfo">
    <button id="ocultar" type="button" class="btn btn-info justify-content-center">Haz click para mas información del proyecto</button>
    <div id="demo">
      Este proyecto trata de crear un mercado de servicios donde la moneda de cambio es otro servicio; sin dinero, el tiempo que otros están ayudandote, es el tiempo que tendrás que ayudar a otras personas
    </div>
  </div>



  <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top justify-content-center">
    <a class="navbar-brand" href="#">Logo</a>
    <ul class="navbar-nav justify-content-start">
      <li class="nav-item">
        <a class="nav-link" href="#inicio">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid"><br>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  </div>






</body>

</html>