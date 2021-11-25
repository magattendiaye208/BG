<?php
  include('php/connect.php');
  if((isset($_POST['nom']) && !empty($_POST['nom']))  &&  (isset($_POST['prenom']) && !empty($_POST['prenom']))
  && (isset($_POST['email']) && !empty($_POST['email']))
  && (isset($_POST['message']) && !empty($_POST['message']))){
    
	$nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = "magattendiaye208@gmail.com";
	$headers = "From : " . $email;
	
	//if(mail($to, $message,$headers )){
    $query = "INSERT INTO'contact'(nom, prenom, email, message) VALUES('$nom', '$prenom', '$email', '$message')";
    $result = mysqli_query($connection, $query);
    $succes = "votre message a été envoyé avec succès";
  //}
    
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BaolBusness</title>
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.bundle.js">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="icon" type="images/jpg" href="images/menu.jpg" width = "10px"  height="10px" >
    </head>
    <body>
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                  <a class="navbar-brand" href="#">BaolBusness</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="page1.html">Acceuil</a>
                      <a class="nav-link" href="propos.html">A propos</a>
                      <a class="nav-link" href="service.html">Services</a>
                      <a class="nav-link" href="contact.html">Contats</a>
                    </div>
                  </div>
                </div>
              </nav>
              <header class="masthead">
              <div class="container">

                <div class="row">
              
                  <div class="col-8">
                    <h3>CONTACTEZ-NOUS
                        </h3> 
                  </div>
                  <form method="post">
                  <div class="col-4">
              
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nom</label>
                      <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre nom">
                    </div>
              
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">PRENOM</label>
                      <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Entrer votre prénom">
                    </div>
              
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">email</label>
                      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="votre Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                      <input type="text" name="message" class="form-control" id="exampleFormControlInput1" placeholder="votre message">
                    </div>
                    <button class="btn btn-outline-info btn-sm" type="submit">Envoyer</button>
                  
</form>
                
              
              
            </header>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/bootstrap.bundle.min.js"></script>
              <br>
              <br>
              <br>
              <div class="align="center>
             
             
                </div>
              <br><br>
              <br>
  <footer class="align="center> 
        
    <p> Retrouver nous:</p><br>
    <p>
            <a class="special" href="#"><img src="images/facebook.png" alt="Facebook" /></a>
            <a class="special" href="#">    <img src="images/twitter.png" alt="Twitter" /></a>
        
            <a class="special" href="#">	<img src="images/YouTube.png" alt="YouTube" /></a>
        
            <a class="special" href="#">	<img src="images/instagram.png" alt="instagram" /></a>
        </p>
            <h4>2B-Diourbel/Sénégal@ groupeB Nov-2021 / 78-609-07-17</h4>
        
        </footer>
    
  </body>
  </html>