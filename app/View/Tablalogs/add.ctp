<div class="tablalogs form">
<?php echo $this->Form->create('Tablalog'); ?>
	<fieldset>
		<legend><?php echo __('Add Tablalog'); ?></legend>
	<?php
		echo $this->Form->input('tabla');
		echo $this->Form->input('fecha');
		echo $this->Form->input('pid');
		echo $this->Form->input('datoviejo');
		echo $this->Form->input('datonuevo');
		echo $this->Form->input('operacion');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tablalogs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
