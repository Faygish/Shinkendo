<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href=".\css\style.css">

    <title>Shinkendo Midden Nederland</title>
  </head>
  <body>
    <?php include("nav.php"); ?>

<div class="container" id="vlak">
    <h1> Shinkendo Midden Nederland</h1>
    <h4>Japans Zwaardvechten</h4>

    <div class="container" id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner" id="carousel-inner">
    <div class="carousel-item active">
      <img src="..\img\carousel1.jpg" class="d-block w-100" alt="...">
    </div>

        <div class="carousel-item">
      <img src="..\img\carousel2.jpg" class="d-block w-100" alt="...">
    </div>

            <div class="carousel-item">
      <img src="..\img\carousel3.jpg" class="d-block w-100" alt="...">
    </div>

            <div class="carousel-item">
      <img src="..\img\carousel4.jpg" class="d-block w-100" alt="...">
    </div>

            <div class="carousel-item">
      <img src="..\img\carousel5.jpg" class="d-block w-100" alt="...">
    </div>

            <div class="carousel-item">
      <img src="..\img\carousel6.jpg" class="d-block w-100" alt="...">
    </div>

            <div class="carousel-item">
      <img src="..\img\carousel7.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    <hr>
    <div class="container" id="hometxt">
        <p><b>Welkom bij Shinkendo Midden Nederland!</b></p>

        <p>Wij zijn een zwaardvechtschool gevestigd in Harderwijk, waar wij 2 maal per week trainen.</p>
        
        <p>Shinkendo is een zwaardvechtsport waarin je leert om te gaan met het Japanse zwaard, de katana.
        <br>
        De naam Shinkendo betekent letterlijk ´De weg van het echte zwaard´.</p>

        <p>Middels de training zal je jouw kracht, conditie, en coördinatievermogen vergroten, waardoor je algehele fysieke en mentale gesteldheid verbeterd wordt.</p>

        <p>Kortom, wil je wat doen aan jouw conditie, ben je geïnteresseerd in de Japanse cultuur, of heb je ooit al eens willen zwaardvechten als de oude samoerai?</p>

        <p>Dan ben je van harte welkom in onze dojo!</p>
      </div>

</div>

<div id="fbbackground">
<h4 id="fbfollow">Volg ons op facebook!</h4>

<div id="fbapp">
    <div class="fb-page" data-href="https://www.facebook.com/shinkendomiddennederland" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" id="fb"><blockquote cite="https://www.facebook.com/shinkendomiddennederland" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shinkendomiddennederland">Facebook</a></blockquote></div>
</div>
</div>



      <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1846412168796831',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>