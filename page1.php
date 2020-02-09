<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
    <?php
        include "inc/header.inc.php";
        
    ?>

<div class="content">
    <h1><img src="img/bruce.png" alt="bruce elgort" height="50" width="50"><strong>Get to know Bruce</strong>
    <img src="img/bruce.png" alt="bruce elgort" height="50" width="50"></h1>

    <form class="form" action="page2.php" method="GET">       
                                
            <label for="withBruce" class="label">Want to see a picture of Bruce?</label>
            <input type="text" name="withBruce" class="form-control" id="withBruce" placeholder="Yes or No">
            <button type="Submit" class="btn btn-success btn-space">Submit</button>

    </form>

    <form class="form" action="page2.php" method="GET">
                                                    
            <label for="quoteBruce" class="label">Want to read a famous quote from Bruce?</label>
            <input type="text" name="quoteBruce"  class="form-control" id="quoteBruce" placeholder="Yes or No">
            <button type="Submit" class="btn btn-success btn-space">Submit</button>
    </form>

    <form class="form" action="page2.php" method="GET">

            <label for="pet" class="label">Want to see Bruce's pet?</label>
            <input type="text" name="pet" class="form-control" id="pet" placeholder="Yes or No">
            <button type="Submit"  class="btn btn-success btn-space">Submit</button>
    </form> 


    <form class="form" action="page2.php" method="GET">
        <div>
            <p class="label"> Want to see Bruce with presidential hair?</p>
            <label><input type="radio" value="Yes" name="hair">Yes</label>
            <label><input type="radio" value="No" name="hair">No</label>
        </div>
        <button type="Submit"  class="btn btn-success btn-space">Submit</button>

    </form>

    <form class="form" action="page2.php" method="GET">
        <div>
        <p class="label">Want to see one of Bruce's videos?</p>
            <label><input type="radio" value="Yes" name="youtube">Yes</label>
            <label><input type="radio" value="No" name="youtube">No</label>
        </div>
        <button type="Submit"  class="btn btn-success btn-space">Submit</button>

    </form>

    <form class="form" action="page2.php" method="GET">
        <div>
        <p class="label">Check out Bruce's great weight lifting form</p>
            <label><input type="radio" value="Yes" name="weight">Ok</label>
            <label><input type="radio" value="No" name="weight">Pass</label>
        </div>
        <button type="Submit"  class="btn btn-success btn-space">Submit</button>

    </form>

    <form class="form" action="page2.php" method="GET">
    <label for="Comments" class="label">Please provide feedback</label>
        <textarea name ="Comments" rows = "4" cols = "50" class="form-control" id="Comments"></textarea>
        <button type="Submit"  class="btn btn-success btn-space">Submit</button>

    </form>
    
  




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