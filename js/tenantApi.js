var tenantId = 415858;
// 543279

$(".tenantFormSubmit").click(function(){
	alert('submit alert');
	var formid = $(this).attr('data-formid');
	if(formid=='signupForm' || formid=='contactusForm' || formid=='newsletterForm'){
		var data = {};
		data.tenantId = tenantId;

		if(formid=='signupForm'){
			data.name = $('#'+formid+' .name').val();
			data.company_name = $('#'+formid+' .company_name').val();
			data.email = $('#'+formid+' .email').val();
			data.phone = $('#'+formid+' .phone').val();
			data.from_place = "signup";
		} else if(formid=='contactusForm'){
			data.name = $('#'+formid+' .name').val();
			data.email = $('#'+formid+' .email').val();
			data.phone = $('#'+formid+' .phone').val();
			data.message = $('#'+formid+' .message').val();
			data.from_place = "contact";
		} else if(formid=='newsletterForm'){
			data.email = $('#'+formid+' .email').val();
			data.from_place = "newsletter";
			if(data.email!=''){
				var email = data.email;
				console.log('email : ',email);
				var emailBef = email.split("@")[0];
				data.name = emailBef;
			} else {
				toastr.error("Email is required");
		  		return false;
			}
		}

		console.log('data : ',data);

		for (const [key, value] of Object.entries(data)) {
		  if(value==''){
		  	toastr.error("All fields marked with * are mandatory");
		  	return false;
		  }
		}

		if(formid=='signupForm'){
			if(!$('#'+formid+' .terms').prop( "checked" )){
				toastr.error("Terms and conditions are required.");
				return false;
			}
		}

		data.contact_date = new Date();
		data.contact_time = moment(data.contact_date).format("hh:mm A");
		data.created_new = moment(data.contact_date).format("DD/MM/YYYY")+"~~"+data.contact_time;
		console.log('data : ',data);

		var url = 'https://app.theadmi.com/api/contacts';
		// var url = 'http://localhost/api/contacts';
		$.ajax({
			type: 'POST',
			url: url,
			cache: false,
			data: JSON.stringify(data),
			dataType: "json",
			headers: {
				'Content-Type':'application/json',
			}
		}).done(function (response) {
			if(response.errorCode){
				toastr.error(response.respMessage);
			} else {
				toastr.success("Thank you");
				$('#'+formid)[0].reset()
			}
		});
	}
})