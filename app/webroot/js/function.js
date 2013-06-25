/**
* this file conatains plugins configuration code
*/	

	$(function() {

            // tooltip
            $( document ).tooltip({
                show: { effect: "blind", duration: 100 }
            });

			

           // datepicker
           $( ".datepicker" ).datepicker({
           		'dateFormat' : 'yy-mm-dd',
	  	 		'changeMonth'   : true,
	  	 		'changeYear'   : true,
	  	 		'yearRange' : '1930:2013'
           });

		 // binds inp-form class to input type text and number
		 $('input[type=text],input[type=number],input[type=password],input[type=email]').addClass('inp-form');


        // does check all checkbox on check of check single checkbox
        $('#check-all').on('click',function(){
            if($(this).is(':checked')){
                $('.check-all').prop('checked', true);
            }else{
                $('.check-all').prop('checked', false);

            }
        });

        // remove flash message
        $(".flash-message").delay(2500).fadeOut(800);

        //popup js
        $(".popup").centerPopup();

        // knobjs
        $(".knob").knob({ readOnly:true});

        // ajax validate check for textfield and textaread



    });


