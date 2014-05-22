<div class="docentestudiantes form">
<?php echo $this->Form->create('Docentestudiante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Docentestudiante'); ?></legend>
	<?php
		echo $this->Form->input('docente_id');
		echo $this->Form->input('estudiante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Docentestudiante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Docentestudiante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
