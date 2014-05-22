<!--/View/Layout-->
<!--en view layout se reemplaza po el otro default-->
<?php
$cakeDescription = __d('cake_dev', 'Zeiko Technology');
?>

<!doctype html>
<html>


<head>
		<?php echo $this->Html->script('jquery-1.6.3.min', array('inline' => false)); ?> <?php echo $this->Html->script('tms-0.3', array('inline' => false)); ?> <?php echo $this->Html->script('tms_presets', array('inline' => false)); ?> <?php echo $this->Html->script('jquery.easing.1.3', array('inline' => false)); ?>
				
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
    
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css('configuracion');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>

		<meta charset="utf-8">
			<?php echo $this->Html->script(array( 
            'stuHover.js' 
        ));  ?>
		
		<title>EMPRESA TIS</title>
</head>


<body>
		<div class="container">

				<div id="cabecera">
							<div id="headimg">
								<?php echo $this->Html->image('logo1e.png', array('alt' => $cakeDescription, 'border' => '0'));?>
							</div>
							
							<div id="menu">
								<ul id="nav">
	<li class="top"><a href="#nogo1" class="top_link"><span>Inicio</span></a></li>
	<li class="top"><a href="#nogo2" id="products" class="top_link"><span class="down">Convocatoria</span></a>
		<ul class="sub">
			<li><a href="#nogo3" class="fly">Cameras</a>
					<ul>
						<li><a href="#nogo4">Nikon</a></li>
						<li><a href="#nogo5">Minolta</a></li>
						<li><a href="#nogo6">Pentax</a></li>
					</ul>
			</li>
			<li class="mid"><a href="#nogo7" class="fly">Lenses</a>
					<ul>
						
						<li><a href="#nogo9">Standard</a></li>
						<li><a href="#nogo10">Telephoto</a></li>
							<ul>
								<li><a href="#nogo12">35mm to 125mm</a></li>
								<li><a href="#nogo13">50mm to 250mm</a></li>
								<li><a href="#nogo14">125mm to 500mm</a></li>
							</ul>
						</li>
						<li><a href="#nogo15">Mirror</a></li>
						<li><a href="#nogo16" class="fly">Non standard</a>
							<ul>
								<li><a href="#nogo17">Bayonet mount</a></li>
								<li><a href="#nogo18">Screw mount</a></li>
							</ul>
						</li>
					</ul>
			</li>
			<li><a href="#nogo19">Flash Guns</a></li>
			<li><a href="#nogo20">Tripods</a></li>
			<li><a href="#nogo21">Filters</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo22" id="services" class="top_link"><span class="down">Servicios</span></a>
		<ul class="sub">
			<li><a href="#nogo23">Printing</a></li>
			<li><a href="#nogo24">Photo Framing</a></li>
			<li><a href="#nogo25">Retouching</a></li>
			<li><a href="#nogo26">Archiving</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="down">Contactenos</span></a>
		<ul class="sub">
			<li><a href="#nogo28">Support</a></li>
			<li><a href="#nogo29" class="fly">Sales</a>
				<ul>
					<li><a href="#nogo30">USA</a></li>
					<li><a href="#nogo31">Canadian</a></li>
					<li><a href="#nogo32">South American</a></li>
					<li><a href="#nogo33" class="fly">European</a>
						<ul>
							<li><a href="#nogo34" class="fly">British</a>
								<ul>
									<li><a href="#nogo35">London</a></li>
									<li><a href="#nogo36">Liverpool</a></li>
									<li><a href="#nogo37">Glasgow</a></li>
									<li><a href="#nogo38" class="fly">Bristol</a>
										<ul>
											<li><a href="#nogo39">Redland</a></li>
											<li><a href="#nogo40">Hanham</a></li>
											<li><a href="#nogo41">Eastville</a></li>
										</ul>
									</li>
									<li><a href="#nogo42">Cardiff</a></li>
									<li><a href="#nogo43">Belfast</a></li>
								</ul>
							</li>
							<li><a href="#nogo44">French</a></li>
							<li><a href="#nogo45">German</a></li>
							<li><a href="#nogo46">Spanish</a></li>
						</ul>
					</li>
					<li><a href="#nogo47">Australian</a></li>
					<li><a href="#nogo48">Asian</a></li>
				</ul>
			</li>
			<li><a href="#nogo49">Buying</a></li>
			<li><a href="#nogo50">Photographers</a></li>
			<li><a href="#nogo51">Stockist</a></li>
			<li><a href="#nogo52">General</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo53" id="shop" class="top_link"><span class="down">Acerca de nosotros</span></a>
		<ul class="sub">
			<li><a href="#nogo54">Mision</a></li>
			<li><a href="#nogo55">Vision</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo57" id="privacy" class="top_link"><span>Politica de Privacidad</span></a></li>
