<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
    

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Documento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Documento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>       
    </div>
            
    <div class="content">
		<?php echo $this->Form->create('Documento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Documento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('documentoN');
		echo $this->Form->input('documentoPath');
		//echo $this->Form->input('user_id');
		echo $this->Upload->edit('Documento', $this->Form->fields['Documento.id']);
	?>
    
    
    <dt>

Files

</dt> <dd> <a href="/sprint2/ajax_multi_upload/uploads/delete/QzpceGFtcHBcaHRkb2…nJvb3RcXGZpbGVzXERvY3VtZW50by8xL2hvcmFyaW9zIEktMjAxNC5wZGY=/"> <img alt="Delete" src="/sprint2/ajax_multi_upload/img/delete.png"></img> </a> <img src="/sprint2/ajax_multi_upload/img/fileicons/pdf.png"></img> <a href="/sprint2/files/Documento/1/horarios I-2014.pdf">

horarios I-2014.pdf

</a>

(50.42 KB)

<br></br> </dd> <br></br> <br></br> <link href="/sprint2/ajax_multi_upload/css/fileuploader.css" type="text/css" rel="stylesheet"></link> <script type="text/javascript" src="/sprint2/ajax_multi_upload/js/fileuploader.js"></script> <div class="AjaxMultiUploadDocumento___1" name="AjaxMultiUpload"> <div class="qq-uploader"> <div class="qq-upload-drop-area" style="display: none;"> <span>

Drop files here to upload

</span> </div> <div class="qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">

Seleccionar Archivo

<input type="file" multiple="multiple" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial…8px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;"></input> </div> <ul class="qq-upload-list"></ul> </div> </div> <script type="text/javascript" src="/sprint2/ajax_multi_upload/js/fileuploader.js"></script> <script></script> <div class="submit"> <input type="submit" value="Guardar"></input> </div> </fieldset>
    
    
	</fieldset>
    <?php //echo $this->Upload->edit('Documento', $this->Form->fields['Documento.id']);?>
    
  	</div>
</body>
