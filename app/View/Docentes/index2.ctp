<body>
    <div class="left">
       <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?></li>
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
    <?php //echo $this->Form->create();?>
    <?php //echo $this->Form->end();?>
		<h2><?php echo __('Docentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidoP'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidoM'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docentes as $docente): ?>
    <?php //Docentestudiantes?>
    <?php //echo $this->Form->create('Docentestudiantes',array('type' => 'file', 'action' => 'add2',$docente['Docente']['id']));?>
    <?php echo $this->Form->create('Docente', array('type' => 'file', 'action' => 'index2'));?>
    <?php //echo $this->Form->create('Docentestudiantes');?>
	<tr>
		<td><?php echo h($docente['Docente']['id']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['apellidoP']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['apellidoM']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['User']['username'], array('controller' => 'users', 'action' => 'view', $docente['User']['id'])); ?>
		</td>
		<td class="actions">
        
        	<?php //echo $this->Form->radio('radio',array($docente['Docente']['id']));?>
            <?php //echo $this->Form->input('radio',array('type'=>'radio','options' => array('')));?>
            <?php /*echo $this->Form->input('RadioGroup', array(
 'div' => true,
 'label' => true,
 'type' => 'radio',
 'legend' => false,
 'options' => array('')
));*/ ?>
            
			<?php //echo $this->Form->input('checkbox',array('type'=>'checkbox', 'label'=>false));?>
            <?php echo $this->Form->input('doc',array('type'=>'hidden', 'value'=>$docente['Docente']['id']));?>
            	
             
			 
		<?php //echo $this->Form->end(__('Seleccionar'), array('controller' => 'docentes', 'action' => 'add2'), null, __('Seleccionar este docente?', $docente['Docente']['id'])); ?>
        
        <?php //echo $this->Form->end(__('Seleccionar'), array('controller' => 'docentestudiantes', 'action' => 'add2', $docente['Docente']['id'])); ?>
        <?php echo $this->Form->end(__('Seleccionar')); ?>
        
		<?php
		//echo $this->Form->end('Seleccionar');
	?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php
    //echo $arr1[0];
		//echo $arr1[1];
	
	?>
   
	<?php //echo $this->Form->end('Siguiente');?>
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

