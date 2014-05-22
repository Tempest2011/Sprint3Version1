<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidoP'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidoM'); ?></th>
			<th><?php echo $this->Paginator->sort('codsis'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['apellidoP']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['apellidoM']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['codsis']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estudiante['Estudiante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiante['Estudiante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiante['Estudiante']['id']), null, __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asignacions'), array('controller' => 'asignacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
