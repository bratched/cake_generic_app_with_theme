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
<?php echo "<?php \$this->Html->addCrumb('index', ''); ?>\n";?>
<!--  start page-heading -->
<div id="page-heading">
    <h1><?php echo Inflector::camelize($pluralVar) ?></h1>
</div>
<!-- end page-heading -->

 <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	   <tr>
	  	   <td id="tbl-border-left"></td>
		   <td>
		       <!--  start content-table-inner ...................................................................... START -->
		       <div id="content-table-inner">

                    <!--  start table-content  -->
                    <div id="table-content">
                        <?php  echo "<?php echo \$this->Form->create('$modelClass', array('action' => 'index','inputDefaults' => array('div'=>false)))?>\n"; ?>
                            <?php  echo "<?php echo \$this->Html->image('add_new.jpg', array( 'alt' => 'Add New ','url'=>array('action'=>'add'))); ?>\n"; ?>

							<!--  start product-table ..................................................................................... -->
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                <tr>
                                    <th class="table-header-repeat" width="3%"><input id="check-all" type="checkbox"></th>
                  <?php foreach ($fields as $field): ?>
                  <th class="table-header-repeat line-left minwidth-1"><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                  <?php endforeach; ?>
                  <th class="table-header-options line-left minwidth-1"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
								</tr>
								<?php
                                echo "<?php foreach (\${$pluralVar} as \$idx=>\${$singularVar}): ?>\n";
                                echo "\t\t\t\t\t\t\t\t<tr>\n";
                                echo "\t\t\t\t\t\t\t\t\t<td><?php echo \$this->Form->checkbox('$modelClass.'.\$idx.'.id',array('class'=>'check-all','value'=>\${$singularVar}['{$modelClass}']['{$primaryKey}']));?></td>";
                                    foreach ($fields as $field) {

                                            $isKey = false;
                                            if (!empty($associations['belongsTo'])) {
                                                foreach ($associations['belongsTo'] as $alias => $details) {
                                                    if ($field === $details['foreignKey']) {
                                                        $isKey = true;
                                                        echo "\t\t\t\t\t\t\t\t\t<td><?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></td>\n";
                                                        break;
                                                    }
                                                }
                                            }
                                            if ($isKey !== true) {
                                                echo "\t\t\t\t\t\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                                            }
                                    }

                                        echo "\t\t\t\t\t\t\t\t\t<td class=\"options-width\">\n";
                                        echo "\t\t\t\t\t\t\t\t\t\t<?php echo \$this->Html->link('', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class' => 'icon-5 info-tooltip','title'=>__('View'))); ?>\n";
                                        echo "\t\t\t\t\t\t\t\t\t\t<?php echo \$this->Html->link('', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class' => 'icon-1 info-tooltip','title'=>__('Edit'))); ?>\n";
                                        echo "\t\t\t\t\t\t\t\t\t\t<?php echo \$this->Form->postLink('', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'icon-2 info-tooltip','title'=>__('Delete')), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                                        echo "\t\t\t\t\t\t\t\t\t</td>\n";
                                echo "\t\t\t\t\t\t\t\t</tr>\n";
								echo "\t\t\t\t\t\t\t\t<?php endforeach; ?>\n";
                                echo "\t\t\t\t\t\t\t\t<?php if(empty(\${$pluralVar})){ ?>";
                                echo "\n\t\t\t\t\t\t\t\t\t<tr><td colspan='10' style='text-align:center'>No records found</td></tr>";
                                echo "\n\t\t\t\t\t\t\t\t<?php } ?>\n";
								?>
							</table>
						</form>
                        <div id="paginate-bulk-actions">
                            <div id="bulk-action-holder">
                                <?php echo "<?php echo \$this->element('bulk', array('options' => array('delete'=>__('Delete')))); ?>\n";?>
                            </div>
                            <div  id="pagination-holder">
                                <p style="float:right;">
                                    <?php echo "<?php echo \$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));	?>\n"; ?>
                                </p>
                                <div class="paging" style="float:right;">
                                    <?php
                                    echo "<?php\n";
                                                echo "\t\t\t\t\t\t\t\t\t\t echo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
                                                echo "\t\t\t\t\t\t\t\t\t\t echo \$this->Paginator->numbers(array('separator' => ''));\n";
                                                echo "\t\t\t\t\t\t\t\t\t\t echo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
                                        echo "\t\t\t\t\t\t\t\t\t?>\n";
                                ?>
                                </div>
                            </div>
                        </div>
						<!--  end product-table................................... -->
                        
                    </div>
                    <!--  end content-table  -->

  		            <div class="clear"></div>
   	           </div>
		       <!--  end content-table-inner ............................................END  -->
		   </td>
		   <td id="tbl-border-right"></td>
	   </tr>
  </table>
	