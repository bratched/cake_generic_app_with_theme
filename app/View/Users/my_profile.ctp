<!--  start page-heading -->
<div id="page-heading">
    <h1><?php echo __('My Profile');?></h1>
</div>
<!-- end page-heading -->


<?php // echo $this->Session->flash(); ?>

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><?php echo $this->Html->image('../images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'))?></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><?php echo $this->Html->image('../images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'))?></th>
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
        <div class="step-dark-left"><a href="">View Profile</a></div>


        <div class="clear"></div>
    </div>
    <!--  end step-holder -->

    <!-- start id-form -->


    <table class="profile_details" border="0" cellpadding="0" cellspacing="0" width="500" align="center">
        <tbody>
        <tr>
            <td style="border-bottom:1px dotted #ccc;">
                <?php
                if($user['User']['profile_picture']!=null){
                    echo $this->Html->image('../files/profile_picture/thumb/large/'.$user['User']['profile_picture'],array('width'=>'150','height'=>'168'));
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
        </tr>

        <tr>
            <td><table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                    <tbody>
                    <tr>
                        <td width="29%"><strong>User Group</strong></td>
                        <td width="4%"><strong>:</strong></td>
                        <td width="67%"><?php echo $user['Role']['role']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>First Name</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['first_name']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>Middle Name</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['middle_name']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>Last Name</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['last_name']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>Username</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['username']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Gender</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['gender']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email Id</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['email_address']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>Date Of Birth</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['date_of_birth']; ?></td>
                    </tr>

                    <tr>
                        <td><strong>Address</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['address']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Created Date</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['created']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Modified Date</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $user['User']['modified']; ?></td>
                    </tr>
                    </tbody></table></td>
        </tr>
        </tbody>
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

                <div class="left">
                    <a href="">
                        <?php echo $this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'))?>
                    </a>
                </div>
                <div class="right">
                    <h5>View </h5>
                    <ul class="greyarrow">
                        <li><a class="popup" href="<?php  echo $this->Html->url(array('action'=>'changePassword'))?>">Change Password</a></li>
                        <li><a href="<?php  echo $this->Html->url('/update-profile')?>">update Profile </a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="lines-dotted-short"></div>

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


<script>
    $(document).ready(function(){
        $('.popup1').centerPopup();
    });

</script>








