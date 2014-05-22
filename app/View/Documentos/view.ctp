<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documento'), array('action' => 'edit', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Documento'), array('action' => 'delete', $documento['Documento']['id']), null, __('Are you sure you want to delete # %s?', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>       
    </div>
            
    <div class="content">
          <h2><?php echo __('Documento'); ?></h2>
      <dl>
          <dt><?php echo __('Id'); ?></dt>
          <dd>
              <?php echo h($documento['Documento']['id']); ?>
              &nbsp;
          </dd>
          <dt><?php echo __('DocumentoN'); ?></dt>
          <dd>
              <?php echo h($documento['Documento']['documentoN']); ?>
              &nbsp;
          </dd>
          <dt><?php echo __('DocumentoPath'); ?></dt>
          <dd>
              <?php echo h($documento['Documento']['documentoPath']); ?>
              &nbsp;
          </dd>
          <dt><?php echo __('User'); ?></dt>
          <dd>
              <?php echo $this->Html->link($documento['User']['username'], array('controller' => 'users', 'action' => 'view', $documento['User']['id'])); ?>
              &nbsp;
          </dd>
          <dt> <?php echo $this->Upload->view('Documento', $documento['Documento']['id']); ?> &nbsp; </dt>
          
          
          


</dt> <dd> <a href="/sprint2/ajax_multi_upload/uploads/delete/QzpceGFtcHBcaHRkb2…nJvb3RcXGZpbGVzXERvY3VtZW50by8xL2hvcmFyaW9zIEktMjAxNC5wZGY=/"> <img alt="Delete" src="/sprint2/ajax_multi_upload/img/delete.png"></img> </a> <img src="/sprint2/ajax_multi_upload/img/fileicons/pdf.png"></img> <a href="/sprint2/files/Documento/1/horarios I-2014.pdf">

horarios I-2014.pdf

</a>

(50.42 KB)

<br></br> </dd> <br></br> <br></br> <link href="/sprint2/ajax_multi_upload/css/fileuploader.css" type="text/css" rel="stylesheet"></link> <script type="text/javascript" src="/sprint2/ajax_multi_upload/js/fileuploader.js"></script> <div class="AjaxMultiUploadDocumento___1" name="AjaxMultiUpload"> <div class="qq-uploader"> <div class="qq-upload-drop-area" style="display: none;"> <span>

<?php /*?>Drop files here to upload

</span> </div> <div class="qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">

Seleccionar Archivo

<input type="file" multiple="multiple" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial…8px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;"></input> </div> <ul class="qq-upload-list"></ul> </div> </div> <script type="text/javascript" src="/sprint2/ajax_multi_upload/js/fileuploader.js"></script> <script></script> <div class="submit"> <input type="submit" value="Guardar"></input> </div><?php */?>
          
          
      </dl>
  	</div>
</body>



