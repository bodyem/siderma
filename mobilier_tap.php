<!DOCTYPE html> 
<head>
<title>incaltaminte</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/jquery-1.4.2.min.js"></script>
<script>
$(document).ready(function(){
	$('.item').hover(function(){
		$(this).toggleClass('item item_hover');
	});
	$('.itemz').hover(function(){
		var my_items = $('.itemz');
		for (var i=0; i<my_items.length;i++){
			close = $(my_items[i]).children()[1];
			close.style.display='none';
			my_items[i].style.height='40px';
		}
		var div = $(this).children()[1];
		div.style.display='inline';
		var dimensions = ($($(div).children()[0]).children().length);
		this.style.height = parseInt(parseInt(dimensions*40)+(dimensions*10)+40)+'px';
	});
});

</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sliding.form.js"></script>
</head>
<body>
<div class="wrapper">

	<div class="header">
	
		<div class="logo">
			<img src="components/logo_transparent.png" width="270"/>
		</div>
		
		<div class="searchbar">
			<input type="text"/>
			<div class="contact_web">
				<div id="facebook"><img src="components/facebook.png"/> </div>
				<div id="e-mail"><img src="components/email.png"/></div>
				<div id="skype"><img src="components/skype.png"/></div>
			</div>
		</div>
		
		<div class="menu_top">
			
			
			<div class="item">
				<a href="#">Companie</a>
			</div>
			<div class="item">
				<a href="#">Produse</a>
			</div>
			<div class="item">
				<a href="#">Certificari</a>
			</div>
			<div class="item">
				<a href="#">Cariere</a>
			</div>
			<div class="item">
				<a href="#">Contact</a>
			</div>
			
		</div>
		
	</div>
	
	
	<div class="container">
		<div class="left_menu">
			<ul class="dropdownn">
							<!--<h3 style="font-size:23px;font-weight:bold;margin-bottom:20px;margin-left:10px;">INCALTAMINTE</h3>-->
						
							
					
							<li ><a href="mobilier_tap.php?product=netesuta_arcuri"><img src="components/papuc.png" width="25" height="25" style="float:left"><span style="float:left;margin-left:30px;">Netesuta pentru arcuri</span></a>
							</li>
					
							<li ><a href="mobilier_tap.php?product=vatelina"><img src="components/papuc.png" width="25" height="25" style="float:left"><span style="float:left;margin-left:30px;">Vatelina</span></a>
							</li>
					
							
        			
					
						</ul>
		
		</div>
		<div class = "content" align="center">
		
		<div class="produs_wrapper">
			<?php
								
								if(isset($_GET["product"])){
									$arguments = $_GET["product"];
				
								
									include 'products/'.$arguments.'.html';
								}
								
							?>
			</div>
		
		</div>
	
	
	</div>
	
	
	
	
	
	<div class="footer">
		<div class="links" align="center">
			<a href="#">Home</a>
			<span>|</span>
			<a href="#">Servicii</a>
			<span>|</span>
			<a href="#">Cariere</a>
			<span>|</span>
			<a href="#">Certificari</a>
			<span>|</span>
			<a href="#">Contact</a>
		</div>
		<div class="certificari">
			<img src="components/ISO14001.png" height="50">
			<img src="components/ISO18001.png" height="50">
			<img src="components/ISO9001.png" height="50">
		</div>
	
	</div>






</div>



</body>