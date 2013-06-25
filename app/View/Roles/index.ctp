
<?php $this->Html->addCrumb('Role', '/roles'); ?>
<?php $this->Html->addCrumb('index', ''); ?>
<!--  start page-heading -->
<div id="page-heading">
    <h1>Roles</h1>
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
                        <?php echo $this->Form->create('Role', array('action' => 'index','inputDefaults' => array('div'=>false)))?>
                            <?php echo $this->Html->image('add_new.jpg', array( 'alt' => 'Add New ','url'=>array('action'=>'add'))); ?>

							<!--  start product-table ..................................................................................... -->
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                <tr>
                                    <th class="table-header-repeat" width="3%"><input id="check-all" type="checkbox"></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('role'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('user_count'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('user_id'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('updated_by'); ?></th>
                                    <th class="table-header-options line-left minwidth-1"><?php echo __('Actions'); ?></th>
								</tr>
								<?php foreach ($roles as $idx=>$role): ?>
								<tr>
									<td><?php echo $this->Form->checkbox('Role.'.$idx.'.id',array('class'=>'check-all','value'=>$role['Role']['id']));?></td>									<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
									<td><?php echo h($role['Role']['role']); ?>&nbsp;</td>
									<td><?php echo h($role['Role']['user_count']); ?>&nbsp;</td>
									<td><?php echo h($role['Role']['created']); ?>&nbsp;</td>
									<td><?php echo h($role['Role']['modified']); ?>&nbsp;</td>
									<td><?php echo $this->Html->link($role['User']['username'], array('controller' => 'users', 'action' => 'view', $role['User']['id'])); ?></td>
									<td><?php echo h($role['Role']['updated_by']); ?>&nbsp;</td>
									<td class="options-width">
										<?php echo $this->Html->link('', array('action' => 'view', $role['Role']['id']),array('class' => 'icon-5 info-tooltip','title'=>__('View'))); ?>
										<?php echo $this->Html->link('', array('action' => 'edit', $role['Role']['id']),array('class' => 'icon-1 info-tooltip','title'=>__('Edit'))); ?>
										<?php echo $this->Form->postLink('', array('action' => 'delete', $role['Role']['id']), array('class' => 'icon-2 info-tooltip','title'=>__('Delete')), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?>
									</td>
								</tr>
								<?php endforeach; ?>
								<?php if(empty($roles)){ ?>
									<tr><td colspan='10' style='text-align:center'>No records found</td></tr>
								<?php } ?>
							</table>
						</form>
                        <div id="paginate-bulk-actions">
                            <div id="bulk-action-holder">
                                <?php echo $this->element('bulk', array('options' => array('delete'=>__('Delete')))); ?>
                            </div>
                            <div  id="pagination-holder">
                                <p style="float:right;">
                                    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));	?>
                                </p>
                                <div class="paging" style="float:right;">
                                    <?php
										 echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
										 echo $this->Paginator->numbers(array('separator' => ''));
										 echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
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
	