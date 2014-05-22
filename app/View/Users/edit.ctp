<body>
    <div class="left">
        <h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Esta seguro que desea eliminar # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Detalle sesiones'), array('controller' => 'detallesesions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Detallesesion'), array('controller' => 'detallesesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Tablalogs'), array('controller' => 'tablalogs', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Tablalog'), array('controller' => 'tablalogs', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Usuariorols'), array('controller' => 'usuariorols', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Usuariorol'), array('controller' => 'usuariorols', 'action' => 'add')); ?> </li>
	</ul>        
    </div>
            
    <div class="content">
		<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Modificar datos del usuario:'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username', array('label'=>'username (Nombre de usuario)'));
		echo $this->Form->input('password',array('label'=>'password (Contraseña)'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
  	</div>
</body>
