<div class="integrantes index">
	<h2><?php echo __('Integrantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($integrantes as $integrante): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($integrante['Empresa']['nombrelargo'], array('controller' => 'empresas', 'action' => 'view', $integrante['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($integrante['Estudiante']['nombre'], array('controller' => 'estudiantes', 'action' => 'view', $integrante['Estudiante']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $integrante['Integrante']['empresa_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $integrante['Integrante']['empresa_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $integrante['Integrante']['empresa_id']), null, __('Are you sure you want to delete # %s?', $integrante['Integrante']['empresa_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Integrante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
