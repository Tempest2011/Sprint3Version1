<div class="docentestudiantes view">
<h2><?php echo __('Docentestudiante'); ?></h2>
	<dl>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docentestudiante['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $docentestudiante['Docente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docentestudiante['Estudiante']['nombre'], array('controller' => 'estudiantes', 'action' => 'view', $docentestudiante['Estudiante']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docentestudiante'), array('action' => 'edit', $docentestudiante['Docentestudiante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docentestudiante'), array('action' => 'delete', $docentestudiante['Docentestudiante']['id']), null, __('Are you sure you want to delete # %s?', $docentestudiante['Docentestudiante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentestudiantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
