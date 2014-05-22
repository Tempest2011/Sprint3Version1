<div class="integrantes view">
<h2><?php echo __('Integrante'); ?></h2>
	<dl>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($integrante['Empresa']['nombrelargo'], array('controller' => 'empresas', 'action' => 'view', $integrante['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($integrante['Estudiante']['nombre'], array('controller' => 'estudiantes', 'action' => 'view', $integrante['Estudiante']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Integrante'), array('action' => 'edit', $integrante['Integrante']['empresa_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Integrante'), array('action' => 'delete', $integrante['Integrante']['empresa_id']), null, __('Are you sure you want to delete # %s?', $integrante['Integrante']['empresa_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
