<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>EmployeeLife</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!--[if IE]><script type="text/javascript" src="js/ie.js"></script><![endif]-->
	<script type="text/javascript">
		if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
			var msViewportStyle = document.createElement('style')
			msViewportStyle.appendChild(
				document.createTextNode(
					'@-ms-viewport{width:auto !important}'
				)
			)
			document.querySelector('head').appendChild(msViewportStyle)
		}
	</script>
</head>
<body>
	<div id="wrapper">

		<header id="header">
			<div class="container holder">
				<strong class="logo navbar-brand"><a href="#">EmployeMYeLife</a></strong>
				<nav id="nav">
					<ul class="nav nav-pills">
						<li><a href="index.php">News Feed</a></li>
						<li><a href="messages.php">Messages <span class="badge">8</span></a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="colleagues.php">Colleagues</a></li>
					</ul>
				</nav>
				<div class="form-search">
					<div class="row">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
							<input type="text" class="form-control" placeholder="Search for people...">
						</div>
					</div>
				</div>
				<ul class="user-nav">
					<li><a href="#"><img src="images/ico1.png" width="25" height="23" alt="image description"></a></li>
					<!-- <li><a href="#" class="mail"><span class="badge">25</span></a></li> -->
					<li><a href="#" class="pulse">pulse</a></li>
				</ul>
			</div>
		</header>

		<div id="main" class="container">

			<!-- START Sidebar include -->
			<aside id="sidebar" class="col-md-3">
				<div class="holder">
					<div class="user-block">
						<div class="img-holder">
							<img src="images/img1.jpg" width="130" height="123" alt="image description">
						</div>
						<h1>Adam Kerr</h1>
						<a href="#" class="twitt">@adamkerr</a>
						<div class="contact-info">
							<a href="#" class="map">Perth, Western Australia</a>
							<a href="mailto:&#097;&#100;&#097;&#109;&#064;&#111;&#103;&#114;&#111;&#117;&#112;&#046;&#099;&#111;&#109;&#046;&#097;&#117;">&#097;&#100;&#097;&#109;&#064;&#111;&#103;&#114;&#111;&#117;&#112;&#046;&#099;&#111;&#109;&#046;&#097;&#117;</a>
						</div>
					</div>
					<div class="collegues-block">
						<h2>Collegues</h2>
						<ul>
							<li>
								<img src="images/img2.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img2.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img3.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img4.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img5.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img6.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img7.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img8.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
							<li>
								<img src="images/img9.jpg" width="50" height="50" alt="image description">
								<a href="#" class="over"><span class="glyphicon glyphicon-plus"></span></a>
							</li>
						</ul>
					</div>
				</div>
			</aside>
			<!-- END Sidebar include -->
			
			<div id="content" class="col-md-9">
				<div class="holder">
					<div class="feed">
						<div class="title">
							<span class="user-welcome">Welcome, <a href="#">Adam Kerr</a></span>
							<h2>Messages</h2>
						</div>
						<div class="inbox-notification">
							<p>Showing 8 of 8</p>
						</div>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img2.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Sales meeting on today!</span>
									</div>
									<span class="date">2 days ago by <a href="#">@anasmith</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img3.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Can you please read over the annual report</span>
									</div>
									<span class="date">5 days ago by <a href="#">@jameshills</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img6.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Meeting is cancelled this afternoon</span>
									</div>
									<span class="date">8 days ago by <a href="#">@johntaylor</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img4.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Please update the following details</span>
									</div>
									<span class="date">11 days ago by <a href="#">@kristyhinze</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img5.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Re: Annual leave</span>
									</div>
									<span class="date">20 days ago by <a href="#">@kyliejohns</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img7.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Update details on annual report</span>
									</div>
									<span class="date">22 days ago by <a href="#">@gavincollins</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img8.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Re: Training seminar</span>
									</div>
									<span class="date">25 days ago by <a href="#">@rebeccawills</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
						<section class="post-holder messages">
							<article class="post">
								<img src="images/img9.jpg" width="50" height="50" alt="image description" class="alignleft">
								<div class="post-content">
									<div class="title">
										<span>Staff xmas party at The Avairy</span>
									</div>
									<span class="date">25 days ago by <a href="#">@kathysmith</a></span>	
									<div class="control">
									<ul>
										<li><a href="#" class="replay">Replay</a></li>
										<li><a href="#" class="delete">Delete</a></li>
									</ul>
								</div>							
								</div>
							</article>
						</section>
					</div> <!-- / .feed -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>