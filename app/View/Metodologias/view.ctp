<div class="metodologias view">
<h2><?php echo __('Metodologia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($metodologia['Metodologia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($metodologia['Metodologia']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Metodologia'), array('action' => 'edit', $metodologia['Metodologia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Metodologia'), array('action' => 'delete', $metodologia['Metodologia']['id']), null, __('Are you sure you want to delete # %s?', $metodologia['Metodologia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metienerols'), array('controller' => 'metienerols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metienerol'), array('controller' => 'metienerols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Metienerols'); ?></h3>
	<?php if (!empty($metodologia['Metienerol'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Metodologia Id'); ?></th>
		<th><?php echo __('Rolmetodologia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($metodologia['Metienerol'] as $metienerol): ?>
		<tr>
			<td><?php echo $metienerol['metodologia_id']; ?></td>
			<td><?php echo $metienerol['rolmetodologia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'metienerols', 'action' => 'view', $metienerol['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'metienerols', 'action' => 'edit', $metienerol['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'metienerols', 'action' => 'delete', $metienerol['id']), null, __('Are you sure you want to delete # %s?', $metienerol['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Metienerol'), array('controller' => 'metienerols', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Metodologiaempresas'); ?></h3>
	<?php if (!empty($metodologia['Metodologiaempresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Metodologia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($metodologia['Metodologiaempresa'] as $metodologiaempresa): ?>
		<tr>
			<td><?php echo $metodologiaempresa['empresa_id']; ?></td>
			<td><?php echo $metodologiaempresa['metodologia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'metodologiaempresas', 'action' => 'view', $metodologiaempresa['empresa_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'metodologiaempresas', 'action' => 'edit', $metodologiaempresa['empresa_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'metodologiaempresas', 'action' => 'delete', $metodologiaempresa['empresa_id']), null, __('Are you sure you want to delete # %s?', $metodologiaempresa['empresa_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
