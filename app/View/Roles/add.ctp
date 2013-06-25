
<?php $this->Html->addCrumb('Role', '/roles'); ?>
<?php $this->Html->addCrumb('add', ''); ?>

<!--  start page-heading -->
<div id="page-heading">
  <h1>Roles</h1>
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
                                <div class="step-dark-left">Add Role  Details</div>
                                <div class="clear"></div>
                            </div>
                            <!--  end step-holder -->

                            <!-- start id-form -->
                            <?php echo $this->Form->create('Role'); ?>
	                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
	                            	<tr>

                                        <td>
                                        <?php
											 echo $this->Form->input('role');
											
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
                                   <?php echo $this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'));?> 
                                 </div>
                                 <!-- end related-act-top -->

                                 <!--  start related-act-bottom -->
                                 <div id="related-act-bottom">

                                    <!--  start related-act-inner -->
                                    <div id="related-act-inner">
                                        <div class="left">
                                            <a href="">
                                                <?php echo $this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'));?> 
                                            </a>
                                        </div>
                                        <div class="right">
                                            <h5>View </h5>
                                            <ul class="greyarrow">
                                                <li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
                                                <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
												<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
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
                       <td> <?php echo $this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'));?> </td>
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
                            
                            
                            
                            
                            
                            
                            
                            
                            
