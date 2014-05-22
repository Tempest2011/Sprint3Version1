<div class="metodologiaempresas form">
<?php echo $this->Form->create('Metodologiaempresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Metodologiaempresa'); ?></legend>
	<?php
		echo $this->Form->input('metodologia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('action' => 'index')); ?></li>
	</ul>
</div>
