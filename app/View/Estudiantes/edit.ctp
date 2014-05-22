<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidoP');
		echo $this->Form->input('apellidoM');
		echo $this->Form->input('codsis');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estudiante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Estudiante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asignacions'), array('controller' => 'asignacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
