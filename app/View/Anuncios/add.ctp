<div class="container">

<div class="left">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lisa de anuncios'), array('action' => 'index')); ?></li>
		<!--<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> 
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li></li>-->
	</ul>
</div>

<div class="content">
<?php echo $this->Form->create('Anuncio'); ?>
	<fieldset>
		<legend><?php echo __('Add Anuncio'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
                echo $this->Form->input('fecha', array( 'label' => 'fecha inicio'
                            , 'dateFormat' => 'DMY'
                            , 'minYear' => date('Y')
                            , 'maxYear' => date('Y')));
                echo $this->Form->input('fechafin', array( 'label' => 'fecha final'
                            , 'dateFormat' => 'DMY'
                            , 'minYear' => date('Y')
                            , 'maxYear' => date('Y')));
		echo $this->Form->input('docentes_id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
   </div>