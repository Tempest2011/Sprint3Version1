<body>

    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>        
    </div>

            
    <div class="content">
    	<?php //print_r($company);
				echo $company;
		?>
		<h2><?php echo __('Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombrelargo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombrecorto'); ?></th>
			<?php /*?><th><?php echo $this->Paginator->sort('logoN'); ?></th>
			<th><?php echo $this->Paginator->sort('logoP'); ?></th><?php */?>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['id']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['nombrelargo']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['nombrecorto']); ?>&nbsp;</td>
		<?php /*?><td><?php echo h($empresa['Empresa']['logoN']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['logoP']); ?>&nbsp;</td><?php */?>
		<td><?php echo h($empresa['Empresa']['correo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresa['User']['username'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresa['Empresa']['id'])); ?>
            <?php if ($current_user['id'] == $empresa['Empresa']['user_id'] || $current_user['role_id'] == 1): ?>	
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?>
            <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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


