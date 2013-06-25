<?php
/**
 *
 * PHP 5
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
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<?php echo "<?php \$this->Html->addCrumb('{$modelClass}', '/{$pluralVar}'); ?>\n";?>
<?php

    if($action=='add'){
        echo "<?php \$this->Html->addCrumb('add', ''); ?>\n";
    }else{
        echo "<?php \$this->Html->addCrumb('edit', ''); ?>\n";
    }
?>

<!--  start page-heading -->
<div id="page-heading">
  <h1><?php echo Inflector::camelize($pluralVar) ?></h1>
</div>
<!-- end page-heading -->


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<td id="tbl-border-left"></td>
		<td>
			<!--  start content-table-inner -->
			<div id="content-table-inner">

		   	    <table border="0" width="100%" cellpadding="0" cellspacing="0">
				    <tr valign="top">
				        <td>
                           <!--  start step-holder -->
                            <div id="step-holder">
                                <div class="step-no">1</div>
                                <div class="step-dark-left"><?php echo Inflector::camelize($action).' '. $modelClass?>  Details</div>
                                <div class="clear"></div>
                            </div>
                            <!--  end step-holder -->

                            <!-- start id-form -->
                            <?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
	                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
	                            	<tr>

                                        <td>
                                        <?php
                                                echo "<?php\n";
                                                foreach ($fields as $field) {
                                                    if (strpos($action, 'add') !== false && $field == $primaryKey) {
                                                        continue;
                                                    } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t echo \$this->Form->input('{$field}');\n";
                                                    }
                                                }
                                                if (!empty($associations['hasAndBelongsToMany'])) {
                                                    foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t echo \$this->Form->input('{$assocName}');\n";
                                                    }
                                                }
                                                echo "\t\t\t\t\t\t\t\t\t\t?>\n";
                                                ?>

                                        </td>

                                    </tr>

									<tr>

                                        <td valign="top">
                                            <input type="submit" value="" class="form-submit" />
                                            <input type="reset" value="" class="form-reset"  />
                                        </td>
                                    </tr>
								</table>
                           </form>
                           <!-- end id-form  -->
    	                </td>
	                    <td>
                             <!--  start related-activities -->
                             <div id="related-activities">
                                 <!--  start related-act-top -->
                                 <div id="related-act-top">
                                   <?php echo "<?php echo \$this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'));?> \n"; ?>
                                 </div>
                                 <!-- end related-act-top -->

                                 <!--  start related-act-bottom -->
                                 <div id="related-act-bottom">

                                    <!--  start related-act-inner -->
                                    <div id="related-act-inner">
                                        <div class="left">
                                            <a href="">
                                                <?php echo "<?php echo \$this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'));?> \n"; ?>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <h5>View </h5>
                                            <ul class="greyarrow">
                                            <?php if (strpos($action, 'add') === false):?>
    <li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
											<?php endif;?>
    <li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
                                                <?php
                                                $done = array();
                                                foreach ($associations as $type => $data) {
                                                    foreach ($data as $alias => $details) {
                                                        if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                                            echo "<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                                                            $done[] = $details['controller'];
                                                        }
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
			                        </div>
			                        <div class="clear"></div>
                                 </div>
                                 <!--  end related-act-bottom -->
                             </div>
                            <!--  end related-activities -->
                        </td>
                    </tr>
                    <tr>
                       <td> <?php echo "<?php echo \$this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'));?> "; ?></td>
                       <td></td>
                    </tr>
                </table>
                <div class="clear"></div>
            </div>
            <!--  end content-table-inner  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>

</table> 
                            
                            
                            
                            
                            
                            
                            
                            
                            
<?php /*                            
                            

<div class="<?php echo $pluralVar; ?> form">
<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
	<fieldset>
		<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->Form->input('{$field}');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->Form->input('{$assocName}');\n";
			}
		}
		echo "\t?>\n";
?>
	</fieldset>
<?php
	echo "<?php echo \$this->Form->end(__('Submit')); ?>\n";
?>
</div>
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>

<?php if (strpos($action, 'add') === false): ?>
		<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
<?php endif; ?>
		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
?>
	</ul>
</div>
*/ ?>