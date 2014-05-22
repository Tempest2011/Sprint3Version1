<div class="telefonos view">
<h2><?php echo __('Telefono'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($telefono['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $telefono['Docente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Telefono'), array('action' => 'edit', $telefono['Telefono']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Telefono'), array('action' => 'delete', $telefono['Telefono']['id']), null, __('Are you sure you want to delete # %s?', $telefono['Telefono']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
