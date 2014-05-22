<body>

    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Integrantes'); ?></h3>
	<?php if (!empty($empresa['Integrante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresa['Integrante'] as $integrante): ?>
		<tr>
			<td><?php echo $integrante['empresa_id']; ?></td>
			<td><?php echo $integrante['estudiante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'integrantes', 'action' => 'view', $integrante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'integrantes', 'action' => 'edit', $integrante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'integrantes', 'action' => 'delete', $integrante['id']), null, __('Are you sure you want to delete # %s?', $integrante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Metodologiaempresas'); ?></h3>
	<?php if (!empty($empresa['Metodologiaempresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Metodologia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresa['Metodologiaempresa'] as $metodologiaempresa): ?>
		<tr>
			<td><?php echo $metodologiaempresa['empresa_id']; ?></td>
			<td><?php echo $metodologiaempresa['metodologia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'metodologiaempresas', 'action' => 'view', $metodologiaempresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'metodologiaempresas', 'action' => 'edit', $metodologiaempresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'metodologiaempresas', 'action' => 'delete', $metodologiaempresa['id']), null, __('Are you sure you want to delete # %s?', $metodologiaempresa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>        
    </div>
    
    <div class="right">
        <li><font size="4">Anuncios</font></li>   
    </div>
            
    <div class="view">
		<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrelargo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrelargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrecorto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrecorto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoN'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoP'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['User']['username'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
  	</div>
 </body>



<div class="empresas view">
<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrelargo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrelargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrecorto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrecorto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoN'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoP'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['User']['username'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('controller' => 'integrantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metodologiaempresas'), array('controller' => 'metodologiaempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Integrantes'); ?></h3>
	<?php if (!empty($empresa['Integrante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresa['Integrante'] as $integrante): ?>
		<tr>
			<td><?php echo $integrante['empresa_id']; ?></td>
			<td><?php echo $integrante['estudiante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'integrantes', 'action' => 'view', $integrante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'integrantes', 'action' => 'edit', $integrante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'integrantes', 'action' => 'delete', $integrante['id']), null, __('Are you sure you want to delete # %s?', $integrante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrante'), array('controller' => 'integrantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Metodologiaempresas'); ?></h3>
	<?php if (!empty($empresa['Metodologiaempresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Metodologia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresa['Metodologiaempresa'] as $metodologiaempresa): ?>
		<tr>
			<td><?php echo $metodologiaempresa['empresa_id']; ?></td>
			<td><?php echo $metodologiaempresa['metodologia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'metodologiaempresas', 'action' => 'view', $metodologiaempresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'metodologiaempresas', 'action' => 'edit', $metodologiaempresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'metodologiaempresas', 'action' => 'delete', $metodologiaempresa['id']), null, __('Are you sure you want to delete # %s?', $metodologiaempresa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Metodologiaempresa'), array('controller' => 'metodologiaempresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
