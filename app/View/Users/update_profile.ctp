<!--  start page-heading -->
<div id="page-heading">
    <h1><?php echo __('Add User ');?></h1>
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
                                <div class="step-dark-left"><a href="">Add User Details</a></div>
                                <div class="clear"></div>
                            </div>
                            <!--  end step-holder -->

                            <!-- start id-form -->
                            <?php echo $this->Form->create('User',array('type'=>'file','inputDefaults' => array('div' => false,'label'=>false)));?>
                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                <tr>
                                    <th valign="top">User Group <span class="required">*</span></th>
                                    <td >
                                        <?php
                                             echo $this->request->data['Role']['role'];
                                             echo $this->Form->hidden('Role.role');
                                        ?>

                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Update Profile Pic</th>
                                    <td>
                                        <?php
                                            echo $this->Form->hidden('old_profile_picture',array('value'=>$this->request->data['User']['profile_picture']));
                                            echo $this->Form->input('profile_picture',array(
                                                'type'=>'file',
                                                'maxlength'=>25,
                                                'class'=>'inp-form'
                                            ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>First Name<span class="required">*</span></th>
                                    <td>
                                        <?php
                                        echo $this->Form->input('id');
                                        echo $this->Form->input('first_name',array(
                                            'type'=>'text',
                                            'maxlength'=>25,
                                            'class'=>'inp-form'
                                        ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Middle Name</th>
                                    <td>
                                        <?php
                                        echo $this->Form->input('middle_name',array(
                                            'type'=>'text',
                                            'maxlength'=>25,
                                            'class'=>'inp-form'
                                        ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Last Name<span class="required">*</span></th>
                                    <td>
                                        <?php
                                        echo $this->Form->input('last_name',array(
                                            'type'=>'text',
                                            'maxlength'=>25,
                                            'class'=>'inp-form'
                                        ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Date Of Birth<span class="required">*</span></th>
                                    <td >
                                        <?php
                                        echo $this->Form->input('date_of_birth',array(
                                            'type'=>'text',
                                            'class'=>'datepicker inp-form'
                                        ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Gender<span class="required">*</span></th>
                                    <td >
                                        <?php
                                        $gender=array('Male' => 'Male', 'Female' => 'Female');
                                        echo $this->Form->input('gender', array(
                                            'options' => $gender,
                                            'type'=>'radio',
                                            'legend'=>false,


                                        ));

                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Email Address<span class="required">*</span></th>
                                    <td >
                                        <?php
                                        echo $this->Form->input('email_address',array(
                                            'type'=>'email',
                                            'placeholder'=>'enter valid email address',
                                            'maxlength'=>50,

                                            'class'=>'inp-form'
                                        ));
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Address </th>
                                    <td >
                                        <?php
                                        echo $this->Tinymce->input('User.address');
                                        ?>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>&nbsp;</th>
                                    <td valign="top">

                                        <input type="submit" value="" class="form-submit" />
                                        <input type="reset" value="" class="form-reset"  />
                                    </td>
                                    <td></td>
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
                                                <li><a href="<?php  echo $this->Html->url('/my-profile')?>">View Profile </a></li>
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

</table>
