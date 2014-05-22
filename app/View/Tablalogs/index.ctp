<div class="tablalogs index">
	<h2><?php echo __('Tablalogs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tabla'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('pid'); ?></th>
			<th><?php echo $this->Paginator->sort('datoviejo'); ?></th>
			<th><?php echo $this->Paginator->sort('datonuevo'); ?></th>
			<th><?php echo $this->Paginator->sort('operacion'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tablalogs as $tablalog): ?>
	<tr>
		<td><?php echo h($tablalog['Tablalog']['id']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['tabla']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['pid']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['datoviejo']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['datonuevo']); ?>&nbsp;</td>
		<td><?php echo h($tablalog['Tablalog']['operacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tablalog['User']['username'], array('controller' => 'users', 'action' => 'view', $tablalog['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tablalog['Tablalog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tablalog['Tablalog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tablalog['Tablalog']['id']), null, __('Are you sure you want to delete # %s?', $tablalog['Tablalog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tablalog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
