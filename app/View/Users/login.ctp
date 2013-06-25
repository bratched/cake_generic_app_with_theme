
<div class="login_stips">
  	<ul>
			<li>
				<?php echo $this->Form->create('User'); ?>
				<input name="data[User][username]" type="text", style="margin:6px 0 0 107px;" />
			</li>

			<li>
				<input name="data[User][password]" type="password"  style="margin:6px 0 0 127px;"/>
			</li>

			<li style="float:right;">
				<?php echo $this->Form->end('Login'); ?>
				
			</li>

		</ul>

</div>
<h6>
	<?php echo $this->Html->link('Forgot Password?',array('controller'=>'Users','action'=>'forgotPassword'),array('class'=>'popup'));?>
	<!-- <a href="#">Forgot Password?</a> -->
</h6>
<span style="padding-left:38px;"><?php echo $this->Session->flash(); ?></span>


<script>
    $(function(){
        $(".popup").centerPopup();
    })

</script>