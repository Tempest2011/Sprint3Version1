<body>

    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>        
    </div>
    
    <div class="right">
        <li><font size="4">Anuncios</font></li>   
    </div>
            
    <div class="view">
		<?php echo $this->Form->create('Empresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Empresa'); ?></legend>
	<?php
		echo $this->Form->input('nombrelargo');
		echo $this->Form->input('nombrecorto');
		echo $this->Form->input('logoN');
		echo $this->Form->input('logoP');
		echo $this->Form->input('correo');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
  	</div>
 </body>


