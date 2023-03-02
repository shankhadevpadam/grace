// Nav Fixed
var nav = jQuery('.wc-primary-nav');
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 95) {
        nav.addClass("fixed-nav");
    } else {
        nav.removeClass("fixed-nav");
    }
});

$(document).ready(function(){
  $(".stories-carousel").owlCarousel({
    responsiveClass:true,
    radio: '16x9',
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:1,
          nav:true
      },
      1000:{
          items:1,
          nav:true
      }
    }
  });

  $('.venobox').venobox()
});

var form = $("#become-support");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
      fname: "required",
      lname: "required",
      email: {
          required: true,
          email: true
      },
      pnumber: {
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
      },
      address: "required"
  },
  // Specify validation error messages
  messages: {
    fname:      "First name is required",
    lname:      "Last name is required",
    email: {
        required:   "Email is required",
        email:      "Please enter a valid e-mail",
    },
    phone:{
        required:   "Phone number is requied",
        minlength:  "Please enter 10 digit mobile number",
        maxlength:  "Please enter 10 digit mobile number",
        digits:     "Only numbers are allowed in this field"
    },
    address:      "Address is required",
  }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});
