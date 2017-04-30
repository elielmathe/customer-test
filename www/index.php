<?php
	
	session_start();
	//echo "<pre>";print_r($_SESSION);die();
	if(!empty($_SESSION)){
		if($_SESSION['status'] == "xEldfs"){
			header("location:user.ticket.zone.php");
		}else if($_SESSION['status'] != "xEldf"){
			header("location:login.php");
		}	
	}else{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>User support zone</title>
			<meta name="viewport" content="initial-scale=1.0,width=device-width"/>
			<style type="text/css">
				@import url("lib/bootstrap/css/bootstrap.min.css");
				@import url("css/style1.css");
				@import url("lib/material/bootstrap-material-design.min.css");
				@import url("lib/material/ripples.min.css");
				@import url("lib/niceselect/css/nice-select.css");
			</style>
		</head>
		
		<body>
			<div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#titre-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">User support zone</a>
						</div>
						
						<div class="collapse navbar-collapse" id="titre-collapse">
							<ul class="nav navbar-nav navbar-right">
								
								<li class="hidden-md visible-xs"> 	<!---->
									<a href="#brief-graph">
										<span class="glyphicon glyphicon-align-right"></span>
										Brief graph
									</a>
								</li>
								
								<li class="active"><a data-toggle="tab" href="#tickets">Tickets</a></li>
								<li><a data-toggle="tab" href="#chatzone">Chat zone</a></li>
								<li><a data-toggle="tab" href="#finance">Finance <span class="badge">3</span></a></li>
								<li><a data-toggle="tab" href="#customers">Customers</a></li>
								<li>
										<a data-toggle="dropdown">
											More
											<span class="caret"></span>
										</a>
										
										<ul class="dropdown-menu">
											<li><a href="controller/logout.php">Log out</a></li>
											<li><a href="#">My account</a></li>
											<li><a href="#">Kuukha webpage</a></li>
										</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			
			<div id="mainzone" class="tab-content">
				<div class="tab-pane active" id="tickets" role="panel">
					<!--<h1>Tickets</h1>-->
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-md-push-3">
								
								<div role="form">
									<div class="input-group input-group-md">
										<span class="btn glyphicon glyphicon-filter input-group-addon">
											
										</span>
										<input class="form-control" id="input-recherche" type="search" placeholder="Search for tickets"/>
										 	
									</div>
									
									<!--<select class="form-control" style="display: inline!important;">
										<option>Critical</option>
										<option>Closed</option>
									</select>-->
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<span class="status not-assigned"></span>
										Ticket #232
										<span class="glyphicon glyphicon-paperclip"></span>
										
										<small class="laDateEmission">Friday, 23 June 2017</small>
									</div>
									<div class="panel-body">
										<h4 class="ticket-title">The website can't go offline</h4>
										<p>
											<div>
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												
											</div>
											<div class="btn-group">
												<button class="glyphicon glyphicon-comment btn btn-pourtour" data-toggle="modal" data-target="#myModal"> Messages</button>
												<button class="btn btn-pourtour btn-success" data-toggle="modal" data-target="#add-solution-dialog"><span class="glyphicon glyphicon-saved"></span> Solution</button>
												<button class="btn btn-pourtour btn-danger" data-toggle="modal" data-target="#close-ticket-dialog"><span class="glyphicon glyphicon-remove"></span> Close</button>
												<button class="btn btn-pourtour" data-toggle="modal" data-target="#forward-ticket-dialog"><span class="glyphicon glyphicon-share-alt"></span> Forward</button>
											</div>
										</p>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<span class="status not-assigned"></span>
										Ticket #232
										<span class="glyphicon glyphicon-paperclip"></span>
										
										<small class="laDateEmission">Friday, 23 June 2017</small>
									</div>
									<div class="panel-body">
										<h4 class="ticket-title">The website can't go offline</h4>
										<p>
											<div>
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												
											</div>
											<div class="btn-group">
												<button class="glyphicon glyphicon-comment btn btn-pourtour" data-toggle="modal" data-target="#myModal"> Messages</button>
												<button class="btn btn-pourtour btn-success" data-toggle="modal" data-target="#add-solution-dialog"><span class="glyphicon glyphicon-saved"></span> Solution</button>
												<button class="btn btn-pourtour btn-danger" data-toggle="modal" data-target="#close-ticket-dialog"><span class="glyphicon glyphicon-remove"></span> Close</button>
												<button class="btn btn-pourtour" data-toggle="modal" data-target="#forward-ticket-dialog"><span class="glyphicon glyphicon-share-alt"></span> Forward</button>
											</div>
										</p>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<span class="status not-assigned"></span>
										Ticket #232
										<span class="glyphicon glyphicon-paperclip"></span>
										
										<small class="laDateEmission">Friday, 23 June 2017</small>
									</div>
									<div class="panel-body">
										<h4 class="ticket-title">The website can't go offline</h4>
										<p>
											<div>
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												The application on which I am working is unable to connect to the server 
												because of much load to it.
												
											</div>
											<div class="btn-group">
												<button class="glyphicon glyphicon-comment btn btn-pourtour" data-toggle="modal" data-target="#myModal"> Messages</button>
												<button class="btn btn-pourtour btn-success" data-toggle="modal" data-target="#add-solution-dialog"><span class="glyphicon glyphicon-saved"></span> Solution</button>
												<button class="btn btn-pourtour btn-danger" data-toggle="modal" data-target="#close-ticket-dialog"><span class="glyphicon glyphicon-remove"></span> Close</button>
												<button class="btn btn-pourtour" data-toggle="modal" data-target="#forward-ticket-dialog"><span class="glyphicon glyphicon-share-alt"></span> Forward</button>
											</div>
										</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-md-pull-9" role="panel" id="btn-collapse-brief">
								
								<a name="brief-graph"> </a>
								<h4>Brief</h4>
								
								<div>
									<div id="graphic-tickets" style="height:250px;">
										
									</div>
									<div>
										From<br/>										
										<div role="form">
											<div class="input-group input-group-md">
												<span class="glyphicon glyphicon-calendar input-group-addon"></span>
												<input class="form-control" type="date"/>
											</div>
											
											<div class="input-group input-group-md">
												<span class="glyphicon glyphicon-time input-group-addon"></span>
												<input class="form-control" type="time"/>
											</div>
											
										</div>
										Up to now
									</div>
								</div>
								<div>
									<h4>My tickets</h4>
								</div>
								<br/><br/><br/><br/><br/>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="finance" role="panel">
					<!--<h1>Finance</h1>-->
					<div class="container">
						<div class="row">
							<div class="col-md-3 panel-group" id="services-panel">
								
								<h4>Services</h4>
								<button class="btn"><span class="glyphicon glyphicon-plus"></span> Add</button>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#services-panel" data-target="#zone-panel-hosting-2">Hosting plans</a>
									</div>
									<div class="collapse" id="zone-panel-hosting-2">
										<a>Hoster</a>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#services-panel" data-target="#zone-panel-hosting-1">Hosting plans</a>
									</div>
									<div class="collapse" id="zone-panel-hosting-1">
										<a>Hoster</a>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#services-panel" data-target="#zone-panel-vsat">VSAT - Maintenance</a>
									</div>
									<div class="collapse" id="zone-panel-vsat">
										<a>VSAT Plan 1</a>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#services-panel" data-target="#zone-panel-ict">ICT - Supply</a>
									</div>
									<div class="collapse" id="zone-panel-ict">
										<h6>USers</h6>
									</div>
								</div>
								
							</div>
							<div class="col-md-7 tab-content">
								<h4>Actions</h4>
								<div class="tab-pane row active" id="zone-up-to-day" role="panel">
									<div class="col-md-2">
										From
									</div>
									<div class="col-md-4"> 
										<div class="input-group">
											<span class="input-group-addon glyphicon glyphicon-calendar"></span>
											<input type="date" class="form-control"/>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<span class="input-group-addon glyphicon glyphicon-time"></span>
											<input type="time" class="form-control"/>
										</div>
									</div>
									<div class="col-md-2">
										Up to now
									</div>
									<div class="col-md-12">
										<table class="table-show-sales">
											<tr>
												<th>Nr</th>
												<th>Date</th>
												<th>Name</th>
												<th>Service</th>
												<th>Qty</th>
												<th>Amount paid</th>
												<th>Exp.</th>
											</tr>
											<tr>
												<td>1</td>
												<td>Apr 12th, 2014</td>
												<td>Mathe Eliel</td>
												<td>Hosting plan</td>
												<td>4 Years</td>
												<td>320 USD</td>
												<td>Dec 23th, 2021</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Apr 12th, 2014</td>
												<td>Mathe Eliel</td>
												<td>Hosting plan</td>
												<td>4 Years</td>
												<td><div>320 USD</div><div>320 USD</div></td>
												<td>Dec 23th, 2021</td>
												<!--<td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></td>-->
											</tr>
											<tr>
												<td>1</td>
												<td>Apr 12th, 2014</td>
												<td>Mathe Eliel</td>
												<td>Hosting plan</td>
												<td>4 Years</td>
												<td>320 USD</td>
												<td>Dec 23th, 2021</td>
											</tr>
										</table>
									</div>
								</div>
								
								<div class="tab-pane" id="zone-user-payement" role="panel">
									<input type="text" class="form-control" placeholder="Search for a user here"/>
									<h4>Mathe Eliel - elimek2@gmail.com</h4>
									<table id="afficheur-statut-user">
										<tr>
											<th>Date</th>
											<th>Service name</th>
											<th>Qty</th>
											<th>Unity Price</th>
											<th>Total</th>
											<th>Exp.</th>
											<td><span class="glyphicon glyphicon-filter" data-toggle="collapse" data-target="#zone-filtre-recherche"></span></td>
										</tr>
										<tr class="collapse" id="zone-filtre-recherche">
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
											<td><input type="search" placeholder="Filter" class="form-control"/></td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
										<tr>
											<td>20/06/1995</td>
											<td>Bought a hosting plan for nfinic.co</td>
											<td>24 Months</td>
											<td>4 USD</td>
											<td>48 USD</td>
											<td>Feb 23th, 2020</td>
										</tr>
									</table>
									<div>
										<ul class="pagination pagination-md">
											<li><a href="#">First</a></li>
											<li><a href="#">Prev.</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">Next</a></li>
											<li><a href="#">Last</a></li>
										</ul>
									</div>
								</div>								
								
								<div class="tab-pane" id="zone-finance-graphique" role="panel">
									<h4>Report</h4>
									<table>
										
										<tr>
											<td><span class="glyphicon glyphicon-filter"></span> Filter by &nbsp;&nbsp;</td>
											<td>
												<select class="nice-select">
													<option>Filter by period</option>
													<option>Hour</option>
													<option>Day</option>
													<option>Month</option>
													<option>Year</option>
												</select>
											</td>
											<td>
												<select class="nice-select">
													<option>Filter by service</option>
													<option>Web hosting - 1</option>
													<option>Web hosting - 2</option>
													<option>Web hosting - 3</option>
													<option>Web hosting - 4</option>
												</select>
											</td>
										</tr>
									</table>
									
									
								</div>
							</div>
							<div class="col-md-2">
								<h4>Tools</h4>
								<ul class="nav navbar-nav">
									<li><a data-toggle="tab" href="#zone-up-to-day"><span class="glyphicon glyphicon-dashboard"></span> Up today</a></a></li>
									<li><a data-toggle="tab" href="#zone-user-payement"><span class="glyphicon glyphicon-user"></span> Get user's releve</a></li>									
									<li><a href="#"><span class="glyphicon glyphicon-flash"></span> Predict sales in future</a></li>
									<li><a data-toggle="tab" href="#zone-finance-graphique" ><span class="glyphicon glyphicon-stats"></span> Graphical view</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="customers" role="panel">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								
								<h4>Customers</h4>
								<div class="input-group">
								<span class="glyphicon glyphicon-search input-group-addon"></span><input type="search" class="form-control" placeholder="Find customer"/>
								</div>
								<ul class="nav">
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> Mathe Eliel</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> Jean Edmond</a></a></li>
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> jules@gmail.com</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> josepho@youtube.fr</a></li>
								</ul>
								<h4>Customers groups</h4>
								<div class="input-group">
								<span class="glyphicon glyphicon-search input-group-addon"></span><input type="search" class="form-control" placeholder="Find customer"/>
								</div>
								<ul class="nav">
									<li><a href="#"> All users</a></li>
									<li><a href="#"> Congo Users</a></li>
									<li><a href="#"> Hosting users</a></a></li>
									<li><a href="#"> ICT Customers users</a></li>
									<li><a href="#"> Other users</a></li>
								</ul>
								<div>
									<button class="btn"><span class="glyphicon glyphicon-plus"></span> Add group</button>
								</div>
							</div>
							<div class="col-md-7">
								Choose a broadcast list<br/>
								<select class="form-control" >
									<option>Congo users</option>
								</select><br/>
								
								<textarea class="form-control wysiwyg-editor" placeholder="Write the message to the group"></textarea><br/>
								<button class="btn btn-success"><span class="glyphicon glyphicon-send"></span>Send</button>
							</div>
							<div class="col-md-2">
								<h4>Actions</h4>
								<ul class="nav navbar-nav">
									<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Broadcast</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> Groups</a></a></li>
									<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-edit"></span> Edition</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="chatzone" role="panel">
					<div class="row">
						<div class="col-md-1">
						</div>
												
						<div class="col-md-2">
							<h5>My chat</h5>
							<ul class="nav navigation-chat-user">
								<li><span class="user-connected"></span> Mathe Eliel<div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Jean Jacques<div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Josephine Kabwina<div class="etat-connect-chat"><span class="badge">12</span></div><div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Le peuple<div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Jean Jacques<div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Josephine Kabwina<div class="detail-user-connected">Technical</div></li>
								<li><span class="user-connected"></span> Le peuple<div class="etat-connect-chat"><span class="badge">?</span></div><div class="detail-user-connected">Sales</div></li>
							</ul>
							<div id="assitance-ask-zone">
								<h5>Asking for assistance</h5>							
								<div class="one-ask">
									<div class="name-of-user">Mathe Eliel</div>
									<div class="details-of-ask">
										<b>Technical:</b> I would like to know about machine 
										learning and Kuukha Systems
									</div>
									<div class="btn-group">
										<button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Accept</button>
										<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Decline</button>
									</div>
								</div>
								
								<div class="one-ask">
									<div class="name-of-user">Mathe Eliel</div>
									<div class="details-of-ask">
										<b>Technical:</b> I would like to know about machine 
										learning and Kuukha Systems
									</div>
									<div class="btn-group">
										<button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Accept</button>
										<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Decline</button>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-md-3 zone-chat-agent" style="border-right:1px solid #D7D7D7;min-height:5cm;">
							
							<div class="header-chat-zone">
								Chat 1
								<div class="user-name">Robert Tuneko</div>
								
								<span class="glyphicon glyphicon-horizontal-humberger"></span>
								
							</div>
							<div class="input-chat-zone input-group" style="border:1px solid #D7D7D7;">
								<textarea class="form-control" placeholder="Type your message here..."></textarea>
								<span class="input-group-addon glyphicon glyphicon-menu-right"></span>
							</div>
							
							<div class="zone-list-messages">
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 zone-chat-agent" style="border-right:1px solid #D7D7D7;min-height:5cm;">
							
							<div class="header-chat-zone">
								Chat 2
								<div class="user-name">Robert Tuneko</div>
								
								<span class="glyphicon glyphicon-horizontal-humberger"></span>
								
							</div>
							<div class="input-chat-zone input-group" style="border:1px solid #D7D7D7;">
								<textarea class="form-control" placeholder="Type your message here..."></textarea>
								<span class="input-group-addon glyphicon glyphicon-menu-right"></span>
							</div>
							
							<div class="zone-list-messages">
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 zone-chat-agent" style="border-right:1px solid #D7D7D7;min-height:5cm;">
							
							<div class="header-chat-zone">
								Chat 3
								<div class="user-name">Robert Tuneko</div>
								
								<span class="glyphicon glyphicon-horizontal-humberger"></span>
								
							</div>
							<div class="input-chat-zone input-group" style="border:1px solid #D7D7D7;">
								<textarea class="form-control" placeholder="Type your message here..."></textarea>
								<span class="input-group-addon glyphicon glyphicon-menu-right"></span>
							</div>
							
							<div class="zone-list-messages">
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
								
								<div class="one-message">
									<div class="name-of-user">Robert Tuneko</div>
									<div class="message-content">
										Hello, I would like to know more about Kuukha
									</div>
									<div class="msg-tools">
										<span class="glyphicon glyphicon-share-alt"></span>
									</div>
									<div class="message-time">12h30'</div>
									<hr/>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
			
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn btn-default" id="btn-fermer-popup-msg">Close</button>
							<h4>Ticket #23 - Messages</h4>
							<div>Eliel Mathe - elimek2@gmail.com</div>
							
						</div>
						
						<div class="modal-body">
							<div class="messages">
								<div class="one-message user-message">
									Hello, I have a big problem on integriting every thing in my project
									<div class="message-time">Sunday, April 14th, 2017</div>
								</div>
								
								<div class="one-message user-message">
									Hello, I have a big problem on integriting every thing in my project
									<div class="message-time">Sunday, April 14th, 2017</div>
								</div>
								
								<div class="one-message our-message">
									<div class="our-user-name">Answer by <i>Eliel</i></div>
									Hello, I have a big problem on integriting every thing in my project
									<div class="message-time">Sunday, April 14th, 2017</div>
								</div>
							</div>
							
							<!--<div class="input-group input-group-md">
										<span class="btn glyphicon glyphicon-filter input-group-addon">
											
										</span>
										<input class="form-control" id="input-recherche" type="search" placeholder="Search for tickets"/>
										 	
							</div>-->
							
							<div class="input-group input-group-md">
								
								<textarea class="form-control" placeholder="Type in your text message"></textarea>
								<span class="input-group-btn">
									<button class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Send</button>
								</span>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="add-solution-dialog" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn btn-default" id="btn-fermer-popup-msg">Close</button>
							<h4>Ticket #23 - Solution</h4>
							<div style="text-align: right;"><i>Eliel Mathe - elimek2@gmail.com</i></div>
							<div>Enrich our knowledge base</div>
							
						</div>
						
						<div class="modal-body">
							<label>What is the error discovered after troubleshoot?</label>
							<textarea class="form-control"></textarea>
							<label>What is the solution</label>
							<textarea class="form-control"></textarea>	
							
							<div>
								<button class="btn btn-info"><span class="glyphicon glyphicon-floppy-disk"></span> Save solution</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="close-ticket-dialog" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn btn-default" id="btn-fermer-popup-msg">Close</button>
							<h4>Ticket #23 - Solution</h4>
							<div style="text-align: right;"><i>Eliel Mathe - elimek2@gmail.com</i></div>
							<div>Closing a ticket</div>
							
						</div>
						
						<div class="modal-body">
							<label>Reason:</label>
							<textarea class="form-control" placeholder="Why have you decided to close this ticket?"></textarea>
							
							<div>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-lock"></span> Close ticket</button>
								<button class="btn btn-success"><span class="glyphicon glyphicon-remove"></span> Cancel ticket</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="forward-ticket-dialog" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn btn-default" id="btn-fermer-popup-msg">Close</button>
							<h4>Ticket #23 - Forward</h4>
							<div style="text-align: right;"><i>Eliel Mathe - elimek2@gmail.com</i></div>
							<div>Forward a ticket - ask someone for help</div>
							
						</div>
						
						<div class="modal-body form-group">
							<label>Ask someone to have a look at this ticket:</label>
							<textarea class="form-control" placeholder="Message"></textarea>
							
							<div class="form-group">
								<i>To:</i>
				              <div class="checkbox">
				                <label>
				                  <input type="checkbox" class="form-control"> Mathe Eliel
				                </label>
				              </div>
				              <div class="checkbox">
				                <label>
				                  <input type="checkbox" checked> Jean Joel
				                </label>
				              </div>
				            </div>
							
							<div>
								<button class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span> Share ticket</button>
								<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancel ticket</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
			<footer class="navbar-fixed-bottom" style="background:#F7F7F7;">
				<div class="container">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4"><input style="padding:10px;width:100%;border:1px solid #D7D7D7;" type="search" placeholder="Search from other solutions"/></div>
						<div class="col-md-4" style="text-align: right;"><span class="badge">3</span> Online agents<!--<span class="caret"></span>--></div>
					</div>
					<div class="row" style="text-align:center;font-size:10px;padding:3px;color:gray;">
						&copy; Kuukha systems
					</div>
				</div>
			</footer>
			
			<script type="text/javascript" src="lib/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="lib/jquery-ui.js"></script>
			<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="lib/bootstrap/modal.js"></script>
			<script type="text/javascript" src="lib/material/material.min.js"></script>
			<script type="text/javascript" src="lib/editor/tinymce.min.js"></script>
			<script type="text/javascript" src="lib/niceselect/js/jquery.nice-select.min.js"></script>
			
			<script type="text/javascript" src="lib/flot/jquery.flot.js"></script>
			<script type="text/javascript" src="lib/flot/jquery.flot.pie.js"></script>
			
			<script type="text/javascript" src="js/script.ticket.js"></script>
		</body>
	</html>
