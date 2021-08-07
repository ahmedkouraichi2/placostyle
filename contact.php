<!DOCTYPE html>
<html lang="fr">
  <head>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/Accueil.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/Boutique.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/NavBar.css">


    <title>Placoplatre::solution platre</title>
  </head>



  <body>
  <!--nav bar-->
    <div class="nav-bar">
        <ul class="primary-nav">
            <li>
               <div id="nav"><img src="images/logo.png" width="100px" height="=50px"></div>
             </li>
           <li>
             <input
                 type="text"
                  class="input-recherche"
                  placeholder="&#61442;   Recherche"
                  style=" font-family: Arial;"/>  
          
            </li>



            <li class="notre-magasin">
               <a href="#map">
          
               <img
                class="img1"
                  src="icons/location-map-marker.svg"
                  alt="location-icon"
                  width="26"
                  height="26"/>


            
               <span>Notre magasin</span>
                <img
                  class="img2"
                 src="icons/location-map-marker.svg"
                alt="location-icon"
                width="26"
                height="26"/>
                </a>
            </li>




            <li class="configurateur">
                  <a href="#travaille">
            
                    <img
                     class="img1"
                     src="icons/iconplacoplatre.PNG"
                    alt="config-icon"
                    width="20"
                    height="28"/>
            
              <span>Configurateur</span>
                  </a>
        </li>




      </ul>





      <ul class="secondary-nav">
         <li>
             <a href="#acceuil" >Accueil</a>
        </li>

        <li class="secondary-nav-boutique">
          <a>Boutique</a>
            <div class="boutique-dropdown">
               <a href="#">plaque perforée</a>
               <a href="#">Plaque  standard</a>
               <a href="#">Plaque  hydrofuge </a>
               <a href="#">Knauf Insulation</a>
               <a href="#">Mastic</a>
               <a href="#">Vis de platre </a>
          </div>
        </li>
        


        <li>
          <a href=#>Nos réalisations</a>
        </li>

        <li class="secondary-nav-contact" >
          <a herf="contact.php">Contactez-nous</a>
          <!--    <div class="contact-dropdown">
               <div  class="contact-dropdown-img" >
                   <span>Coordonnées & Contact </span>
                <<img src="img/placodeplatre.jpg" alt="placodeplatre Panneau" />  --> -->
            </div>
            

           
          </div> -->
        </li>
      </ul>
    </div>

    <!--Fin Nav Bar -->

          
    <div class="formulaire">
            
           <!--  <div class="container">
            <<img  width="100%"src="img/placodeplatre.jpg" alt="placodeplatre Panneau" />  --> -->

              <form name="form_contact" action="" method="="action>
              <label for="">Nom & Prénom</label>
              <input type="text" maxlength="20" value="<?php if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>" />
              <label for="">telephone</label>
              <input type="text" type="number" />

              <label for="">Email</label>
              <input type="email"  />

              <label for="">Message</label>
              <textarea name="message" id="message"></textarea>
              <input type="submit" class="contact-dropdown-button" value="Envoyez" />
                </form>

    </div>
            </section>

     


          <section>
            <div class="row">
              <div id="map">
               <iframe class="map col-lg-12 col-xl-12 col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.744033234621!2d10.820356434642624!3d35.746206621432094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb074afcec58af785!2sPlaco%20Style!5e0!3m2!1sen!2stn!4v1626606059604!5m2!1sen!2stn" allowfullscreen="" loading="lazy"></iframe>>
                </div>
            </div>
          </section>
          <div class="head">
            <div  class="container">
               <div class="row ">
                  <div  class="col-md-10">
                     <ul class="email_call">
                        <li><a href="tel:+21620405151"><img src="icons/2.png" alt="#"/>(+216) 20 405 151 </a></li>
                        <li><a href="tel:+21653405151"><img src="icons/2.png" alt="#"/>(+216) 53 405 151</a></li>
                        <li><a> <img id="iconfooter"src="icons/locationplacostyle.png" alt="#"/>Zone Industriel Route de Khniss <strong>Monastir</strong>&nbsp; Tunisie</a></li>
                     </ul>
                

                  </div>
                  <div  class="col-md-2">
                     <ul class="social_icon">
                        <li><a  target="_balck"href="https://www.facebook.com/placostyle/?ref=pages_you_manage"><i><img src="icons/facebookplacoplatre.png"></i></a></li>
                        <li><a target="_balck" href="https://youtube.com/channel/UCOK4XN-OeOBXdTlZ5TxOstg"><i><img src="icons/youtubeplacoplatre.png"></i></a></li>
                        <li><a target="_balck" href="https://www.facebook.com/samir.boughammoura.5"><i><img src="icons/instagramplacoplatre.jfif"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
          
        

              
            </div>
            </div>


          
  
           
          </main>
  
   

      
        
  
  </body>
</html>
