<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT 404 Final</title>
    <link rel="stylesheet" href="home.css">
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
            <h1>PHP Calculator</h1><hr>
                    <div class="container">
                    
                        <form action="home.php" method="get">
                                <input type="text" placeholder="Enter a number" name="num1" >
                                <input type="text" placeholder="Enter a number" name="num2">
                                
                    </div>

                    <div class="buttons">
                                <button class='btn' type="submit" name="add">Add</button>
                                <button class='btn' type="submit" name="sub">Sub</button>
                                <button class='btn' type="submit" name="mul">Mul</button>
                                <button class='btn' type="submit" name="div">Div</button>	
                    </div>  

                </form> 

                 <?php  

                                    if(isset($_REQUEST['add'])){
                                        $num1 = (float)$_REQUEST['num1'];
                                        $num2 = (float)$_REQUEST['num2'];
                                        $add = $num1+$num2;
                                        echo "<h2><b>Output is : ".$add."</b></h2>";
                                    }
                                    else if(isset($_REQUEST['sub'])){
                                        $num1 = (float)$_REQUEST['num1'];
                                        $num2 = (float)$_REQUEST['num2'];
                                        $sub = $num1-$num2;
                                        echo "<h2><b>Output is : ".$sub."</b></h2>";
                                    }
                                    else if(isset($_REQUEST['mul'])){
                                        $num1 = (float)$_REQUEST['num1'];
                                        $num2 = (float)$_REQUEST['num2'];
                                        $mul = $num1*$num2;
                                        echo "<h2><b>Output is : ".$mul."</b></h2>";
                                    }
                                    else if(isset($_REQUEST['div'])){
                                        $num1 = (float)$_REQUEST['num1'];
                                        $num2 = (float)$_REQUEST['num2'];
                                        $div = $num1/$num2;
                                        echo "<h2><b>Output is : ".$div."</b></h2>";
                                    }

                        ?>
    </div>
    
    
    
</section>


    

<script src="home.js"></script>
</body>
</html>