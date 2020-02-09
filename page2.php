<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
    <?php
        include "inc/header.inc.php";       
        $form1_class = "hidden";
        $form2_class = "hidden";
        $form3_class = "hidden";
        $form4_class = "hidden";
        $form5_class = "hidden";
        $form6_class = "hidden";

        if($_SERVER['REQUEST_METHOD'] == "GET"){

            if(isset($_GET['withBruce'])){
                $_form1 = (ucfirst($_GET['withBruce']));            

                switch ($_form1) {
                    case 'Yes':
                        $form1_class = "show";
                        break;
                    
                    case 'No':
                        $form1_class = "show";
                        echo "<h1>Too Bad</h1>";
                        break;
                        
                }
            }

            if(isset($_GET['quoteBruce'])){
                $_form2 = (ucfirst($_GET['quoteBruce']));            

                switch ($_form2) {
                    case 'Yes':
                        $form2_class = "show";
                        break;
                    
                    case 'No':
                        $form2_class = "hidden";
                        echo "<h1>Good Call</h1>";                        
                        break;
                        
                }
            }
            
            if(isset($_GET['pet'])){
                $_form3 = (ucfirst($_GET['pet']));            

                switch ($_form3) {
                    case 'Yes':
                        $form3_class = "show";
                        $form1_class = "show";
                        break;
                    
                    case 'No':
                        $form3_class = "hidden";
                        echo "<h1>Well, Alright.</h1>"; 
                        break;
                        
                }
            }
            if(isset($_GET['hair'])){
                $_form4 = $_GET['hair'];            

                switch ($_form4) {
                    case 'Yes':                     
                        $form4_class = "show";                        
                        break;
                    
                    case 'No':
                        $form4_class = "hidden";
                        echo "<h1>Well, Alright.</h1>";                                                 
                        break;
                        
                }
            }
            if(isset($_GET['youtube'])){
                $_form5 = $_GET['youtube'];            

                switch ($_form5) {
                    case 'Yes':                        
                        $form5_class = "show";                                               
                        break;
                    
                    case 'No':                        
                        echo "<h1>Fine!</h1>";                         
                        break;
                        
                }
            }
            if(isset($_GET['weight'])){
                $_form6 = $_GET['weight'];            

                switch ($_form6) {
                    case 'Yes':                        
                        $form6_class = "show";
                        echo "<h1>Look at that form</h1>";
                        echo "<h1>Remember to lift with your legs kids</h1>";                                                 
                        break;
                    
                    case 'No':
                        $form6_class = "show";                        
                        echo "<h1>No, you have to see. Observe the perfect form</h1>";                         
                        break;
                        
                }
            }

            if(isset($_GET['Comments'])){
                echo "<h1>Great I will make sure to take that into account</h1>";
            }
        }         
            
        

    ?>
<div class="content"></div>
    <img src="img/bruce.png" class="<?php echo $form1_class?>" alt="bruce elgort" height="500" width="500">
    <img src="img/turtle.jpg" class="<?php echo $form3_class?>" alt="turtle picture" height="500" width="500">
    <img src="img/bruce1.png" class="<?php echo $form4_class?>" alt="bruce with hair" height="500" width="500">
    <img src="img/bruce2.png" class="<?php echo $form6_class?>" alt="bruce lifting weights" height="500" width="500">

    <div class="alert alert-dark fade in text-center <?php echo $form2_class?>" role="alert">
    "Please hold" - Bruce Elgort  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="alert-link">
    Click this link to see the quote live!</a>
    </div>

    
    <iframe src="https://www.youtube.com/embed/TrF9FAoQheU"  class="<?php echo $form5_class?>" width="480" height="400"></iframe>
    
</div>    
<?php
    include "inc/footer.inc.php";
?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>