<body>
    <div class="left">
       <h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Docente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>        
    </div>
            
    <div class="content">
		<h2><?php echo __('Docentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('A. Paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('A. Materno'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docentes as $docente): ?>
	<tr>
		<td><?php echo h($docente['Docente']['id']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['apellidoP']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['apellidoM']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['User']['username'], array('controller' => 'users', 'action' => 'view', $docente['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $docente['Docente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $docente['Docente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $docente['Docente']['id']), null, __('Esta seguro que desea eliminar # %s?', $docente['Docente']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
  	</div>
</body>

