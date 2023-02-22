
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Kehadiran</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
    <?php 
		
		require "function/percent.php";
		require "function/calculate.php";
	?>

        <!-- header/nav bar -->
        <?php 
            
        
            if(isset($_POST['btn1'])){
                require_once 'header.php';
?>
                            <!-- Featured Products -->
                <div class="container percentage">
                    <h1 class="text-center">Statistik Rekod Kehadiran Mingguan</h1>
                    <div class="row">
                        <form class="form-percentage" action="#" method="post">
                    
                        <!-- Product 1 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pepper.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 1</h3>
                                    <p> <?php echo percentMingguan($n1); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn1">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/jars.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 2</h3>
                                    <p> <?php echo percentMingguan($n2); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn2">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pot.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 3</h3>
                                    <p> <?php echo percentMingguan($n3); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn3">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
    <?php


            }
        
            elseif(isset($_POST['btn2'])){
                require_once 'header.php';
?>
                            <!-- Featured Products -->
                <div class="container percentage">
                    <h1 class="text-center">Statistik Rekod Kehadiran Bulanan</h1>
                    <div class="row">
                        <form class="form-percentage" action="#" method="post">
                    
                        <!-- Product 1 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pepper.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 1</h3>
                                    <p><?php echo percentBulanan($n1); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn1">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/jars.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 2</h3>
                                    <p><?php echo percentBulanan($n2); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn2">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pot.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 3</h3>
                                    <p><?php echo percentBulanan($n3); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn3">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
    <?php


            }
            elseif(isset($_POST['btn3'])){
                require_once 'header.php';
                ?>
                            <!-- Featured Products -->
                <div class="container percentage">
                    <h1 class="text-center">Statistik Rekod Kehadiran Keseluruhan</h1>
                    <div class="row">
                        <form class="form-percentage" action="#" method="post">
                    
                        <!-- Product 1 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pepper.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 1</h3>
                                    <p ><?php echo percentTahunan($n1); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn1">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/jars.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 2</h3>
                                    <p ><?php echo percentTahunan($n2); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn2">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail featured-product">
                                <a href="#">
                                    <img src="images/pot.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <h3>Peratusan Sem 3</h3>
                                    <p ><?php echo percentTahunan($n3); ?>%</p>

                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="btn3">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                                Muat Turun
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
<?php
                
                
            }
            else{
                header("location: index.php?error=notlogged");
                exit();

            }

                        ?>
                        
        

        <!-- Featured Products -->
        <?php 
            require_once 'footer.php';
        ?>
	
    </body>

</html>
