<?php $this->Html->addCrumb('Users', '/users'); ?>
<?php $this->Html->addCrumb('index', ''); ?>

<!--  start page-heading -->
<div id="page-heading">
  <h1><?php echo __('Users');?></h1>
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
                        <form id="mainform" action="">
                            <?php echo $this->Html->image('add_new.jpg', array(
                                                        'alt' => 'Add New ',
                                                        'url'=>array('action'=>'add')
                                                   ));
                            ?>

                            <!--  start product-table ..................................................................................... -->
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                <tr>
                                    <th class="table-header-repeat" width="3%"><input id="check-all" type="checkbox"></th>
                                    <th class="table-header-repeat line-left ">
                                        <?php echo $this->Paginator->sort('first_name'); ?>
                                    </th>
                                    <th class="table-header-repeat line-left "><?php echo $this->Paginator->sort('is_active'); ?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('role_id');?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('last_name');?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('first_name');?></th>
                                    <th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('gender');?></th>
                                    <th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('username');?></th>
                                    <th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('email_address');?></a></th>
                                    <th class="table-header-options line-left minwidth-1">Options</th>
                                </tr>
                                <?php foreach ($users as $user):  ?>
                                <tr>
                                    <td><input  type="checkbox"/></td>
                                    <td>
                                        <?php
                                        if($user['User']['profile_picture']!=null){
                                            echo $this->Html->image('../files/profile_picture/thumb/small/'.$user['User']['profile_picture']);
                                        }
                                        if($user['User']['profile_picture']==null){
                                            if($user['User']['gender']=='Male'){
                                                echo $this->Html->image('blank_image_male.jpeg',array('width'=>'25','height'=>'30'));
                                            }else{
                                                echo $this->Html->image('blank_image_female.jpeg',array('width'=>'25','height'=>'30'));
                                            }
                                        }
                                        ?>
                                    </td>

                                    <td><?php
                                        if($user['User']['is_active']){
                                            echo $this->Html->image('active.png');
                                        }else{
                                            echo $this->Html->image('in-active.png');
                                        } ?>&nbsp;
                                    </td>
                                    <td><?php echo h($user['Role']['role']); ?></td>
                                    <td><?php echo h($user['User']['last_name']); ?></td>
                                    <td><?php echo h($user['User']['first_name']); ?></td>
                                    <td><?php echo h($user['User']['gender']); ?></td>
                                    <td><?php echo h($user['User']['username']); ?></td>
                                    <td><?php echo h($user['User']['email_address']); ?></td>
                                    <td class="options-width">

                                           <?php
                                           		  echo $this->Html->link('', array('action'=>'view',$user['User']['id']), array('class' => 'icon-5 info-tooltip','title'=>'View'));	
                                                  echo $this->Html->link('', array('action'=>'edit',$user['User']['id']), array('class' => 'icon-1 info-tooltip','title'=>'Edit'));
                                                  if(AuthComponent::user('id')!=$user['User']['id'])
                                                  echo $this->Form->postLink('', array('action' => 'delete', $user['User']['id']), array('class' => 'icon-2 info-tooltip','title'=>__('Delete')), __('Are you sure you want to delete # %s?', $user['User']['id']));
                                                  echo $this->Html->link('', array('action'=>'changePasswordAdmin',$user['User']['id']), array('class' => 'icon-8 info-tooltip popup','title'=>'Change password for this user'));
                                           ?>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                               <?php
                                  if(empty($users)){
                                    echo "<tr><td colspan='10' style='text-align:center;'>No records found</td></tr>";
                                  }
                                ?>
                            </table>
                        </form>   
                        <p style="float:right;">
                            <?php
                            echo $this->Paginator->counter(array(
                            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                            ));
                            ?>
                        </p>
                        <div class="paging" style="float:right;">

                            <?php
                                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                                    echo $this->Paginator->numbers(array('separator' => ''));
                                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                            ?>
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

        
       

