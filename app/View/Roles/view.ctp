
<!--  start page-heading -->
<div id="page-heading">
    <h1>Roles </h1>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
        <tr>
            <th rowspan="3" class="sized">
                <?php echo $this->Html->image('../images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'));?>            </th>
            <th class="topleft"></th>
            <td id="tbl-border-top">&nbsp;</td>
            <th class="topright"></th>
            <th rowspan="3" class="sized">
                <?php echo $this->Html->image('../images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'));?>            </th>
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
										<tr>
									<th><?php echo __('Id'); ?></th>


									<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>

									<td></td>
</tr>
<tr>
									<th><?php echo __('Role'); ?></th>


									<td><?php echo h($role['Role']['role']); ?>&nbsp;</td>

									<td></td>
</tr>
<tr>
									<th><?php echo __('User Count'); ?></th>


									<td><?php echo h($role['Role']['user_count']); ?>&nbsp;</td>

									<td></td>
</tr>
<tr>
									<th><?php echo __('Created'); ?></th>


									<td><?php echo h($role['Role']['created']); ?>&nbsp;</td>

									<td></td>
</tr>
<tr>
									<th><?php echo __('Modified'); ?></th>


									<td><?php echo h($role['Role']['modified']); ?>&nbsp;</td>

									<td></td>
</tr>
<tr>
							<th><?php echo __('User'); ?></th>
					<td>
			<?php echo $this->Html->link($role['User']['username'], array('controller' => 'users', 'action' => 'view', $role['User']['id'])); ?>
			&nbsp;
		</td>
					<td></td>
</tr><tr>
									<th><?php echo __('Updated By'); ?></th>


									<td><?php echo h($role['Role']['updated_by']); ?>&nbsp;</td>

									<td></td>
</tr>
                                   </table>
                                   <!-- end id-form  -->

                              </td>
                              <td>
                                   <!--  start related-activities -->
                                   <div id="related-activities">

                                        <!--  start related-act-top -->
                                        <div id="related-act-top">

                                            <?php echo $this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'));?>
                                        </div>
                                        <!-- end related-act-top -->

                                        <!--  start related-act-bottom -->
                                        <div id="related-act-bottom">

                                            <!--  start related-act-inner -->
                                            <div id="related-act-inner">
                                                <!--
                                                <div class="left">
                                                                    <a href="">
                                                                        <?php echo $this->Html->image('../images/forms/icon_plus.gif',array('width'=>'21','height'=>'21')); ?>                                                                    </a>
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
                                                        <?php echo $this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'));?>                                                    </a>
                                                </div>
                                                <div class="right">
                                                    <h5>Edit </h5>

                                                    <ul class="greyarrow">
                                                        		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>

                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="lines-dotted-short"></div>
                                                
                                                <div class="right">
                                                    <h5>Delete </h5>

                                                    <ul class="greyarrow">
                                                         		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), null, __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
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
                            <td> <?php echo $this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'));?></td>
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

	









