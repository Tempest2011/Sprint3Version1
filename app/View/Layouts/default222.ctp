<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
		
	?>

</head>

<body>

	<div id="container">

		<!-- If you’d like some sort of menu to
		show up on all of your views, include it here -->
		
		<div id="header">

			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			<b><center><font size="6">Sistema TIS</font></center></b>
			<div id="menu">
            	<?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'home')).'|'; ?>
                <?php echo $this->Html->link('Fundeempresa', array('controller' => 'pages', 'action' => '')).'|'; ?>
                <?php echo $this->Html->link('Listas', array('controller' => 'pages', 'action' => 'lista')).'|'; ?>
            
            </div>
		</div>
		
				
		<div id="content">
        	<div style="text-align:right;">
            	<?php if($logged_in): ?>
                	Welcome <?php echo $current_user['username'];?>.
					<?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
                <?php else: ?>
                	<?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
                <?php endif; ?>
         	</div>
        
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
            
            
                     
            
            <!--div class="actions">
        		<li><a><font size="4">Acciones</font></a></li>  
        	</div>
        
        <!--div class="view">
        	<li><a><font size="4">Inicio2</font></a></li>  
        </div-->
        	
        
        
            <!--div class="left">
                    <li><a><font size="4">Inicio</font></a></li> 
                     <li><font size="4">Ingresar</font></li> 
                     <?php //echo $this->Form->create('User', array('type' => 'file', 'action' => 'add'));
					 	//echo $this->Form->input('User.id');
						//echo $this->Form->input('User.login', (array('label' => 'Login', 'type' => 'text', 'default' => 'jjj')));
						//echo $this->Form->input('User.login', (array('default' => 'jjj')));
						//echo $this->Form->input('User.password',  array('type' => 'password', 'label' => 'Password', 'default' => 'jj'));
						//echo $this->Form->end('Registrar');
					 ?>
                     
                     
                    <!--form action="funciones/controlador_sesion.php" method="post">
                        <table>
                            <tr>
                                <td>Login:</td>
                                <td><input type="text" name="login"/></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password"/></td>
                            </tr>
                        </table>
                        <input type="submit" value="Ingresar"/>
                    </form--> 
              <!--/div>
            
            <!--div class="right">
                <!--li><a><font size="4">Inicio2</font></a></li>
                <li><font size="4">Anuncios</font></li>   
            </div>
            
            
            <div class="view">
                <li><a><font size="4">Contenido</font></a></li>  
            </div-->
            
            

		</div>
        
        
        <div id="container">
        	
        
        </div>
        
        
				
		
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
        
        
		
		
		
		
	</div>
	<?php echo $this->element('sql_dump'); ?>
	
</body>

</html>
