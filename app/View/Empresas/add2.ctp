<body>

    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>        
    </div>
            
    <div class="content">
    
    <?php //echo $this->Form->create('Empresa', array('type' => 'file', 'action' => 'add2'));?>
    <fieldset>
    <legend>Mas informacion de la grupo empresa:</legend>

  <?php    echo $roleid.' Rol'; ?>
                  
                  <?php //echo $this->Form->create('Docente'); ?>

		<legend><?php echo __('Seleccione su docente'); ?></legend>
        
        <?php
        $con = mysql_connect('localhost','root'.'');
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
   $database = mysql_select_db('per',$con);
   
$q_m = "SELECT *
FROM docentes";

$res_m_q = mysql_query($q_m)or die("Revise su consulta");
$num_mat = mysql_num_rows($res_m_q);


		?>
        
       
        <?php
		
		
		
		
		
		
		
		echo $this->Form->create('Empresa' ,array('type' => 'file', 'action' => 'add2'));
/*//$estudiantes="<form action='add3'><h3>Docentes selesccionados:</h3><input type='text' readonly name='contador' value='0' />";
               //public $docentes;
			   
			   $docentes = '';
                for($i=0; $i< $num_mat ;$i++){
                    $res= mysql_fetch_array($res_m_q);
					$docentes= $docentes."<input type='checkbox' value=".$res['id']." name='docente[]' onclick='registra(this)'>".$res['id'].$res['nombre']." ".$res['apellidoP']."<br>";
                }
                //$docentes = $docentes . "<input type='submit' value='Enviar'><br></form>";
           
        echo $docentes;*/
	echo $this->Form->end('Siguiente');
?>
        
        
        
        
	

<?php echo $this->Form->end(__('Submit')); ?>	
   
  	</div>
 </body>
