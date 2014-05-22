<body>

    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Detallesesions'), array('controller' => 'detallesesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detallesesion'), array('controller' => 'detallesesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablalogs'), array('controller' => 'tablalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablalog'), array('controller' => 'tablalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuariorols'), array('controller' => 'usuariorols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorol'), array('controller' => 'usuariorols', 'action' => 'add')); ?> </li>
	</ul>       
    </div>
    
    <div class="right">
        <li><font size="4">Anuncios</font></li>   
    </div>
            
    <div class="view">
				<?php echo $this->Form->create('User'); ?>
            <fieldset>
                <legend><?php echo __('Add User'); ?></legend>
            	<?php
                echo $this->Form->input('username');
                echo $this->Form->input('password');
            	?>
            </fieldset>
        		<?php echo $this->Form->end(__('Submit')); ?>
  	</div>
 </body>


