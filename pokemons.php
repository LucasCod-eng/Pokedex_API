<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
  </head>
  <body class="d-flex h-100 text-center text-bg" id="seila">
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >
        <header class=" p-3 mb-3 navbar-light" style= "background-color: #ffffff" ;>
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" >
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="pokebola.html" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Início</font></font></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inventário</font></font></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Batalhas</font></font></a></li>
                <li><a href="#" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Proximas Evoluções</font></font></a></li>
              </ul>
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <a href = "./pokemons.php" type="button" class="btn btn-outline-dark">Gerar Pokemón</a>
                </form>
              <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./img/Ash.jpeg" alt="mdo" width="60" height="60" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
        </header>
      </body>
    <section  style= "background-color: #ffffff8f"  class= "container">
      
    <?php
$p = rand(1, 150);
 
$api = curl_init("https://pokeapi.co/api/v2/pokemon/$p");
curl_setopt($api ,CURLOPT_RETURNTRANSFER, true );
$response = curl_exec( $api );
curl_close( $api );

$pokemon = json_decode( $response );
  ?>
<div class="columns features" >
  <div class="column is-4" >
    <div class="">
      <div class="card-image has-text-centered" >
<?php
echo  '<img src= "' .$pokemon->sprites->back_default. '"width="300">' ;
echo  '<img src="' .$pokemon->sprites->front_default. '" width="300">' ;
?>
</div>
<div class="card-content has-text-centered" >
  <div class="content" >   
    <h4> NOME </h4>
    <h4>
    <?php
    echo  $pokemon->name ;
    ?>
    <h4/>

<h4> HABILIDADES <h4/>
<?php
foreach($pokemon->abilities as $k=>$v ) {
    echo   $v ->ability -> name. "<br>" ;
}
?>
<h4> TIPO <h4/>
<?php
echo  $pokemon->types [0]->type->name ;
?>
              <h4/>
           </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
