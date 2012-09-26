<!DOCTYPE html> 
<head>
<title>incaltaminte</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/produseform.css" />
<script src="js/jquery-1.4.2.min.js"></script>
<script>
$(document).ready(function(){
	$('.item').hover(function(){
		$(this).toggleClass('item item_hover');
	});
	
	$('.label').click(function(){
		
		//remove the class from the labels
		$('.label').each(function(){
			$(this).removeClass('selected');
		});
		
		
		//remove the selected class from the arrow
		$('.arrow-right').each(function(){
			$(this).removeClass('selected');
		});
		
		//add selected class to arrow
		$($($(this).parent()[0]).children()[1]).addClass('selected');
		
		//add selected class to selected label
		$(this).addClass('selected');
		
		//cut the relationship
		$("div:[reference]").each(function(){
			$(this).removeClass('active');
		});
		
		//show the menu
		var referinta = $(this).attr('id');
		$('.personal_menu').removeClass('active');
		if($("div:[referenceto="+referinta+"]").length!=0){
		 //console.log(referinta,$("div:[referenceto="+referinta+"]"));
		$('.personal_menu').addClass('active');
		$('.personal_menu').children().each(function(){
			$(this).addClass('inactive');
			if($(this).attr('referenceto')==referinta)
				$(this).removeClass('inactive');
		})
		
		var legatura = $("div:[reference="+referinta+"]");
		$('.personal_menu').animate({
			top: $(legatura).position().top
		},200)
		//console.log($(legatura).position().top);
		$(legatura).addClass('active');
		}
	});
	
	//drop the subitems
	$('.element').click(function(){
		$($($($(this).parent()[0]).parent()[0]).find('.element_wrapper')).each(function(){
			$('.element').removeClass('activated');
			$($(this).find('ul').removeClass('active'));
			$($(this).find('ul')).attr('active','false');
		
		});
		var sub_menu=$($(this).parent()[0]).find('ul');
		if($(sub_menu).attr('active')=='false')
		{	
			$(this).addClass('activated');
			$(sub_menu).addClass('active');
			$(sub_menu).attr('active', 'true');
		}
		
	
	})
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
				<a href="despre_noi.html">Companie</a>
			</div>
			<div class="item_hover">
				<a href="#">Produse</a>
			</div>
			<div class="item">
				<a href="certificari.html">Certificari</a>
			</div>
			<div class="item">
				<a href="#">Cariere</a>
			</div>
			<div class="item">
				<a href="contact.html">Contact</a>
			</div>
			
		</div>
		
	</div>
	
	
	<div class="container">
	
		<div class="extra_menu">
			<div class="extra_menu_legaturi">
				<div class="leg" reference="item1">
				
				</div>
				<div class="leg" reference="item2">
				
				</div>
				<div class="leg" reference="item3">
				
				</div>
				
				<div class="leg" reference="item4">
				
				</div>
			</div>
			<div class="personal_menu">
			     <div class="inactive" referenceto="item1">
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
							Branturi
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						<ul active="false">
							<li><a href="produse.php?product=branturi_strobel">Branturi Strobel</a></li>
							<li><a href="produse.php?product=branturi_folie_al">Branturi Folie Aluminiu</a></li>
							<li><a href="produse.php?product=branturi_argila">Branturi Argila</a></li>
							<li><a href="produse.php?product=branturi_altele">Branturi Altele</a></li>
						</ul>
					
				</div>
					
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						Acoperisuri de brant
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
						
						
					</div>
					<ul active="false">
							<li><a href="produse.php?product=ab_netermoformabile">Netermoformabile</a></li>
							<li><a href="produse.php?product=ab_termoformabile_CORAL">Termoformabile CORAL</a></li>
							<li><a href="produse.php?product=ab_termoformabile_FLORIDA">Termoformabile FLORIDA</a></li>
							<li><a href="produse.php?product=ab_termoformabile_SIDAC">Termoformabile SIDAC</a></li>
							<li><a href="produse.php?product=ab_termoformabile_SIDALL">Termoformabile SIDALL</a></li>
					</ul>
				</div>
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						Captuseli
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
						
						
					</div>
					<ul active="false">
						<li><a href="produse.php?product=captuseli_din_lana">Lana</a></li>
						<li><a href="produse.php?product=captuseli_nevelurate(SIDIFLORALL)">Nevelurate(SIDIFLORALL)</a></li>
						<li><a href="produse.php?product=captuseli_nevelurate(SIDMER) ">Nevelurate(SIDMER)</a></li>
						<li><a href="produse.php?product=captuseli_nevelurate_altele">Nevelurate(Altele)</a></li>
						<li><a href="produse.php?product=captuseli_termocalandrate">Termocaladrate</a></li>
						<li><a href="produse.php?product=captuseli_velurate">Velurate</a></li>
					</ul>
					
				</div>
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						Staifuri si bombeuri
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
						
						
					</div>
					
				</div>
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						Intarituri
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
						
						
					</div>
					
				</div>
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						Ansambluri caserate
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
						
						
					</div>
					<ul active = "false">
					<li><a href="produse.php?product=matlasate">Matlasate</a></li>
					</ul>
					
				</div>
				
				
			    </div>	
			    
			    <!-- end of first element -->
			    
			    
			    <div class="inactive" referenceto="item3">
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						<a href="produse.php?product=mochete_auto">Mochete auto</a>
						
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						
					
				</div>
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						<a href="produse.php?product=tableta">Tableta</a>						
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						
					
				</div>
				
					<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						<a href="produse.php?product=tapiterii_cap_auto">Tapiterii</a>
						
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						
					
				</div>
					
				
			    </div>
			    
			    <!-- end of second element -->	
			    
			     <div class="inactive" referenceto="item4">
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						<a href="produse.php?product=netestuta_arcuri">Netesuta pentru arcuri</a>
						
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						
					
				</div>
				
				
				
				<div class="element_wrapper" >
					<div class="element">
						<div class="icon">
						<img src="components/papuc.png"/>
						</div>
						
						<div class="label_element">
						<a href="produse.php?product=vatelina">Vatelina</a>
						
						</div>
						
						<div class="drop">
						&#x25bc
						</div>
					</div>
						
					
				</div>
					
				<!-- end of third -->
			    </div>
			    
			    
			</div>
		
		</div>
		
		
		
		<div class = "content" align="center">
			
			<div class="product_menu">
				<div class="component">
					<div class="label base" id="item1">
						 Incaltaminte 
					</div>
					<span class="arrow-right">&#9654;</span>
				</div>
				<div class="component">
					<div class="label normal" id="item2">
					 <a href="produse.php?product=marochinarie">Captuseli</a>
					</div>
					<span class="arrow-right">&#9654;</span>
				</div>
				<div class="component">
					<div class="label normal" id="item3">
						 Automotive 
					</div>
					<span class="arrow-right">&#9654;</span>
				</div>
				<div class="component">
					<div class="label normal" id="item4">
						 Mobilier tapitat 
					</div>
					<span class="arrow-right">&#9654;</span>
				</div>
		
			</div>
			
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
