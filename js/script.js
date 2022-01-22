$(window).scroll(function(){
    if($(this).scrollTop()>20) {
        $('.navbar').addClass('stickyNav');
    } else {
        $('.navbar').removeClass('stickyNav');
    }
});

AOS.init({
    once: true
});


//banner text animation
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 5) || 1000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class=" lovb">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};
//Tawk to
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61caf1dbc82c976b71c3cc04/1fo0c1mtg';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
//tak to end code
window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    // var css = document.createElement("style");
    // css.type = "text/css";
    // css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    // document.body.appendChild(css);
};


// $('ul.nav li.dropdown').hover(function () {
//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
// }, function () {
//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
// });


// $(function () {
//   setTimeout(function () {
//     $('.preLoader').delay(2000).fadeOut('slow');
//   });
// });


// $( "a.scrollLink" ).click(function( event ) {
//     event.preventDefault();
//     $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top - 50 }, 500);
// });



// for Hero text animation
// var tl = gsap.timeline(), 
// mySplitText = new SplitText("#quote", {type:"words,chars"}), 
// chars = mySplitText.chars; //an array of all the divs that wrap each character

// gsap.set("#quote", {perspective: 400});

// tl.from(chars, {duration: 0.8, opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:"back", stagger: 0.01}, "+=0");
// document.getElementById("animate").onclick = function() {
// tl.restart();
// }

