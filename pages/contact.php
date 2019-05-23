<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
   
    <title>Shinkendo Midden Nederland</title>
  </head>
  <body>

    <?php include("./nav.php");

          if(isset($_POST['submit'])){

      $subject = "Bericht van website";

        $message = "Voornaam: " . $_POST['voornaam'] . "<br>" . "Achternaam: " . $_POST['achternaam'] . "<br>" . "Tel: " . $_POST['telefoon'] . "<br><br>" . $_POST['bericht'];

        $headers =  "Content-Type: text/html; charset=UTF-8 \r\n";
        $headers .= "From:" . $_POST['email'] . "\r\n";


        mail("shinkendomiddennederland@gmail.com", $subject, $message, $headers);
      }
    ?>

    <div class="container" id="vlak">
      <h3>Wil je ook leren zwaardvechten als de oude samoerai?</h3>
      
      <h3>Neem dan contact met ons op voor een <span id="proefles">gratis proefles!</span></h3>
      <hr id="contact_txt">


      <form role="form" method="post" action="" autocomplete="off">

                <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="voornaam" name="voornaam" id="voornaam" class="form-control input-lg" placeholder="Voornaam*" tabindex="1" required="true">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="achternaam" name="achternaam" id="achternaam" class="form-control input-lg" placeholder="Achternaam" tabindex="2">
            </div>
          </div>
        </div>

          <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <input type="text" name="telefoon" id="telefoon" class="form-control input-lg" placeholder="Telefoonnummer*" tabindex="3" required="true">
        </div>
      </div>

      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email adres*" tabindex="4" required="true">
        </div>
          </div>
        </div>

        <div class="row">
      <div class="col-xs-6 col-md-6">
        <div class="form-group">
          <textarea id="contactbericht" type="text" name="bericht" id="bericht" class="form-control input-lg" placeholder="Typ hier uw bericht*" tabindex="5" required="true "></textarea>
        </div>
      </div>
    </div>

        <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Verstuur bericht!" class="btn btn-dark btn-block btn-lg" tabindex="6"></div>
        </div>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>