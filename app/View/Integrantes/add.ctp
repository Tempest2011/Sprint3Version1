<body>
    <div class="left">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Integrantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>       
    </div>
            
    <div class="content">
<?php echo $this->Form->create('Integrante'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Integrantes'); ?></legend>
	<?php
		echo $this->Form->input('estudiante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
  	</div>
</body>


