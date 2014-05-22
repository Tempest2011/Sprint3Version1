<div class="estudiantes view">
<h2><?php echo __('Estudiante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoP'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['apellidoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoM'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['apellidoM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codsis'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['codsis']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudiante'), array('action' => 'edit', $estudiante['Estudiante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudiante'), array('action' => 'delete', $estudiante['Estudiante']['id']), null, __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asignacions'), array('controller' => 'asignacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asignacions'); ?></h3>
	<?php if (!empty($estudiante['Asignacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Tarea Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiante['Asignacion'] as $asignacion): ?>
		<tr>
			<td><?php echo $asignacion['id']; ?></td>
			<td><?php echo $asignacion['estudiante_id']; ?></td>
			<td><?php echo $asignacion['tarea_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asignacions', 'action' => 'view', $asignacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asignacions', 'action' => 'edit', $asignacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asignacions', 'action' => 'delete', $asignacion['id']), null, __('Are you sure you want to delete # %s?', $asignacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asignacion'), array('controller' => 'asignacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docentestudiantes'); ?></h3>
	<?php if (!empty($estudiante['Docentestudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiante['Docentestudiante'] as $docentestudiante): ?>
		<tr>
			<td><?php echo $docentestudiante['docente_id']; ?></td>
			<td><?php echo $docentestudiante['estudiante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docentestudiantes', 'action' => 'view', $docentestudiante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docentestudiantes', 'action' => 'edit', $docentestudiante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docentestudiantes', 'action' => 'delete', $docentestudiante['id']), null, __('Are you sure you want to delete # %s?', $docentestudiante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Integrantes'); ?></h3>
	<?php if (!empty($estudiante['Integrante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiante['Integrante'] as $integrante): ?>
		<tr>
			<td><?php echo $integrante['empresa_id']; ?></td>
			<td><?php echo $integrante['estudiante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'integrantes', 'action' => 'view', $integrante['empresa_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'integrantes', 'action' => 'edit', $integrante['empresa_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'integrantes', 'action' => 'delete', $integrante['empresa_id']), null, __('Are you sure you want to delete # %s?', $integrante['empresa_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
