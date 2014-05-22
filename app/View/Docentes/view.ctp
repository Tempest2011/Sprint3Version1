<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente'), array('action' => 'edit', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente'), array('action' => 'delete', $docente['Docente']['id']), null, __('Are you sure you want to delete # %s?', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
    </div>
            
    <div class="content">
		<h2><?php echo __('Docente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoP'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoM'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoM']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docente['User']['username'], array('controller' => 'users', 'action' => 'view', $docente['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
  	</div>
</body>


<?php /*?><div class="docentes view">
<h2><?php echo __('Docente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoP'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoM'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoM']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docente['User']['username'], array('controller' => 'users', 'action' => 'view', $docente['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div><?php */?>
<?php /*?><div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente'), array('action' => 'edit', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente'), array('action' => 'delete', $docente['Docente']['id']), null, __('Are you sure you want to delete # %s?', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('controller' => 'docentestudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('controller' => 'docentestudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div><?php */?>
<?php /*?><div class="related">
	<h3><?php echo __('Related Anuncios'); ?></h3>
	<?php if (!empty($docente['Anuncio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Fechacreacion'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Fechafin'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docente['Anuncio'] as $anuncio): ?>
		<tr>
			<td><?php echo $anuncio['id']; ?></td>
			<td><?php echo $anuncio['nombre']; ?></td>
			<td><?php echo $anuncio['fechacreacion']; ?></td>
			<td><?php echo $anuncio['fecha']; ?></td>
			<td><?php echo $anuncio['fechafin']; ?></td>
			<td><?php echo $anuncio['docente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'anuncios', 'action' => 'view', $anuncio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'anuncios', 'action' => 'edit', $anuncio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'anuncios', 'action' => 'delete', $anuncio['id']), null, __('Are you sure you want to delete # %s?', $anuncio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Anuncio'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docentestudiantes'); ?></h3>
	<?php if (!empty($docente['Docentestudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Estudiantes Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docente['Docentestudiante'] as $docentestudiante): ?>
		<tr>
			<td><?php echo $docentestudiante['docente_id']; ?></td>
			<td><?php echo $docentestudiante['estudiantes_id']; ?></td>
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
	<h3><?php echo __('Related Evaluacions'); ?></h3>
	<?php if (!empty($docente['Evaluacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Porcentaje'); ?></th>
		<th><?php echo __('Asignacions Id'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docente['Evaluacion'] as $evaluacion): ?>
		<tr>
			<td><?php echo $evaluacion['id']; ?></td>
			<td><?php echo $evaluacion['fecha']; ?></td>
			<td><?php echo $evaluacion['comentario']; ?></td>
			<td><?php echo $evaluacion['porcentaje']; ?></td>
			<td><?php echo $evaluacion['asignacions_id']; ?></td>
			<td><?php echo $evaluacion['docente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'evaluacions', 'action' => 'view', $evaluacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'evaluacions', 'action' => 'edit', $evaluacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'evaluacions', 'action' => 'delete', $evaluacion['id']), null, __('Are you sure you want to delete # %s?', $evaluacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Telefonos'); ?></h3>
	<?php if (!empty($docente['Telefono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docente['Telefono'] as $telefono): ?>
		<tr>
			<td><?php echo $telefono['id']; ?></td>
			<td><?php echo $telefono['numero']; ?></td>
			<td><?php echo $telefono['docente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'telefonos', 'action' => 'view', $telefono['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'telefonos', 'action' => 'edit', $telefono['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'telefonos', 'action' => 'delete', $telefono['id']), null, __('Are you sure you want to delete # %s?', $telefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div><?php */?>
