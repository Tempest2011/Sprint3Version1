<!--/View/Layout-->
<!--en view layout se reemplaza po el otro default-->

<?php
$cakeDescription = __d('cake_dev', 'Zeiko Technology');
    $con = mysql_connect('localhost','root'.'');
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
   $database = mysql_select_db('per',$con);
    $sql = 'SELECT A.nombre, D.nombre, D.apellidoP, D.apellidoM FROM anuncios A, docentes D WHERE docente_id=D.id ';
$result = mysql_query ($sql);
//$key = mysql_fetch_row($result);
?>

<!doctype html>
<html>


<head>				
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
                 <?php echo $this->Html->script('jquery-1.6.3.min', array('inline' => false)); ?>
		<?php echo $this->Html->script('tms-0.3', array('inline' => false)); ?>
		<?php echo $this->Html->script('tms_presets', array('inline' => false)); ?>
		<?php echo $this->Html->script('jquery.easing.1.3', array('inline' => false)); ?>
		<meta charset="utf-8">
			<?php echo $this->Html->script(array('stuHover.js'));  ?>
		
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
                                
	<li class="top"><a href="/sprint" class="top_link"><span><?php echo $this->Html->image('home.jpg', array('alt' => $cakeDescription, 'border' => '0'));?></span></a></li>
	<li class="top"><a href="../pages/convocatoria" class="top_link"><span>Convocatoria</span></a></li>
	<li class="top"><a href="#nogo57" id="privacy" class="top_link"><span>FundeEmpresa</span></a></li>
	<li class="top"><a href="#nogo22" id="services" class="top_link"><span class="down">Servicios    <?php echo $this->Html->image('arrow_over.gif', array('alt' => $cakeDescription, 'border' => '0'));?></span></a>
		<ul class="sub">
			<li><a href="/sprint/full_calendar/events">Anuncios</a></li>
			<li><a href="/sprint/docentes">Docentes</a></li>
			<li><a href="/sprint/documentos">Documentos</a></li>
			<li><a href="/sprint/empresas">Empresas</a></li>
            <li><a href="/sprint/users">Usuarios</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo27" id="contacts" class="top_link"><span class="down">Informacion <?php echo $this->Html->image('arrow_over.gif', array('alt' => $cakeDescription, 'border' => '0'));?></span></a>
		<ul class="sub">
			<li style="width:149px"><a href="#nogo28">E-mails</a></li>
			<li style="width:149px"><a href="#nogo29" class="fly">Telefonos </a>
				<ul>
					<li><a href="#nogo30">Docentes</a></li>
					<li><a href="#nogo31">Adminitradores</a></li>
					
				</ul>
			</li>
			<li style="width:149px"><a href="#nogo50">Referencias</a></li>
			<li style="width:149px"><a href="#nogo50">General</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo53" id="shop" class="top_link"><span class="down">Acerca de <?php echo $this->Html->image('arrow_over.gif', array('alt' => $cakeDescription, 'border' => '0'));?></span></a>
		<ul class="sub">
			<li style="width:127px"><a href="mision.ctp">Mision</a></li>
			<li style="width:127px"><a href="vision.ctp">Vision</a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo57" id="privacy" class="top_link"><span>Ayuda</span></a></li>
</ul>
							</div>
						
				</div>
			  
				<div id="left">
					<?php //echo $this->Session->flash(); ?>
					<?php //echo $this->fetch('left'); ?>
				</div>
  
				<div id="content">
                	<div style="text-align:right;">
            	<?php if($logged_in): ?>
                	Welcome <?php echo $current_user['username'];?>.
					<?php echo $this->Html->link('Logout', array('controller'=>'../users', 'action'=>'logout')); ?>
                <?php else: ?>
                	<?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
                <?php endif; ?>
         	</div>
                
					<?php echo $this->Session->flash(); ?>
                    <?php echo $this->Session->flash('auth'); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
				
				<div id="right">
					
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
								
                           <div class="enlace1">
                                       <a href="../sprint/anuncios"> ver mas... </a></div>
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
