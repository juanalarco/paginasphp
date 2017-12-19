<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
    <style media="screen">
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: rgb(30, 204, 14);
    }
    </style>

  </head>
  <body>

<?php $dondeEstamos="menuprincipal"?>
<ul>
  <li><a class=<?php if ($dondeEstamos=="sobrenosotros") {
    echo "active";
  } ?> href="#sobrenosotros">Sobre Nosotros </a></li>

  <li><a class=<?php if ($dondeEstamos=="ubicacion") {
    echo "active";
  } ?> href="#ubicacion">Ubicacion </a></li>


<li><a class=<?php if ($dondeEstamos=="noticias") {
  echo "active";
} ?> href="#noticias">Noticias </a></li>

</ul>
  </body>
</html>
