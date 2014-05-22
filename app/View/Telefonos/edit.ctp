<div class="telefonos form">
<?php echo $this->Form->create('Telefono'); ?>
	<fieldset>
		<legend><?php echo __('Edit Telefono'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('docente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Telefono.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Telefono.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
