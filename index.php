<?php include("config.php");?>
<!DOCTYPE html>
<html>
    <head>
      <title>KillaGorilla</title>
      <link rel="stylesheet" href="estilo.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" >
      <meta name="keywords" content="Powerlifting,Weightlifting,Bodybuilding">
      <meta name="description" content="The largest selection of fitness articles, exercises, workouts, supplements, & community to help you reach your goals!">
      <meta charset="utf-8">
      <!--fonte-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
          $url= isset($_GET["url"]) ? $_GET["url"] :"HOME";
           switch ($url) {
             case 'Powerlifting':
               echo  '<target  target="Powerlifting" />';
               break;
             
               case 'Weightlifting':
             echo  '<target  target="Weightlifting" />';
               break;
           }
        ?>
        <header>
            <div class="center">
            <div class="logomarca left"><a href="/" class="logo">KillaGorilla</a></div><!--logomarca-->
            
             <nav class="desktop right">
              <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>#Powerlifting">Powerlifting</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>#Weightlifting">Weightlifting</a></li>
              <li><a href="<?php echo INCLUDE_PATH;?>Bodybuilding">Bodybuilding</a></li>
            </nav>
            </div><!--center-->
        </header>
        <div class="clear"></div>
        <?php
        $url= isset($_GET["url"]) ? $_GET["url"] :"home";
        
        if(file_exists("page/".$url.".php")){
          include("page/".$url.".php");
        }else{
          if ($url!="Weightlifting" && $url!="Powerlifting") {
            include("page/404.php");
          }else{
          include("page/home.php");
        }
        }
        ?>
          
        <div class="clear"></div>
        </div><!--center-->
        </section>
        <footer >
           <p style="text-align: center;">todos os direitos reservados</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="/projeto_php/js/scrits.js"></script>
         <script src="/projeto_php/js/slider.js"></script>
        <?php
        if($url=="BODYBUILDING"){
        ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13430.447037969461!2d-97.1241201!3d32.6963681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd849fcffc7232265!2sMetroflex%20Gym%20Arlington!5e0!3m2!1spt-BR!2sbr!4v1635616892793!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
       <?php }?>
      
        
    </body>
</html>