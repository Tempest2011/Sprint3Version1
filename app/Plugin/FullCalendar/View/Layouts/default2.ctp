<!--/View/Layout-->
<!--en view layout se reemplaza po el otro default-->

<?php
$cakeDescription = __d('cake_dev', 'Zeiko Technology');
    $con = mysql_connect('localhost','root'.'');
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
   $database = mysql_select_db('mydb',$con);
    $sql = 'SELECT A.nombre, D.nombre, D.apellidoP, D.apellidoM FROM anuncios A, docentes D WHERE docentes_id=D.id ';
$result = mysql_query ($sql);
//$key = mysql_fetch_row($result);
?>

<!doctype html>
<html>

<head>

<link type="text/css" rel="stylesheet" href="../css/configuracion.css" />

	<?php echo $this->Html->charset(); ?>
    
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

<title>EMPRESA TIS</title>
</head>


<body>
		<div class="container">

				<div id="cabecera">
							<div id="headimg">
								<?php echo $this->Html->image('logo5e.png', array('alt' => $cakeDescription, 'border' => '0'));?>
							</div>
							
							<div id="menu">
								<?php echo $this->Html->link('Inicio',array('controller' => 'inicio', 'action' => 'index'), 
								array('escape'=> false))		
								?>
								<?php echo $this->Html->link('Convocatoria',array('controller' => 'pages', 'action' => 'lista'), 
								array('escape'=> false))		
								?>
								
								<?php echo $this->Html->link('Fundempresas',array('controller' => '', 'action' => 'index'), 
								array('escape'=> false))	
								?>
							</div>
						
				</div>
			  
				<div id="sidebar1">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('sidebar1'); ?>
				</div>
  
				<div id="content">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
                                    
                                    
				</div>
				
				<div id="sidebar2">
					<div class="calendario" style="height:500px;"  style="height:500px;">
                                    <div style="clear:both;float:left;padding-left:60px;"><H1>DatePicker Example</H1></div>
                                    <div>&nbsp;</div>
        
                                            <?php echo $this->Html->css('jquery-ui-1.10.4.custom'); ?>
                                            <?php echo $this->Html->script('jquery-1.10.2'); ?>
                                            <?php echo $this->Html->script('jquery-ui-1.10.4.custom.min'); ?>

                                            <?php echo $this->Html->div('datepicker_img w100p fl pl460p pa', 
                                                             $this->Html->image('datepicker_calendar_icon.gif'),array('id' => 'datepicker_img')); ?>
                                            <?php echo $this->Html->div('datepicker fl pl460p pa', ' ' ,array('id' => 'datepicker')); ?>
                                            <div>&nbsp;</div>
                                            <?php  
                                            $sql2 = 'SELECT start, end  FROM events';
                                            $result2 = mysql_query ($sql2);?>
                                             <?php

                                            //obtenemos los datos resultado de la consulta

                                           
                                             $even=  array();
                                                while ($row2 = mysql_fetch_row($result2)){

                                                    echo $row2[0].'/n';
                                                    echo $row2[1].'/n';
                                                         $even[]=$row2[0];
                                                         $even[]=$row2[1];
                                               }

                                            ?>                               
                                         <script>
                             
                                                    $(function() {
                                                        var events = ['15-5-2014', '12-5-2014'];

                                                        $( "#datepicker" ).datepicker({
                                                            beforeShowDay: function(date) {
                                                                var current = $.datepicker.formatDate('dd-m-yy', date);
                                                                return jQuery.inArray(current, events) == -1 ? [true, ''] : [true, 'ui-state-hover', 'ui-state-highlight'];
                                                            }
                                                        });
                                                    });
                                        </script>
                                            
                                            
                                            
                                            

                                        </div>
					
					<div class="anuncios">
				
                                            <?php

//obtenemos los datos resultado de la consulta
    
 $key=  array();
    while ($row = mysql_fetch_row($result)){
               
             $key[]=$row[0].'\n   ** PUBLICADO POR: \n'.$row[1].' \n '.$row[2].' \n '.$row[3];
   }
   

?>                                            <SCRIPT LANGUAGE="JavaScript">

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
                                                <div class="enlace">
                                                 <a href="../sprint1belen/anuncios"> ver mas... </a></div>
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