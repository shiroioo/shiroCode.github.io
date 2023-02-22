   <?php 
   require_once "DB/connect.php";
   session_start();
   ?>
   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                	<img src="images/ILPKT.png" width="150px" > 
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                <?php
                 if (isset($_SESSION['userid'])){
                    echo
                    '<li >
                        <a href="index.php">Home</a>
                    </li>
                                
                    <li>
                        <a>Hai '.$_SESSION['name'].'</a>
                        
                    </li>
                    
                    <li>
                        <a href="DB/logout-db.php"><span class="glyphicon glyphicon-off"></span> Logout</a>
                    </li>' ;
                 }    
                        
                        
                 
                ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <?php  
        if(isset($_SESSION['userid'])){
    ?>
    <!-- Feature -->
	<div class="jumbotron feature">
		<div class="container">
			<h1>Sistem Rekod Kehadiran Pelajar</h1>
			<p>TEKNOLOGI PEMASANGAN PAIP MINYAK & GAS (TPPMG)</p>
			<p><a class="btn btn-primary" href="#">Engage Now</a></p>
		</div>
	</div>
 <!-- Promos -->
 <div class="container-fluid">
        <div class="row promo">
        	<a href="page1.php">
				<div class="col-md-4 promo-item item-1">
					<h3>
						Semester 1
					</h3>
					<p>Sesi kemasukan 1/2023</p>
				</div>
            </a>
            <a href="page2.php">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Semester 2
					</h3>
					<p>Sesi kemasukan 2/2022</p>
				</div>
            </a>
			
			<a href="page3.php">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Semester 3
					</h3>
					<p>Sesi kemasukan 1/2022</p>
				</div>
            </a>
        </div>
    </div><!-- /.container-fluid -->
    <?php } ?>