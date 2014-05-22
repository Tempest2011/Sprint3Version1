<div class="tablalogs view">
<h2><?php echo __('Tablalog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tabla'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['tabla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datoviejo'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['datoviejo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datonuevo'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['datonuevo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operacion'); ?></dt>
		<dd>
			<?php echo h($tablalog['Tablalog']['operacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tablalog['User']['username'], array('controller' => 'users', 'action' => 'view', $tablalog['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tablalog'), array('action' => 'edit', $tablalog['Tablalog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tablalog'), array('action' => 'delete', $tablalog['Tablalog']['id']), null, __('Are you sure you want to delete # %s?', $tablalog['Tablalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablalogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablalog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
