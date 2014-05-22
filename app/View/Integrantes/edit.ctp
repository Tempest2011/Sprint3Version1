<div class="integrantes form">
<?php echo $this->Form->create('Integrante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Integrante'); ?></legend>
	<?php
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('estudiante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Integrante.empresa_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Integrante.empresa_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
