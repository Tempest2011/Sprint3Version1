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
    <?php echo $this->Form->create('Empresa', array('type' => 'file', 'action' => 'add'));?>
   
    <fieldset>
    <legend>Crear nueva grupo-empresa para acceder al sistema:</legend>
                    
		<?php 
		 	
            //echo $this->Form->create('User');
            //echo $this->Form->input('id', array('label' => 'Login', 'type' => 'text'));
            echo $this->Form->input('User.id');            
            echo $this->Form->input('User.username', (array('default' => 'zzz')), array('required'=>false));
            echo $this->Form->input('User.password',  array('type' => 'password', 'label' => 'Password', 'default' => 'zzz'));
            echo $this->Form->input('User.password_confirm',  array('type' => 'password', 'label' => 'Confirmar password', 'default' => 'zzz'));
			echo $this->Form->input('User.role_id', array('type' => 'hidden', 'default' => '2'));
            echo $this->Form->input('Empresa.id');
            echo $this->Form->input('Empresa.nombrelargo', (array('label' => 'Nombre Largo', 'type' => 'text', 'default' => 'zzz')));
            echo $this->Form->input('Empresa.nombrecorto', (array('label' => 'Nombre Corto', 'type' => 'text', 'default' => 'zzz')));

            echo $this->Form->input('Empresa.correo', array('type' => 'email', 'default' => 'zzz@zzz.com'));
            //echo $this->Upload->add('User',$user['User']['id']);
			
            ?>
            <fieldset/>
             <?php
			 echo $this->Form->end('Siguiente');
			//echo $this->Html->link($this->Form->button('Siguiente'), array('controller' => 'integrantes', 'action' => 'add'), array('escape'=>false,'title' => "Click to view somethin"));
                //echo $this->Form->button('Siguiente');
				
			 ?>
    
  	</div>
 </body>


