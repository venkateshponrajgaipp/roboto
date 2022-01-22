function formValidation(){
    $("#contactBtn").validate({
rules: {
    name: "required",
    phone: "required",
    email: "required",
    country: "required",
    msg: "required",
},

messages: {
    name: "Please enter the name",
    phone: "Please enter the phone",
    email: "Please enter the email",
    country: "please enter the country",
    msg: "please enter the Message"
    
},

errorElement: "em",

errorPlacement: function(error, element) {
    error.addClass("invalid-feedback");
    if (element.prop("type") === "checkbox") {
        error.insertAfter(element.next("label"));
    } else {
        error.insertAfter(element.next("pmd-textfield-focused"));
    }
},
highlight: function(element, errorClass, validClass) {
    $(element).addClass("is-invalid").removeClass("is-valid");
},
unhighlight: function(element, errorClass, validClass) {
    $(element).addClass("is-valid").removeClass("is-invalid");
},
submitHandler: function(registration) {
    registration.submit();
    
}
});
}