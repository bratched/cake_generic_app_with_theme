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

<!--  start page-heading -->
<div id="page-heading">
    <h1><?php echo Inflector::camelize($pluralVar) ?> </h1>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
        <tr>
            <th rowspan="3" class="sized">
                <?php echo "<?php echo \$this->Html->image('../images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'));?>"; ?>
            </th>
            <th class="topleft"></th>
            <td id="tbl-border-top">&nbsp;</td>
            <th class="topright"></th>
            <th rowspan="3" class="sized">
                <?php echo "<?php echo \$this->Html->image('../images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'));?>";?>
            </th>
        </tr>
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
                                    <div class="step-dark-left"><a href="">View User Details</a></div>

                                    <div class="clear"></div>
                                </div>
                                <!--  end step-holder -->

								<!-- start id-form -->
                                <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
										<?php
										foreach ($fields as $field) {
											$isKey = false;
											if (!empty($associations['belongsTo'])) {
												foreach ($associations['belongsTo'] as $alias => $details) {
													if ($field === $details['foreignKey']) {
														$isKey = true;
													echo "<tr>\n\t\t\t\t\t\t\t<th><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></th>\n";
													echo "\t\t\t\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</td>\n\t\t\t\t\t<td></td>\n</tr>";
													break;
													}
												}
											}
											if ($isKey !== true) {
								echo "<tr>\n\t\t\t\t\t\t\t\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
											echo "\n\n\t\t\t\t\t\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n\n\t\t\t\t\t\t\t\t\t<td></td>\n</tr>\n";
											}
										}
										?>
                                   </table>
                                   <!-- end id-form  -->

                              </td>
                              <td>
                                   <!--  start related-activities -->
                                   <div id="related-activities">

                                        <!--  start related-act-top -->
                                        <div id="related-act-top">

                                            <?php echo "<?php echo \$this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'))";?>;?>
                                        </div>
                                        <!-- end related-act-top -->

                                        <!--  start related-act-bottom -->
                                        <div id="related-act-bottom">

                                            <!--  start related-act-inner -->
                                            <div id="related-act-inner">
                                                <!--
                                                <div class="left">
                                                                    <a href="">
                                                                        <?php echo "<?php echo \$this->Html->image('../images/forms/icon_plus.gif',array('width'=>'21','height'=>'21')); ?>";?>
                                                                    </a>
                                                                </div>
                                                <div class="right">
                                                    <h5>Add another product</h5>
                                                    Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elitsed do eiusmod tempor.
                                                    <ul class="greyarrow">
                                                        <li><a href="">Click here to visit</a></li>
                                                        <li><a href="">Click here to visit</a> </li>
                                                    </ul>
                                                </div>

                                                <div class="clear"></div>
                                                <div class="lines-dotted-short"></div>
                                            -->

                                                <div class="left">
                                                    <a href="">
                                                        <?php echo "<?php echo \$this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'));?>";?>
                                                    </a>
                                                </div>
                                                <div class="right">
                                                    <h5>Edit </h5>

                                                    <ul class="greyarrow">
                                                        <?php
																echo "\t\t<li><?php echo \$this->Html->link(__('Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
																echo "\t\t<li><?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?> </li>\n";
																echo "\t\t<li><?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?> </li>\n";
															
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
                                                <div class="clear"></div>
                                                <div class="lines-dotted-short"></div>
                                                
                                                <div class="right">
                                                    <h5>Delete </h5>

                                                    <ul class="greyarrow">
                                                         <?php echo "\t\t<li><?php echo \$this->Form->postLink(__('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n"; ?>
                                                    </ul>
                                                </div>

                                                <div class="clear"></div>
                                                <div class="lines-dotted-short"></div>


                                                <div class="clear"></div>
                                            </div>
                                            <!-- end related-act-inner -->
                                            <div class="clear"></div>

                                        </div>
                                        <!-- end related-act-bottom -->

                                  </div>
                                <!-- end related-activities -->
                            </td>
                         </tr>
                         <tr>
                            <td> <?php echo "<?php echo \$this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'));?>";?></td>
                            <td></td>
                        </tr>
                    </table>

                    <div class="clear"></div>
                </div>
                <!--  end content-table-inner  -->
            </td>
            <td id="tbl-border-right"></td>
        </tr>
        <tr>
            <th class="sized bottomleft"></th>
            <td id="tbl-border-bottom">&nbsp;</td>
            <th class="sized bottomright"></th>
        </tr>
    </table>

	









