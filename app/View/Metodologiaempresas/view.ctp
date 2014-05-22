<div class="metodologiaempresas view">
<h2><?php echo __('Metodologiaempresa'); ?></h2>
	<dl>
		<dt><?php echo __('Empresa Id'); ?></dt>
		<dd>
			<?php echo h($metodologiaempresa['Metodologiaempresa']['empresa_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodologia Id'); ?></dt>
		<dd>
			<?php echo h($metodologiaempresa['Metodologiaempresa']['metodologia_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Metodologiaempresa'), array('action' => 'edit', $metodologiaempresa['Metodologiaempresa']['empresa_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Metodologiaempresa'), array('action' => 'delete', $metodologiaempresa['Metodologiaempresa']['empresa_id']), null, __('Are you sure you want to delete # %s?', $metodologiaempresa['Metodologiaempresa']['empresa_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
