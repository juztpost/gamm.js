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
		<div style="width:{{width}}px; height:100px; border:1px solid #000; ">			
		</div>
		<br>
		<button gamm-events="{'click' : 'increase_width'}">Increase Width</button> 
		<button gamm-events="{'click' : 'decrease_width'}">Decrease Width</button>

	</div>
	
	
    <script type="text/javascript">

    new Gamm({
		element : "#main-content",
		data : {
			width : 10
		},
		events : {
			increase_width : function(){
				this.data.width += 5;
			},
			decrease_width : function(){
				this.data.width -= 5;
			}
		}
	});

    </script>
</body>

</html>