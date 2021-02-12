<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT 404 Final</title>
    <link rel="stylesheet" href="home.css">
    <style>
        .wrapper h1{
            font-size: 50px;
        }
        </style>
</head>
<body>


<header>
    <h1> IT 404 Final Requirements</h1>
    <div class="menuDiv" onclick="myFunc(this)" id="menubtn">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
    </div>


   
</header>


<section>
        <nav id="sidenav">
            <a href="home.php"> Calculator </a>
            <a href="dec_bin.php"> Converter: Decimal-Binary </a>
            <a href="dec_hex.php"> Converter: Decimal-Hexadecimal </a>
        </nav>

    <div class="main">

    
            
            <div class="wrapper">
                    <h1>Decimal to Hexadecimal</h1><hr>
                    <form action="dec_hex.php" method="get">
                            <input type="text" placeholder="Enter a number" name="num">
                            <br>
                            <button type="submit"  class="btn" name="convert"> Convert </button>

                            <?php
                                    if(isset($_REQUEST['convert'])){
                                        $num = (float)$_REQUEST['num'];
                                        $result = dechex($num);
                                        echo "<h2>" . $result . "</h2>";
                                    }

                            ?>

                    </form> 

            </div>
   
          
                  
                    

                

                 
    </div>
    
    
    
</section>


    

<script src="home.js"></script>
</body>
</html>