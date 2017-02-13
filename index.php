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

    <title>Home|TheLife Saviours</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
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
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#aboutus">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#donors">Our Top Donors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reg">Register As Donor</a>
                    </li>
                    <li>
					
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
           <h1>Find Out Thousands of Blood Donors From Our Database!!</h1>
		   <h2>Search Here!!!</h2><br>
		   
		   
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
<br>
OR
<br><br>
<a href="#reg" class="page-scroll"><button class="btn-warning btn-lg ">Register As Donor</button></a>
</div>
</div>
</header>

    <section class="bg-primary" id="aboutus">
     <div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">You Can Save A life!!!</h2>
                    <hr class="light">
                    <p>
					Due to extremely shortage of blood in our country
					Every Year Many Lives Get Lost their life,
					for a reason that either they didn't get blood at time.
					or they didn't get match of the blood group.
					</p>
					<p>
					Through this Website you can register yourself as an EMERGENCY BLOOD DONOR
					such that whenever someone need blood in an emergency they can get from our database
					and able to  save their life.</p>
					<p>
					So,If you think that you can earn blessings,and give smile to someone in need
					then please,
					</p>
					<br>
                    <a href="#reg" class="page-scroll btn btn-default btn-xl sr-button">Register Here</a>
                </div>
            </div>
        </div>
    </section>
	
	
	  <section id="donors">
        <div class="container">
           
              <!--			   
              6 top DONORS  list
             
			  <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Top Donor</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
			 
			 <div class="row">
			
			      <div class="col-sm-4">
					      <div class="row" id="name">
						  <h2><?php echo 'name'  ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				  </div>
				  <div class="col-sm-4">
				   <div class="row" id="name">
						  <h2><?php echo 'name' ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				  </div>
				   <div class="col-sm-4">
				    <div class="row" id="name">
						  <h2><?php echo 'name' ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				   </div>
			 </div>
		
			 <div class="row">
			 <div class="col-sm-4">
			  <div class="row" id="name">
						  <h2><?php echo 'name' ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				  </div>
				  <div class="col-sm-4">
				   <div class="row" id="name">
						  <h2><?php echo 'name' ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				  </div>
				   <div class="col-sm-4">
				    <div class="row" id="name">
						  <h2><?php echo 'name' ?></h2>
					      </div>
						  <div class="row" id="state">
						  <h2><?php echo 'state' ?></h2>
					      </div>
					      <div class="row" id="location">
						  <h2><?php echo 'location' ?></h2>
					      </div>
				   </div>
			 
			 </div>
			 
           
        </div>
		-->
		<div class="container text-center">
  <h1 style="color:white">Our Top Donors</h1>
  <p><em>May God Bless Them!</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
     
      <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
	   <p class="text-center"><strong><?php echo 'name' ?></strong></p><br>
	  <p class="text-center"><strong><?php echo 'place' ?></strong></p><br>
    </div>
    <div class="col-sm-4">
     
      <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
	   <p class="text-center"><strong><?php echo 'name' ?></strong></p><br>
	  <p class="text-center"><strong><?php echo 'place' ?></strong></p><br>
    </div>
    <div class="col-sm-4">
     
      <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
	   <p class="text-center"><strong><?php echo 'name' ?></strong></p><br>
	  <p class="text-center"><strong><?php echo 'place' ?></strong></p><br>
    </div>
  </div>
</div>
    </section>
 <aside class="" id="reg" >
        <div class="container text-center">
            <div class="call-to-action">
                <h2 style="color:white">Save A Life!! Donate Blood in Emergency When it Needed!</h2>
	
		<i class="fa fa-2x text-primary sr-icons">Register As Donor</i><br>
		<i class="fa fa-arrow-down fa-4x text-primary sr-icons"></i>
                </div>
            </div>
            </div>
        </div>
    </aside>

    <section class="no-padding"  id="register">
		 
        <div class="container">
            <div class="row">
		<div class="col-md-6 col-md-offset-3 text-center" align="center">
				<!--FORM-->
					<div class="">
					<span style="color:blue">Note:Please Fill Correct Details,So that we might able to contact you in an Emergency.</span>
                  <form action="register.php" method="POST" class="form-">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                         
								 <div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" /></div>
                        </div>
                        <div class="form-group">
                      
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" /></div>
                        </div>
						  <div class="form-group">
                           
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                </span>
                                <input type="tel" maxlength="10" name="mobile" class="form-control" id="email" placeholder="Enter Mobile Number" required="required" /></div>
                        </div>
                        <div class="form-group">
                            

                            <select id="blood_group" name="blood_group" class="form-control" required="required">
                                 <option>---Select Blood Group---</option>
								 <option>A</option>
								 <option>A+</option>
								 <option>A-</option>
								 <option>B</option>
								 <option>B+</option>
								 <option>AB+</option>
								 <option>AB-</option>
								 <option>O</option>
								 <option>O+</option>
								 <option>O-</option>
								
                              
                            </select>
							<br>
							<div class="form-group">
                           
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" name="country" class="form-control" id="country" value="INDIA" required="required" readOnly="readOnly" /></div>
                             </div>
							  <select id="state" name="state" class="form-control" required="required">
                                 <option>---Select State---</option>
								 <option>Andhra Pradesh</option>
								 <option>Arunachal Pradesh</option>
								 <option>Assam</option>
								 <option>Bihar</option>
								 <option>Goa</option>
								 <option>Gujrat</option>
								 <option>Hariyana</option>
								 <option>Jammu and Kashmir</option>
								 <option>Karnataka</option>
								 <option>Madras</option>
								 <option>Manipur</option>
								 <option>Meghalaya</option>
								 <option>Sikkim</option>
								 <option>West Bengal</option>
								 <option></option>
								 <option>AB+</option>
								 <option>AB-</option>
								 <option>O</option>
								 <option>O+</option>
								 <option>O-</option>
								 <option>A</option>
								 <option>A+</option>
								 <option>A-</option>
								 <option>B</option>
								 <option>B+</option>
								 <option>AB+</option>
								 <option>AB-</option>
								 <option>O</option>
								 <option>O+</option>
								 <option>O-</option>
								 <option>A</option>
								 <option>A+</option>
								 <option>A-</option>
								 <option>B</option>
								 <option>B+</option>
								 <option>AB+</option>
								 <option>AB-</option>
								 <option>O</option>
								 <option>O+</option>
								 <option>O-</option>
								
                              
                            </select>
							<br>
							 <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span>
                                </span>
                                <input type="text" name="Location" class="form-control" id="state" placeholder="city/place/Locality" required="required" /></div>
                             </div>
                        </div>
						<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Register</button>
                    </div>
                </div>
                </form>
</div>				
                </div>
				
            </div>
        </div>
		<br>
    </section>



   

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <hr class="primary">
                    
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@lifesaviours.com</a></p>
                </div>
            </div>
        </div>
    </section>

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
