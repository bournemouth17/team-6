<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<html lang="zxx">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs  :: w3layouts</title>
<!-- custom-theme -->	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>

<?php
	if (isset($_POST["loadButton"])){
		$servername = "34.252.35.209";
		$username = "root";
		$password = "root";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	
		$query = $conn->prepare = ("SELECT SignUp(Name, Surname, KnownAs, Age, Gender, MobileNum, Outdoor, Indoor, StreetAddress, TownCity, Postcode, DataEntry, AnsweringPhones, ManagingStaff, Translating, ReceptionDuties, InformationDissemination, InformationGathering, MappingRoutes, TransportingSupplies, LoadingVehicles, PackingBoxes, DistributingSupplies, MakingRefreshments, StaffFeedingStations, CleaningKit, DebrisCleanUp, HelpingWithSandBags, AssistingOtherAgencies, RecieveEmails) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$query->bind_param('sssdssdsssssssssssssssssss', $name, $surname, $knownas, $age, $gender, $mobile, $outdoor, $indoor, $streetAddress, $town, $postcode, $dataEntry, $answeringPhones, $managingStaff, $translating, $receptionDuties, $informationDiss, $informationGather, $mappingRoutes, $loadingVehicles, $distributingSupplies, $staffFeeding, $cleaningKit, $debrisClean, $assistingAgencies, $recieveEmails);
		nameVal = echo $name;
		surnameVal = echo $surname;
		knownAsVal = echo $knownas;
		ageVal = echo $age;
		
		$query->execute();
		$query->close();

		
	}
	if (isset($_POST["submitButton"])){
		$servername = "34.252.35.209";
		$username = "root";
		$password = "root";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
		}
		if(isset($_POST['surname'])) {
			$surname = $_POST['surname'];
		}
		if(isset($_POST['knownas'])) {
			$knownas = $_POST['knownas'];
		}
		if(isset($_POST['age'])) {
			$age = $_POST['age'];
		}
		if(isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		}
		if(isset($_POST['email'])) {
			$email = $_POST['email'];
		}
		if(isset($_POST['mobile'])) {
			$mobile = $_POST['mobile'];
		}
		if(isset($_POST['outdoor'])) {
			$outdoor = $_POST['outdoor'];
		}
		if(isset($_POST['indoor'])) {
			$indoor = $_POST['indoor'];
		}
		if(isset($_POST['streetAddress'])) {
			$streetAddress = $_POST['streetAddress'];
		}
		if(isset($_POST['town'])) {
			$town = $_POST['town'];
		}
		if(isset($_POST['postcode'])) {
			$postcode = $_POST['postcode'];
		}
		if(isset($_POST['dataEntry'])) {
			$dataEntry = $_POST['dataEntry'];
		}
		if(isset($_POST['answeringPhones'])) {
			$answeringPhones = $_POST['answeringPhones'];
		}
		if(isset($_POST['managingStaff'])) {
			$managingStaff = $_POST['managingStaff'];
		}
		if(isset($_POST['translating'])) {
			$translating = $_POST['translating'];
		}
		if(isset($_POST['receptionDuties'])) {
			$receptionDuties = $_POST['receptionDuties'];
		}
		if(isset($_POST['informationDiss'])) {
			$informationDiss = $_POST['informationDiss'];
		}
		if(isset($_POST['informationGather'])) {
			$informationGather = $_POST['informationGather'];
		}
		if(isset($_POST['mappingRoutes'])) {
			$mappingRoutes = $_POST['mappingRoutes'];
		}
		if(isset($_POST['loadingVehicles'])) {
			$loadingVehicles = $_POST['loadingVehicles'];
		}
		if(isset($_POST['distributingSupplies'])) {
			$distributingSupplies = $_POST['distributingSupplies'];
		}
		if(isset($_POST['staffFeeding'])) {
			$staffFeeding = $_POST['staffFeeding'];
		}
		if(isset($_POST['cleaningKit'])) {
			$cleaningKit = $_POST['cleaningKit'];
		}
		if(isset($_POST['debrisClean'])) {
			$debrisClean = $_POST['debrisClean'];
		}
		if(isset($_POST['assistingAgencies'])) {
			$assistingAgencies = $_POST['assistingAgencies'];
		}
		if(isset($_POST['recieveEmails'])) {
			$recieveEmails = $_POST['recieveEmails'];
		}
		$query = $conn->prepare = ("INSERT INTO SignUp(Name, Surname, KnownAs, Age, Gender, Email, MobileNum, Outdoor, Indoor, StreetAddress, TownCity, Postcode, DataEntry, AnsweringPhones, ManagingStaff, Translating, ReceptionDuties, InformationDissemination, InformationGathering, MappingRoutes, TransportingSupplies, LoadingVehicles, PackingBoxes, DistributingSupplies, MakingRefreshments, StaffFeedingStations, CleaningKit, DebrisCleanUp, HelpingWithSandBags, AssistingOtherAgencies, RecieveEmails) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$query->bind_param('sssdssdssssssssssssssssssss', $name, $surname, $knownas, $age, $gender, $email, $mobile, $outdoor, $indoor, $streetAddress, $town, $postcode, $dataEntry, $answeringPhones, $managingStaff, $translating, $receptionDuties, $informationDiss, $informationGather, $mappingRoutes, $loadingVehicles, $distributingSupplies, $staffFeeding, $cleaningKit, $debrisClean, $assistingAgencies, $recieveEmails);
		$query->execute();
		$query->close();

	}
?>
	
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page.html"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								
								<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
									</ul>
								</li>
								<li><a href="table.html"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
								

								
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										 <ul class="gn-submenu">

									  <li class="mini_list_agile"> <a href="signin.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign In</a></li>
									   <li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign Up</a></li>
									   
									</ul>
								</li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Team Rubicon </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>

						</ul>
				</li>
				
			

				<li class="second w3l_search">

						<form action="#" method="post">
							<input type="search" name="search" placeholder="Search here..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>

				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
					</section>
				</li>

			</ul>
			<!-- //nav -->

		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->

		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main-page.html">Home</a><span>«</span></li>
									<li>Forms <span>«</span></li>
									<li>Interview stage form</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Interview stage form</h2>

																			<div class="wthree_general graph-form agile_info_shadow ">
																				 <h3 class="w3_inner_tittle two">Interview Form </h3>
                                                                                  	<div class="form-group">
																											<label for="disabledinput" class="col-sm-2 control-label">Email address</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="email" placeholder="Email address">
																											</div>
																										</div>
																										<div class="tp">
																											<input type="submit" id="loadButton" value="Load Volunteer details">
																										</div>
																					<div class="grid-1 ">
																							<div class="form-body">
																									<form class="form-horizontal">
																										<div class="form-group">
																											
																											<label for="focusedinput" class="col-sm-2 control-label">Given Name</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="name" placeholder="Given Name" value="nameVal">
																											</div>
																										</div>

																										<div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Surname</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="surname" placeholder="Surname" value="surnameVal">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Known as</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="knownas" placeholder="Known as" value="knownAsVal">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Age</label>
																										 <div class="col-sm-8">
																											 <input type="int" class="form-control1" id="age" placeholder="Age" value="ageVal">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Gender</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="gender" placeholder="Gender">
																										 </div>
																									 </div>

																									

																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Mobile Number </label>
																											<div class="col-sm-8">
																												<input type="int" class="form-control1" id="mobile" placeholder="Mobile Number">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="inputPassword" class="col-sm-2 control-label">Street Address</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="streetaddress" placeholder="Street Address">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Town/city</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="town" placeholder="Town/city">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Post code</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="postcode" placeholder="Post Code">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Prefered place of work</label>
																											<h6></h6>

                                                      <label for="checkbox" class="col-sm-2 control-label">1.Outdoor</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline1"><label><input type="checkbox" name="outdoor">Yes</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="outdoor"> No</label></div>
                                                        <div class="checkbox-inline1"><label><input type="checkbox" name="outdoor"> Prefered</label></div>
																											</div>
                                                    </div>


																										<div class="form-group">
																										 <label for="checkbox" class="col-sm-2 control-label"></label>
																										 <h6></h6>
                                                      <label for="checkbox" class="col-sm-2 control-label">2. Indoor</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline1"><label><input type="checkbox" name="indoor">Yes</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="indoor"> No</label></div>
                                                        <div class="checkbox-inline1"><label><input type="checkbox" name="indoor"> Prefered</label></div>
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Interests</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline1"><label><input type="checkbox" name="dataEntry"> Data entry</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="answeringPhone"> Answering phone/Taking messages</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="managingStaff"> Managing staff/ Volunteer rotas</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="translating"> Translating</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="receptionDuties"> Reception duties</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="informationDis"> Information Dissemination</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="informationGather"> Information Gathering</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="mappingRoutes"> Mapping Routes</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="transportingSupplies"> Transporting Supplies/ Equipment</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="loadingVehicles"> Loading/ Unloading Vehicles</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="packingBoxes"> Packing Boxes</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="distributingSupplies"> Distributing Supplies</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="makingRefreshments"> Making Refreshments</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="staffFeeding"> Staffing Feeding Stations for responders</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="cleaningKit"> Cleaning Kit and Equipment</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="debrisClean"> Debris Clean Up</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="helpingWithSandBags"> Helping with Sandbags</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" name="assistingWithAgencies"> Assisting Other Agencies as Required</label></div>


																											</div>

																										</div>






																										<div class="form-group">
																											<label for="radio" class="col-sm-2 control-label">Recieve Emails</label>
																											<div class="col-sm-8">
																												<select name="recieveEmails">
																												<div class="radio block"><label><input type="radio"> Yes</label></div>
																												<div class="radio block"><label><input type="radio"> No</label></div>
																												</select>
																											</div>
																										</div>


																										<div class="form-group mb-n">
																											<label for="largeinput" class="col-sm-2 control-label label-input-lg"> Comments</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Comments">
																											</div>
																										</div>

																										<div class="tp">
																											<input type="submit" id="submitButton" value="Submit">
																										</div>

																									</div>
																									</form>
																							</div>

																					</div>
																				</div>

																			 <!--//set-2-->

																			 <!--/set-3-->

																				<div class="wthree_general">



																				</div>
																			</div>
																			<!--//set-3-->
																			<!--/set-4-->


																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div>
														<!--//forms-->

							<!-- /social_media-->
						  <div class="social_media_w3ls">

						      <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									   <li>Facebook</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/admin.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Hurisa Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>

									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									   <li>Twitter</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a1.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Jasmin Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>

									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									   <li>Google+</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a2.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>John Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>

									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile dribble">

							     <ul class="icon_w3_info">
									  <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									   <li>Dribbble</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a4.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Honey Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>

									 <div class="clearfix"></div>
									 </div>

                              </div>
							  <div class="clearfix"></div>

						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Esteem. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>

		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
			
<script src="js/skycons.js"></script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>ßßß
<script src="js/scßreenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>