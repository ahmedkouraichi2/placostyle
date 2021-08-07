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
     <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="loading" /></div>
        </div>
    <!-- end loader -->




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
               <a href="#notremagasin">
          
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
             <a href="index.php" >Accueil</a>
        </li>

        <li class="secondary-nav-boutique">
          <a href="#Boutique">Boutique</a>
          <!--   <div class="boutique-dropdown">
             <!--   <a href="#">plaque perforée</a>
               <a href="#">Plaque  standard</a>
               <a href="#">Plaque  hydrofuge </a>
               <a href="#">Knauf Insulation</a>
               <a href="#">Mastic</a>
               <a href="#">Vis de platre </ -->
             <!--  </div> --> 
        </li>
        


        <li>
          <a href="Nosréalisations">Nos réalisations</a>
        </li>

        <li class="secondary-nav-contact" >
          <a herf=""> Contactez-nous</a>
             <div class="contact-dropdown">
               <div  class="contact-dropdown-img" >
                   <span>Coordonnées & Contact </span>
                      <img src="img/placodeplatre.jpg" alt="placodeplatre Panneau" /> 
            </div>
            

              <form name="form_contact" action="" method="="action width="100%">
              <label for="">Nom & Prénom</label>
              <input type="text" maxlength="20" value="<?php if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>" /><br>
              <label for="">telephone</label>
              <input type="text" type="number" /> </br>

              <label for="">Email</label>
              <input type="email"  /><br>


              <label for="">Message</label><br>
              <textarea name="message" id="message" width="100%"></textarea><br>
              <input type="submit" class="contact-dropdown-button" value="Envoyez" />
            </form>
          </div> -->
        </li>
      </ul>
    </div>

    <!--Fin Nav Bar -->




 <!--excercice -->
    <div id="accueil">
        <header class="header-home">

          <img
             class="header-home-main-image"
             src="images/placoarraiere.PNG"
             alt="placoplatre header-home" />
          

          <div class="header-home-images">
            <a href="#">
                <span>Cloisons en placoplatre</span>
                <img height="120rem"  src="images/cloisonplatre 4.jpg" alt="cloison en platre " />
            </a>


            <a href="#">
               <span>Isolation en placoplatre</span>
               <img  height="120rem" src="images/isolation-placoplatre.jpg" alt="isolation en  placoplatre " />
            </a>


            <a href="#">
              <span>Faux plafond en placoplatre</span>
              <img height="120rem" src="images/fautplafond-enplatre.jpg" alt="faut plafond enplatre" />
            </a>


            <a href="#">
              <span style="margin-top:10px;">faux plafond démontable</span>
              <img  height="120rem" src="images/fauxplafond-dementable.jpg" alt="faux plafond dementable " />
            </a>

            <a href="#">
              <span>revétement façade</span>
              <img height="120rem"  src="images/revétement façade.jpg" alt="revétement façade placoplatre " />
            </a>

    
          </div>
        </header>



        <main> 
          <div class="config-espace">
            <span>E</span>
            <img
              class="config-icon"
              src="icons/iconplacoplatre.PNG"
              alt="config icon"
            />
            <div>
              <h1>Configurez votre espace</h1>
              <p>
                 les PlacoPlâtre sont efficaces même si recouverte avec finition #
                Faitez vous demander un devis gratuit (+216) 20 405 151
              </p>
            </div>
            <img src="images/placoarraiere.PNG" alt="presetation placopaltre " />
          </div>




  
          <section class="nos-realisations-section">
            <div class="nos-realisation-text">
               <h1 id="acceuil">PlacoStyle Placoplatre </h1>
                <div class="nos-realisations-box">
                  <div class="nos-realisations-description">
                     <h2>Placoplatre:solution platre</h2>
                  <p>
                   PlacoStyle est une société réputée offrant un service complet de
                    fourniture et pose de revêtements murs et sols pour les particuliers 
                    et les entreprises  sur toute la Tunisie..
                     Cloisons ou en faux plafonds, les plaques de plâtre ou le placoplatre offrent une finition parfaite dans les travaux d’aménagement 
                     et de construction pour une  haute qualité au service de clients Exigents
                    
                  </p>
                </div>
  

              

            </div>
          </div>



            <div class="nos-realisations-image">
              <div style=" width:100%;">
                <img src="images/imgPresantaion.png" alt="Panneau placo platre " />
                <div class="nos-realisations-icon">
                  <img src="icons/E.svg" alt="E icon" />
                </div>
              </div>
            </div>
          </section>
  
          <section class="notice-installation">
            <div id="travaille">
               <h1>Notice & Installation</h1>
              <p>
                Avant de commencer, calculez la quantité de platre et  de
                quincaillerie dont vous aurez besoin Avec un devis gratuit.
              </p>
              <div class="notice-installation-savoir-plus">
                <!-- <span>En savoir plus</span> -->
                <img width="400px" height="400px" src="images/realisationplaco1.PNG" alt="chantier placoplatre " />
                
              </div>
            </div>
            <div class="notice-installation-img">
              <img  width="400px" height="400px" src="images/r4.PNG" alt="chantier placoplatre " />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </div>


            <divv class="notice-installation-img">
              <img  width="400px" height="400px"src="images/r17.jpg" alt="hantier placoplatre" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />

           
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img  width="400px" height="400px"src="images/placopaltre5.jpg" alt="" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img width="400px" height="400px" src="images/r16.jpg" alt="" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img  width="400px" height="400px" src="images/chantierplacoplatre.PNG" alt="chantierplacoplatre" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
          </section>



  
          <section class="notre-magasin">
            <div class="notre-magasin-image">
              <img src="images/placo-platre-magasin.jpg" alt="placo-platre-magasin" style="" />
            </div>
            <div>


              <h1 id="notremagasin">Notre magasin</h1>
              <div class="notre-magasin-description">
                <img src="images/placo-platre-magasin2.jpg" alt="placo-platre-magasin2" />
               
               
                <div class="notre-magasin-p">
                  <p>
                    PlacoStyle est votre fournisseur de Placoplatre, isolation et faux plafonds 
                     pour tous  projets
                  </p>
                </div>
                
              </div>

              <div class="notre-magasin-description">
                <img src="images/magasinplacpoplatre.jpg" alt="placo-platre-magasin2" />
                
            
              </div>
            </div>
          </section>

          <section class="notice-installation" id="réalisation">
            <div id="Boutique">
               <h1>Boutique</h1>
              <p>
               placostyle propose plus des dizaines de produits à la vente dans le univers de placo-platre et de construction 
               generale
               
              </p>
              <div class="notice-installation-savoir-plus">
                <!-- <span>En savoir plus</span> -->
                
              </div>
            </div>
            <div class="notice-installation-img" id="">
              <img  width="400px" height="400px" src="images/support.jpg" alt="chantier placoplatre " />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </div>


            <divv class="notice-installation-img">
           <img  width="400px" height="400px"src="images/vis" alt="hantier placoplatre" />
               <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />

           
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img  width="400px" height="400px"src="images/ciment.jpg" alt="" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img width="400px" height="400px" src="images/palqueperforé.webp" alt="" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
            <divv class="notice-installation-img">
              <img  width="400px" height="400px" src="images/plaque de platre.jpg" alt="chantierplacoplatre" />
              <div class="notice-installation-icon">
                <img src="icons/E.svg" alt="E icon" />
              </div>
            </divv>
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


          
  
           
<!--           </main>
 -->    </div>
   

      
        
  
  </body>
</html>
