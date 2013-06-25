    <!--  start page-heading -->
    <div id="page-heading">
        <h1><?php echo __('View User ');?>
        </h1>
    </div>
    <!-- end page-heading -->



    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
        <tr>
            <th rowspan="3" class="sized">
                <?php echo $this->Html->image('../images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'))?>
            </th>
            <th class="topleft"></th>
            <td id="tbl-border-top">&nbsp;</td>
            <th class="topright"></th>
            <th rowspan="3" class="sized">
                <?php echo $this->Html->image('../images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'))?>
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
                                        <tr>

                                            <td>
                                                <?php
                                                if($user['User']['profile_picture']!=null){
                                                    echo $this->Html->image('../uploads/user_profile_images/'.$user['User']['profile_image'],array('width'=>'150','height'=>'168'));
                                                }
                                                if($user['User']['profile_picture']==null){
                                                    if($user['User']['gender']=='Male'){
                                                        echo $this->Html->image('blank_image_male.jpeg',array('width'=>'150','height'=>'168'));
                                                    }else{
                                                        echo $this->Html->image('blank_image_female.jpeg',array('width'=>'150','height'=>'168'));
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th valign="top">User Group :</th>
                                            <td><?php echo $user['Role']['role']; ?> </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                           <th>Username</th>
                                           <td><?php echo $user['User']['username']; ?></td>
                                           <td></td>
                                        </tr>

                                        <tr>
                                            <th>First Name</th>
                                            <td><?php echo $user['User']['first_name']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Middle Name</th>
                                            <td><?php echo $user['User']['middle_name']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Last Name</th>
                                            <td><?php echo $user['User']['last_name']; ?></td>
                                            <td></td>
                                        </tr>


                                        <tr>
                                            <th>Gender</th>
                                            <td><?php echo $user['User']['gender']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Email Address : </th>
                                            <td><?php echo $user['User']['email_address']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Date Of Birth : </th>
                                            <td><?php echo $user['User']['date_of_birth']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Address : </th>
                                            <td><?php echo $user['User']['address']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Created : </th>
                                            <td><?php echo $user['User']['created']; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>Modified : </th>
                                            <td><?php echo $user['User']['modified']; ?></td>
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

                                            <?php echo $this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'))?>
                                        </div>
                                        <!-- end related-act-top -->

                                        <!--  start related-act-bottom -->
                                        <div id="related-act-bottom">

                                            <!--  start related-act-inner -->
                                            <div id="related-act-inner">
                                                <!--
                                                <div class="left">
                                                                    <a href="">
                                                                        <?php echo $this->Html->image('../images/forms/icon_plus.gif',array('width'=>'21','height'=>'21'))?>
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
                                                        <?php echo $this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'))?>
                                                    </a>
                                                </div>
                                                <div class="right">
                                                    <h5>Edit </h5>

                                                    <ul class="greyarrow">
                                                        <li><a href="<?php  echo $this->Html->url(array('action'=>'edit',$user['User']['id']))?>">Edit User Details</a></li>

                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="lines-dotted-short"></div>
                                                <div class="left">
                                                    <a href="">
                                                        <?php echo  $this->Html->image('../images/forms/icon_minus.gif',array('width'=>'21','height'=>'21')); ?>
                                                    </a>
                                                </div>
                                                <div class="right">
                                                    <h5>Delete </h5>

                                                    <ul class="greyarrow">
                                                        <li><?php echo $this->Html->link(__('Delete User Details'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure to delete User Groups')); ?> </li>
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
                            <td> <?php echo $this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'))?></td>
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

