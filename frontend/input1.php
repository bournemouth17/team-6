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
					  <h2 class="w3_inner_tittle">Application Form</h2>

																			<div class="wthree_general graph-form agile_info_shadow ">
																				 <h3 class="w3_inner_tittle two">General Form </h3>

																					<div class="grid-1 ">
																							<div class="form-body">
																									<form class="form-horizontal">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Given Name</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="name" placeholder="Given Name">
																											</div>
																										</div>

																										<div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Surname</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="surname" placeholder="Surname">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Known as</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="knownas" placeholder="Known as">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Age</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="age" placeholder="Age">
																										 </div>
																									 </div>

																									 <div class="form-group">
																										 <label for="focusedinput" class="col-sm-2 control-label">Gender</label>
																										 <div class="col-sm-8">
																											 <input type="text" class="form-control1" id="gender" placeholder="Gender">
																										 </div>
																									 </div>

																										<div class="form-group">
																											<label for="disabledinput" class="col-sm-2 control-label">Email address</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="email" placeholder="Email address">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Mobile Number </label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="mobile" placeholder="Mobile Number">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="inputPassword" class="col-sm-2 control-label">Street Address</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="address" placeholder="Street Address">
																											</div>
																										</div>

																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Town/city</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="town" placeholder="Town/city">
																											</div>
																										</div>
																										
																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Postcode</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="postcode" placeholder="Postcode">
																											</div>
																										</div>
							
																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Prefer to work Indoors</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline"><label><input type="checkbox" name="indoor"> Yes</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="indoor"> No</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="indoor"> No Preference</label></div>
																											</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Prefer to work Outdoors</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline"><label><input type="checkbox" name="outdoor"> Yes</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="outdoor"> No</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="outdoor"> No Preference</label></div>
																											</div>
																										</div>
																										
																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Interests</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline"><label><input type="checkbox" name="dataEntry"> Data Entry</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="answeringPhones"> Answering Phones/Taking Messages</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="managingStaff"> Managing Staff/Volunteer Rotas</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="translating"> Translating</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="receptionDuties"> Reception Duties</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="informationDiss"> Information Dissemination</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="informationGather"> Information Gathering</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="mappingRoutes"> Mapping Routes</label></div>
																												<div class="checkbox-inline" ><label><input type="checkbox" name="transportingSupplies"> Transporting Supplies/Equipment</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="loadingVehicles"> Loading/Unloading Vehicles</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="packingBoxes">Packing Boxes</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="DistributingSupplies"> Distributing Supplies</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="MakingRefreshments"> Making Refreshments</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="StaffFeedingStations">Staffing Feeding Stations for Responders</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="cleaningKit">Cleaning Kit and Equipment</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="debrisClean"> Debris Clean Up</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="helpingWithSand"> Helping with Sandbangs</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" name="assistingAgencies"> Assisting Other Agencies as Required</label></div>
																										
																											</div>
																										</div>
																										
																										
																										<div class="tp">
																<input type="submit" value="Register">
															</div>
																									</form>
																							</div>
																					</div>
																				</div>

																			 <!--//set-2-->

																			 
																			
																		</div>
																	<!--//forms-inner-->
																</div>
														<!--//forms-->
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
<script src="js/screenfull.js"></script>
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
