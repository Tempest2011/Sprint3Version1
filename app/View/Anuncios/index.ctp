<div class="content">
	<h2><?php echo __('Anuncios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha fin'); ?></th>
                        <th><?php echo $this->Paginator->sort('docentes_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($anuncios as $anuncio): ?>
	<tr>
		<td><?php echo h($anuncio['Anuncio']['id']); ?>&nbsp;</td>
		<td><?php echo h($anuncio['Anuncio']['nombre']); ?>&nbsp;</td>
                <td><?php echo h($anuncio['Anuncio']['fecha']); ?>&nbsp;</td>
                <td><?php echo h($anuncio['Anuncio']['fechafin']); ?>&nbsp;</td>
		<td><?php echo h($anuncio['Anuncio']['docentes_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $anuncio['Anuncio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $anuncio['Anuncio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $anuncio['Anuncio']['id']), null, __('Are you sure you want to delete # %s?', $anuncio['Anuncio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	</p>

</div>
</div>
