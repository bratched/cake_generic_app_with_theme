<!DOCTYPE html >
<html lang="en">
<head>
<?php echo $this->Html->charset(); ?>
<title>
  <?php echo $title_for_layout; ?>
</title
   <?php $url=$urlvalue = Router::url('/', true); ?>
   <link rel="shortcut icon" href="<?php echo $urlvalue; ?>img/favicon.ico" >
   <link rel="icon" href="<?php echo $urlvalue; ?>img/wwise_animated_favicon.gif" type="image/gif" >
   
   <?php 
   
   		echo $this->Html->script(array('jquery-1.10.1.min','jquery-ui-v1.10.3'));
		echo $this->Html->css(array('standard','style','form','screen','jquery-ui-1.10.0.custom.min'));
		echo $this->Html->script(array('css_browser_selector','../SpryAssets/SpryMenuBar','../SpryAssets/SpryAccordion','jquery.slimscroll.min','jquery.knob'));
		echo $this->Html->css(array('../SpryAssets/SpryMenuBarHorizontal','../SpryAssets/SpryAccordion'));
        echo $this->Html->script(array('../slider/coin-slider'));
		echo $this->Html->css('../slider/coin-slider-styles');
		echo $this->Html->script(array('custom-popup','function'));
        echo $this->Html->css(array('custom-popup','function'));
			 
        echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

   ?>
	
       
	
</head>



<body>
<!--/*Wrpapper*/--> 
<div id="inner_wrapper"> 

  <!--Header strat-->
  <div id="inner_main_header">
		<div class="inner_header">
			<div class="inner_logo">
				<a href="<?php echo $this->Html->url(array('controller'=>'dashboards','action'=>'index'));?>"><?php echo $this->Html->image('../images/inner_logo.jpg');?></a>
			</div>
		    <div class="username">
				<ul>
					 <li style="float:right;">
					  <a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')) ?>" id="logout">
						<input type="button" value="Logout" name="LOGOUT">
					  </a>
					  
					  </li>
					 <li>
                         <?php
                         if(AuthComponent::user('profile_picture')!=null){
                             echo $this->Html->image('../files/profile_picture/thumb/small/'.AuthComponent::user('profile_picture'));
                         }
                         if(AuthComponent::user('profile_picture')==null){
                             if(AuthComponent::user('gender')=='Male'){
                                 echo $this->Html->image('blank_image_male.jpeg',array('width'=>'25','height'=>'30'));
                             }else{
                                 echo $this->Html->image('blank_image_female.jpeg',array('width'=>'25','height'=>'30'));
                             }
                         }
                         ?>
                         <strong>Welcome,</strong> <a href="/my-profile"> <?php echo AuthComponent::user('name');?></a>
                     </li>
				 </ul>
		    </div>
		</div>
  </div>
  <!--Header end-->
  
  
  <!--navigation box start-->
  <div class="navigation">
		<div class="navigation_main">
			<div class="super_admin">
			   <strong style="font-size:25px;"><?php echo AuthComponent::user('Role.role');?></strong>
			</div>
	  
			<!--navigation start-->
			<div class="main_naviagtion">
			   <!-- displays links for dashboars,settings,policies,mandatory procedures,sop and form and templates  -->
				<?php echo $this->element('horizontal_navigation'); ?>
			</div>
			<!--navigation end-->
		</div>
  </div>
  <!--navigation box end-->
  
  <!--main tital start-->
  <div id="tital_box">
	  <div class="tital_bar">
			<ul>
				<li style="width:192px; background-color:#c2c2c2; font-size:18px; text-indent:25px; font-weight:bold; color:#000;">Navigations</li>
				<li id="now_at" style="font-size:20px; padding:0 0 0 15px;">Dashboard</li>
				<li style="float: right;">
					<ul>
						<li style="font-size:12px; padding:0 10px 0 0;"><strong>You are here :</strong></li>
						<li><img src="images/icon/dashboard.png" width="17" height="14" alt="" /></li>
						<li style="font-size:12px; padding:0 0 0 10px;">
                            <?php echo $this->Html->getCrumbs(' > ', 'Dashboard'); ?>
						</li>
					</ul>
				</li>
		    </ul>
	   </div>
  </div>
  <!--main tital end-->
  
 <!--MIDDLE PART START-->
<div id="middle_content_box">
    	<div class="middle_part">
        
			<!--LEFT PART START-->
        	<div class="middle_part_left">
               <?php echo $this->element('vertical_navigation'); ?>      
            </div>
			<!--LEFT PART END-->
        
   
            <!--RIGHT PART START-->
            <div class="middle_part_right" style="border:0px;">
			    <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->fetch('content'); ?>
                <div class="clear">&nbsp;</div>
                <?php echo $this->element('ajax_validate');?>
	        </div>
       </div>
</div>     
 <!--MIDDLE PART END-->
  
  <!--footer start-->
  <div class="footer">
    <div class="center-sctn">
      <p class="copy">Copyright � 2012 WWISE Pvt Ltd.</p>
    </div>
  </div>
  <!--footer end-->
</div>

<script type="text/javascript">
 $(document).ready(function(){
	 $("#now_at").html($("#page-heading").text());
     $("#page-heading").detach();
 });

</script>
<?php  echo $this->Js->writeBuffer(); ?>


<!--/*Wrpapper*/--> 
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>