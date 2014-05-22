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
	<h2><?php __('Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr><td colspan=\"35\"><font face=\"verdana\" style="font-size: 32pt" color="orange"><b> EVENTOS</b></font></td></tr>
         
	<?php
	$i = 0;
        
          $link = @mysql_connect("localhost", "root"."")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("per", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT title, details, start, end, name " .
      "FROM events, event_types " .
	  "WHERE event_types.id = event_type_id";
  $result = mysql_query($query);
  
  while($events = mysql_fetch_array($result))
  {
	?>
	<tr> 
		<td><font face=\"verdana\" style="font-size: 8pt" color="orange"><b> <?php echo $events['start']."\n"; ?></b></font><font face=\"verdana\" style="font-size: 16pt" color="black"><b> <?php echo $events['title']."\n"; ?></b></font></td>
	</tr>
        
	<tr> 
		<td><?php echo $events['details']."\n"; ?></td>
		       
	</tr>
<?php } ?>
	</table>
</div>



            
</div>
</body>
</html>
