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
			if(this.data.show_me == true){
				<h1>	
				{{'Show Me'}}
				</h1>	
			}
			else{
			
				{{'Nothing To See Here.'}}
				
			}
		#>
		<br>
		<button gamm-events="{'click' : 'button_is_click'}">{{button_text}}</button>
	</div>		
	
	
    <script type="text/javascript">

    new Gamm({
		element : "#main-content",
		data : {
			show_me : false,
			button_text : "Show H1"
		},
		events : {
			button_is_click : function(){

				if(this.data.button_text == "Show H1"){
					this.data.show_me = true;
					this.data.button_text = "Hide H1";
				}
				else{
					this.data.show_me = false;
					this.data.button_text = "Show H1";
				}

			}
		}
	});

    </script>
</body>

</html>