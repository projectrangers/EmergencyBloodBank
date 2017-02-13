<!DOCTYPE html>
<html lang="en">

<head>

<style>

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SearchResult</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">The Life Saviours</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br>
	
	<div class="jumbotron">
	      <div class="container">
	         <div class="row">
			    <div class="col-sm-6">
	              <h1>Search Result</h1>
		           
				        <div class="col-sm-offset-1">
					        <p><?php echo 3 ?> Results Found</p>
					    </div>
				  
				</div>
				  <div class="col-sm-6">
				      <form class="form-inline" role="form" action="searchResult.php">
                          <div class="form-group">
                                <input type="text" class="form-control m" name="blood_group" placeholder="Blood Group">
                            </div>
                           <div class="form-group">
                                 <input type="text" class="form-control m" name="location" placeholder="Location">
                           </div>
                             <br>  <br>
                              <button type="submit" class="btn btn-default"> <i class="fa fa-2x fa-search text-primary sr-icons">Search</i></button>
                       </form>
				  </div>
			 </div>
	      </div>
	</div>
	
	
	
	<!--List of Donor-->
<div class="container">
      <div class="row">
	      <?php for($i=0;$i<15;$i++){ ?>
             <div class="col-sm-4">
           <center>  <a href="profile.php?id=<?PHP echo $i?>"> <img value="K" src="down.png" class="img-circle img-responsive" alt="Random Name"></a></center>
	                 <div class="alert alert-success">
                             <p class="text-center" >
							       <strong > <?php echo "amit"; ?></strong>
                                         <p class="text-center">
										     <strong>Place:</strong>
											 <?php echo "duhai"; ?>,
											 <?php echo "ghaziabd"; ?>
										 </p>
                             </p>
                      </div>
             </div>
	      <?php } ?>
	  </div>
</div>

	

	
	
	
	
	
	
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>

</html>
