<div class="metodologias form">
<?php echo $this->Form->create('Metodologia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Metodologia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Metodologia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Metodologia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Metodologias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Metienerols'), array('controller' => 'metienerols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metienerol'), array('controller' => 'metienerols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
