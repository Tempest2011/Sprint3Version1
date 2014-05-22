<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Docentestudiante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
    </div>
            
    <div class="content">
    <?php echo $this->Form->create('Docentestudiante', array('type'=>'file', 'action'=>'buscar2'));?>
		<h2><?php echo __('Agregar estudiantes:'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<?php /*?><th><?php //echo $this->Paginator->sort('docente_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('estudiante_id'); ?></th><?php */?>
            <th><?php echo'Docente'; ?></th>
			<th><?php echo 'Nombre Estudiante'; ?></th>
            <th><?php echo 'Apellido Estudiante'; ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docentestudiantes as $docentestudiante): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($docentestudiante['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $docentestudiante['Docente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docentestudiante['Estudiante']['nombre'], array('controller' => 'estudiantes', 'action' => 'view', $docentestudiante['Estudiante']['id'])); ?>
		</td>
        <td>
			<?php echo $this->Html->link($docentestudiante['Estudiante']['apellidoP'], array('controller' => 'estudiantes', 'action' => 'view', $docentestudiante['Estudiante']['id'])); ?>
		</td>
		<td class="actions">
        <?php
        	// echo $this->Form->button(__('Agregar'), array('controller' => 'docentestudiantes', 'action' => 'add2')); 
			 echo $this->Form->button(__('Agregar')); 
		?>
			<?php /*?><?php echo $this->Html->link(__('View'), array('action' => 'view', $docentestudiante['Docentestudiante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docentestudiante['Docentestudiante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docentestudiante['Docentestudiante']['id']), null, __('Are you sure you want to delete # %s?', $docentestudiante['Docentestudiante']['id'])); ?><?php */?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php 
	//$this->params['pass'][1];
	echo $this->Form->input('id2', array('type'=>'hidden', 'value'=>$docentestudiante['Docente']['id']));
	echo $this->Form->input('id3', array('type'=>'hidden', 'value'=>$docentestudiante['Estudiante']['id']));
	echo $this->Form->end();?>
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
</body>





