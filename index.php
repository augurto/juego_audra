<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Responsive Multi-Level Menu - Demo 1</title>
		<meta name="description" content="Responsive Multi-Level Menu: Space-saving drop-down menu with subtle effects" />
		<meta name="keywords" content="multi-level menu, mobile menu, responsive, space-saving, drop-down menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
        <script src="js/menu.js"></script>
	</head>
	<body>
		<div class="container demo-1">
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">Fashion</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Men</a>
										<ul class="dl-submenu">
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Chinos &amp; Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Women</a>
										<ul class="dl-submenu">
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Knits</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Blouses</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Children</a>
										<ul class="dl-submenu">
											<li><a href="#">Boys</a></li>
											<li><a href="#">Girls</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Electronics</a>
								<ul class="dl-submenu">
									<li><a href="#">Camera &amp; Photo</a></li>
									<li><a href="#">TV &amp; Home Cinema</a></li>
									<li><a href="#">Phones</a></li>
									<li><a href="#">PC &amp; Video Games</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Furniture</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Living Room</a>
										<ul class="dl-submenu">
											<li><a href="#">Sofas &amp; Loveseats</a></li>
											<li><a href="#">Coffee &amp; Accent Tables</a></li>
											<li><a href="#">Chairs &amp; Recliners</a></li>
											<li><a href="#">Bookshelves</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Bedroom</a>
										<ul class="dl-submenu">
											<li>
												<a href="#">Beds</a>
												<ul class="dl-submenu">
													<li><a href="#">Upholstered Beds</a></li>
													<li><a href="#">Divans</a></li>
													<li><a href="#">Metal Beds</a></li>
													<li><a href="#">Storage Beds</a></li>
													<li><a href="#">Wooden Beds</a></li>
													<li><a href="#">Children's Beds</a></li>
												</ul>
											</li>
											<li><a href="#">Bedroom Sets</a></li>
											<li><a href="#">Chests &amp; Dressers</a></li>
										</ul>
									</li>
									<li><a href="#">Home Office</a></li>
									<li><a href="#">Dining &amp; Bar</a></li>
									<li><a href="#">Patio</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Jewelry &amp; Watches</a>
								<ul class="dl-submenu">
									<li><a href="#">Fine Jewelry</a></li>
									<li><a href="#">Fashion Jewelry</a></li>
									<li><a href="#">Watches</a></li>
									<li>
										<a href="#">Wedding Jewelry</a>
										<ul class="dl-submenu">
											<li><a href="#">Engagement Rings</a></li>
											<li><a href="#">Bridal Sets</a></li>
											<li><a href="#">Women's Wedding Bands</a></li>
											<li><a href="#">Men's Wedding Bands</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
			</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu();
			});
		</script>
	</body>
</html>