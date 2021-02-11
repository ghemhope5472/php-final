<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        input[type=text]{
            width: 200px;
            padding: 20px;
            font-size: 20px;
            margin-top: 20px;
        }
     

        </style>
</head>


<body>

    <header>
        <h1> IT 404 Web System and Technologies Final Exam</h1>
    </header>


    <nav>
        <ul>    
            <li> <a href="#">HOME</a></li>
            <li><a href="#">CALCULATOR</a></li>
            <li><a href="#">DECIMAL TO BINARY</a></li>
            <li><a href="#">DECIMAL TO HEXADECIMAL</a></li>
        </ul>
    
    </nav>


    <div class="wrapper">
                
            <div class="container">
                <h1>PHP Calculator</h1>
                             <hr>
                <form action="index.php" method="get">
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
    

    



</body>
</html>