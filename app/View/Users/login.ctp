<body>
    <div class="left">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		</ul>        
    </div>
            
    <div class="content">
		<h2>Ingresar</h2>
			<?php
                echo $this->Form->create();
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->end('Ingresar');
            ?>
  	</div>
</body>