</ul>
							</div>
						
		
			  
				<div id="left">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('left'); ?>
				</div>
  
				<div id="content">
                
                <div style="text-align:right;">
            	<?php if($logged_in): ?>
                	Welcome <?php echo $current_user['username'];?>.
					<?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
                <?php else: ?>
                	<?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
                <?php endif; ?>
         	</div>
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
				
				<div id="right">
					<div class="calendario"></div>
						<h1>ANUNCIOS<h1>
						<div class="anuncios">
					
					<?php $key = array("uno","dos","tres","cuatro","cinco","seis","siete", "ocho","nueve","diez","once","doce","trece","catorce","quince");?>
						<SCRIPT LANGUAGE="JavaScript">

							var beforeMsg = "<center><font color=#0489B1 size= 3%><b>";
							var afterMsg = "</b></font></center>";

							var msgRotateSpeed = 5000; // aqui se ajusta la velocidad en milisegundos
							var textStr = new Array(); // En las siguientes lineas van los textos que rotaran
							<?php
								for ($j = 0; $j < count($key); $j++){
							?>
								textStr[<?php echo $j ?>] = "<?php echo $key[$j]; ?>";
							<?php } ?>
							
							

							if (document.layers) {	
								document.write('<ilayer id="NS4message" height=30 width=100% color=red><layer id="NS4message2" height=25 width=100%></layer></ilayer>')
								temp = 'document.NS4message.document.NS4message2.document.write(beforeMsg + textStr[i++] + afterMsg);'+
								'document.NS4message.document.NS4message2.document.close()';
							}
							else if (document.getElementById) {
								document.write(beforeMsg + '<div id="message" style="position:relative;">IE division</div>' + afterMsg);
								temp = 'document.getElementById("message").firstChild.nodeValue = textStr[i++];';
							}
							else if (document.all) {
								document.write(beforeMsg + '<div id="message" style="position:relative;">IE division</div>' + afterMsg);
								temp = 'message.innerHTML = textStr[i++];';
							}
							var i = 0;
							function msgRotate() {
								eval(temp);
								if (i == textStr.length) i = 0;
								setTimeout("msgRotate()", msgRotateSpeed);
								
							}
							window.onload = msgRotate;
							
						</script>
						</div>	
					</div>
                </div>
		
	
				<footer>
					<p>
						<?php echo $this->Html->link('Convocatoria',array('controller' => 'pages', 'action' => 'lista'), 
								array('escape'=> false))		
						?>
								
						<?php echo $this->Html->link('Fundempresas',array('controller' => '', 'action' => 'index'), 
								array('escape'=> false))	
						?>
						<?php echo $this->Html->link('Convocatoria',array('controller' => 'pages', 'action' => 'lista'), 
						array('escape'=> false))		
						?>
						<?php echo $this->Html->link('Fundempresas',array('controller' => '', 'action' => 'index'), 
						array('escape'=> false))	
						?>
					</p>
				</footer>
		</div> 		
</body>

</html>
