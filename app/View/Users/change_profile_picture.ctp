<div id="render_content">

    <?php echo $this->Form->create('User',array('type'=>'file')); ?>
    <fieldset>
        <legend><?php echo __('Upload file'); ?></legend>
        <?php
        echo $this->Form->input('profile_picture',array('type'=>'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>




    <script>
        $(document).ready(function(){
            $('#UserChangePasswordForm').submit(function() {
                var url = $(this).attr('action');

                $.ajax({
                    type :'POST',
                    url  : url,
                    data : $(this).serializeArray(),
                    dataType:'json',
                    success:function(data){
                        if(data['no_error']){
                            $("#render_content").html('<p class="error-message"> '+ data['no_error']+'</p>');

                        }
                        if(data['old_password']){
                            $("#UserOldPassword").next("p").detach();
                            $("#UserOldPassword").after('<p class="error-message">'+data['old_password']+'</p>');
                        }
                        if(data['password']){
                            $("#UserPassword").next("p").detach();
                            $("#UserPassword").after('<p class="error-message">'+data['password'][0]+'</p>');
                        }
                        if(data['confirm_password']){
                            $("#UserConfirmPassword").next("p").detach();
                            $("#UserConfirmPassword").after('<p class="error-message">'+data['confirm_password'][0]+'</p>');
                        }
                    },
                    error:function(){
                        alert('error ocurred');
                    }

                });
                return false;
            });

        });

    </script>

</div>