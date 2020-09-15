<!DOCTYPE html>
<html>

<head>
	<title>
		Gamm.js Documentation - HTML Render
	</title>
	
	<script type="text/javascript" src="../../gamm.js"></script>

	<link rel="icon" href="../logo.jpg" sizes="32x32" />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
	<!-- meta tags -->
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="GAMM-JS">
<meta itemprop="description" content="A Personal Javascript Library Alternative!">
<meta itemprop="image" content="logo.jpg">

<meta name="title" content="GAMM-JS">
<meta name="description" content="A Personal Javascript Library Alternative!">
<meta name="keywords" content="Javascript,HTML,Library">
<meta name="author" content="">

<!-- Facebook Meta Tags -->
<meta property="og:title" content="GAMM-JS" >
<meta property="og:description" content="A Personal Javascript Library Alternative!">
<meta property="og:image" content="../logo.jpg">
<meta property="og:url" content="https://www.juztpost.net/" >
<meta property="og:type" content="website">

<!-- Twitter Meta Tags -->
<meta name="twitter:title" content="GAMM-JS">
<meta name="twitter:description" content="A Personal Javascript Library Alternative!">
<meta name="twitter:image" content="../logo.jpg">
<meta name="twitter:card" content="summary_large_image">

</head>

<body>
	
    <div id="main-content">		
		
		<#gamm 
			<ul>	
			for(var key in this.data.menus){
				var menu = this.data.menus[key];
				
				<li>	
					<a href="{{menu.link}}">	
					{{menu.name}}
					</a>	
				</li>	

			}
			</ul>	
		#>	

	</div>								
	
    <script type="text/javascript">

    new Gamm({
		element : "#main-content",
		data : {
			menus : [
				{
					name : "Home",
					link : "home.html"
				},
				{
					name : "About",
					link : "about.html"
				},
				{
					name : "Contact",
					link : "contact.html"
				}
			]
		}
	});

    </script>
</body>

</html>