<?php
	header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Principal</title>
  <link type="text/css" rel="stylesheet" href="../css/configuracion.css" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
</head>


<body>
<div class="container">
		    
    <div class="left">
                    <!--li><a><font size="4">Inicio</font></a></li--> 
                     <li><font size="4">Ingresar</font></li> 
                     <?php echo $this->Form->create('User', array('type' => 'file', 'action' => 'login'));
					 	echo $this->Form->input('User.id');						
						echo $this->Form->input('User.username');
						echo $this->Form->input('User.password',  array('label' => 'Password'));
						echo $this->Form->end('Ingresar');
					 ?>
     </div>
              
    <div class="content">
        <!--li><a><font size="4">Contenido</font></a></li>  
   	</div>
    
    <!--<div class="right">
                <!--li><a><font size="4">Inicio2</font></a></li-->
                <!--<li><font size="4">Anuncios</font></li>-->   
    <!--/div-->
            
            
</div>
			
	
</body>
</html>
