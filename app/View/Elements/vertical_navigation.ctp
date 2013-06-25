 <div id="Accordion1" class="Accordion" tabindex="0">

  <?php  if($this->Session->read('slug') != 'Customer' && $this->Session->read('slug') != 'Supplier'){?>
 				<div class="AccordionPanel">
		          <!--tab one start-->
                    <div class="AccordionPanelTab">My Profile
                        <span style="left:10px;"><?php echo $this->Html->image('../images/icon/profile.png',array('width'=>'26','height'=>18));?></span>
                    </div>
                    <div class="AccordionPanelContent">
                        <div class="sub_tab_content">
                            <ul>
                                <li><?php echo $this->Html->link('View Profile',array('controller'=>'users','action'=>'myProfile'))?></li>
                                <li><?php echo $this->Html->link('Change Password',array('controller'=>'users','action'=>'changePassword'),array('class'=>'popup'))?></li>
                            </ul>
                        </div>
                    </div>


                </div>
			    <!--tab one end-->
		<?php } ?>	
			
                <div class="AccordionPanel">
				   <!--tab two start-->
                    <div class="AccordionPanelTab">Reports
                        <span><?php echo $this->Html->image('../images/icon/report.png',array('width'=>'16','height'=>21));?></span>
                    </div>
                    <div class="AccordionPanelContent">
                        <div class="sub_tab_content">
                            <ul>
                                <li><?php echo $this->Html->link('Non-conformance',array('controller'=>'Reports','action'=>'nciReport'))?></li>
                                <li><?php echo $this->Html->link('Document Control Index',array('controller'=>'Reports','action'=>'showPieChart'))?></li>
                                <li><?php echo $this->Html->link('Preventive Action Matrix',array('controller'=>'Reports','action'=>'parReport'))?></li>
                                <li><?php echo $this->Html->link('All Reports',array('controller'=>'Reports','action'=>'index'))?></li>
                            </ul>
                        </div>
                    </div>
                </div><!--tab two end-->
                
           <?php  if(($this->Session->read('slug') != 'Customer') && ($this->Session->read('slug') != 'Supplier')){?>     
                <div class="AccordionPanel"><!--tab three start-->
                  <div class="AccordionPanelTab">Record Control
				    <span><?php echo $this->Html->image('../images/icon/record.png',array('width'=>'18','height'=>16));?></span></div>
                  <div class="AccordionPanelContent">
                  <div class="sub_tab_content">
                    	<ul>
                        	<li><?php echo $this->Html->link('Soft Copy',array('controller'=>'records','action'=>'explorer'))?></li>
                        	<li><?php echo $this->Html->link('File Cabinet',array('controller'=>'FileCabinets','action'=>'index'))?></li>
                        </ul>
                    </div>
                  </div>
                </div><!--tab three endt-->
			
             <?php if($this->Session->read('slug')=='Super Admin'){ ?>    
                <!--tab four start-->
                <div class="AccordionPanel">
                   <div class="AccordionPanelTab">Upload File
				     <span><?php echo $this->Html->image('../images/icon/upload.png',array('width'=>'20','height'=>20));?></span>
				       </div>
                      <div class="AccordionPanelContent">
                        <div class="sub_tab_content">
                    	  <ul>
                        	<li><?php echo $this->Html->link('Upload Files',array('controller'=>'UploadFiles','action'=>'index'))?></li>
                          </ul>
                        </div>
                      </div>
                   </div><!--tab four end-->
			<?php } ?>	
		<?php } ?>		
     </div>    