$(function() {

	$('[data-join]').click(function(e){
		e.preventDefault();
		$('.popup').addClass('active');
	});
	$('.popup-close, .popup-overflow').click(function(e){
		e.preventDefault();
		$('.popup').removeClass('active');
	});
	
	$('.js-def-opt').on('click', function() {
		$(this).parent().toggleClass('active');
		$(this).closest('.form-popup_select').removeClass('hasError');	
	});

	$(".select_ul li").on('click', function(){
		var currentele = $(this).text();
		var sel = $(this).closest('.form-popup_select');
		// var p = $(this).closest();
		$(".js-def-opt li",sel).html(currentele);
		$("input",sel).val(currentele);
		$(".select_wrap",sel).removeClass("active");
		if($("input",sel).is('[name="how_find"]'))
		{
			if(currentele == 'Other')
			{
				$('#if_other').show();
				$('#if_other textarea').attr('required','required');
			}
			else
			{
				$('#if_other').hide();
				$('#if_other textarea').removeAttr('required');	
			}
		}
	});


	$('.select-fix_top a.close').on('click', function(e) {

		e.preventDefault();
		$(".select_wrap").removeClass("active");
	});

	$('.js-file input').on('change', function(){

		var v = $(this).val();
		var Ink = $('.js-file label');
		if(v!='') Ink.text(v.substring(v.lastIndexOf('\\')+1,v.length)); 

	});


	var current_fs, next_fs, previous_fs; //fieldsets
	$(document).on('click focus','input, textarea', function(e){
		$(this).parent().removeClass('hasError');	
	});
	$('input[name="email"]').bind("change keyup input", function() {
		if (this.value.match(/[^a-zA-Z0-9._%+-@]/g)) {
			this.value = this.value.replace(/[^a-zA-Z0-9._%+-@]/g, '');			
		}
	});	
	$(".next").click(function(e){
		e.preventDefault();
		current_fs = $(this).closest('fieldset');
		var err = false;
		$('.hasError').removeClass('hasError');
		$('[required="required"]',current_fs).each(function(index, element) {
            if(!$(this).val())
			{
				err = true;
				$(this).parent().addClass('hasError');
			}
			if($(this).is('[name="bdate"]'))
			{				
				var now = new Date(); 
				var today = new Date(now.getFullYear(), now.getMonth(), now.getDate()); 
				var dob = new Date($(this).val());
				var dobnow = new Date(today.getFullYear(), dob.getMonth(), dob.getDate());
				var age;	
				var ageInpt = $('[name="age"]',current_fs).val();
				age = today.getFullYear() - dob.getFullYear();				
				if (today < dobnow) {
				  age = age-1;
				}		
				if(age != ageInpt)	
				{					
					err = true;
					$(this).parent().addClass('hasError');
					$('[name="age"]',current_fs).parent().addClass('hasError');
				}
			}
			if($(this).is('[name="email"]'))			
			{
				var regexp = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
				if(!regexp.test($(this).val()))
				{
					err = true;
					$(this).parent().addClass('hasError');					
				}
			}
        });
		if(!err)
		{
			current_fs.closest('fieldset').removeClass('active').siblings().addClass('active');
		}
		// next_fs.show(); 
	});

	$(".previous").click(function(e){
		e.preventDefault();
		current_fs = $(this).closest('fieldset');
		current_fs.closest('fieldset').removeClass('active').siblings().addClass('active');
		// previous_fs.show(); 
	});
	
	$('#join_form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var err = false;
		$('fieldset:nth-child(2) [required="required"]').each(function(index, element) {
            if(!$(this).val())
			{
				err = true;
				$(this).parent().addClass('hasError');
			}
        });
		if(!err)
		{		
			var data = new FormData(form[0]);
			$.ajax({
				type: "POST", url: "/local/include/form_handler.php",
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				success: function(answer){
					if(answer=='success')	
					{
						alert('Your application has been received.');
					}
					else
					{
						console.log(answer);
					}
					form.trigger('reset');
					$('.popup').removeClass('active');
				},
				error: function( xhr, textStatus ) {
					console.log([ xhr.status, textStatus ], 'error');
				}
			});
		}
	});
});