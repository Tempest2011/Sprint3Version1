<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>        
    </div>
            
    <div class="content">
		<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Add Docente'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidoP');
		echo $this->Form->input('apellidoM');
		//echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
  	</div>
</body>
<?php /*?>
<div class="docentes form">
<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Add Docente'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidoP');
		echo $this->Form->input('apellidoM');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php */?>