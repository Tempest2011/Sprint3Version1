<div class="telefonos index">
	<h2><?php echo __('Telefonos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('docente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($telefonos as $telefono): ?>
	<tr>
		<td><?php echo h($telefono['Telefono']['id']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($telefono['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $telefono['Docente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $telefono['Telefono']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $telefono['Telefono']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $telefono['Telefono']['id']), null, __('Are you sure you want to delete # %s?', $telefono['Telefono']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Telefono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
