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
   
    <?php echo $this->Form->create('Docentestudiante',array('type' => 'file'));?>
    <?php echo $this->Form->input('idd', array('type'=>'hidden', 'value'=>$docid));?>
    <?php //echo $this->Form->end();?>
		<h2><?php echo __('Agregar estudiantes a la grupo empresa:'); ?></h2>
        
        <?php
			//echo $this->Form->create('Docentestudiante',array('type' => 'put'));
    		echo $this->Form->input('text', array('type'=>'text', 'label'=>'Buscar:','default'=>'aaa'));
			//echo $this->Form->button('buscar', array('label'=>'Buscar', 'action'=>'buscar'));
			echo $this->Form->button('buscar', array('label'=>'Buscar','action' => 'buscar', $docid));
			echo $this->Form->end();
		?>
        
         <?php //echo $this->Form->create('Docentestudiante',array('type' => 'file', 'action' => 'add2'));?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('docente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
    <?php //echo $docid;?>
	<?php foreach ($docentestudiantes as $docentestudiante): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($docentestudiante['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $docentestudiante['Docente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docentestudiante['Estudiante']['nombre'], array('controller' => 'estudiantes', 'action' => 'view', $docentestudiante['Estudiante']['id'])); ?>
		</td>
		<td class="actions">
        <?php //echo $this->Form->button(__('Seleccionar'), array('controller' => 'docentestudiantes', 'action' => 'add3')); ?>
			<?php /*?><?php echo $this->Html->link(__('View'), array('action' => 'view', $docentestudiante['Docentestudiante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docentestudiante['Docentestudiante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docentestudiante['Docentestudiante']['id']), null, __('Are you sure you want to delete # %s?', $docentestudiante['Docentestudiante']['id'])); ?><?php */?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php echo $this->Form->create('Docentestudiante',array('type' => 'put', 'action'=>'index'));?>
	<?php echo $this->Form->end('Finalizar', array('action' => 'index'));?>
    
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
    
    
    
    <h2><?php echo __('Lista de estudiantes agregados:'); ?></h2>
    <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'Docente'; ?></th>
			<th><?php echo 'Estudiante'; ?></th>
			
	</tr>
    
	<?php foreach ($listaestudiantes as $listaestudiante): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($listaestudiante['Estudiante']['nombre'], array('controller' => 'docentes', 'action' => 'view', $listaestudiante['Estudiante']['nombre'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($listaestudiante['Estudiante']['apellidoP'], array('controller' => 'estudiantes', 'action' => 'view', $listaestudiante['Estudiante']['apellidoP'])); ?>
		</td>
		<td class="actions">
        
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    
    
    
    
    
  	</div>
</body>





