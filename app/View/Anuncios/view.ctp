<div class="container">
    <div class="left"></div>
<div class="content">
<h2><?php echo __('Anuncio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de inicio'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['fecha']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Fecha final'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['fechafin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente Id'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['docentes_id']); ?>
			&nbsp;
		</dd>
		<?php echo $this->Upload->view('Anuncio',$anuncio['Anuncio']['id']); ?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anuncio'), array('action' => 'edit', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anuncio'), array('action' => 'delete', $anuncio['Anuncio']['id']), null, __('Are you sure you want to delete # %s?', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('action' => 'add')); ?> </li>
		</ul>
</div>
</div>