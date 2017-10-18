jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top - 58
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var jQuerytarget = jQuery(target);
          jQuerytarget.focus();
          if (jQuerytarget.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            jQuerytarget.focus(); // Set focus again
          };
        });
      }
    }
  });
jQuery(document).ready(function(){
	jQuery("#clients-logo").owlCarousel({
		autoPlay: 3000,
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [979,5],
	});
	jQuery("#testimonial-slider").owlCarousel({
	    paginationSpeed : 1000,      
	    singleItem:true,
	});
});

function initparticles() {
   hlines();
   lines();
}
function hlines() {
   jQuery.each(jQuery(".bloomlines.hlines"), function() {
      var linecount = 6;
      for (var i = 0; i <= linecount; i++) {
         jQuery(this).append(
            '<span class="particle" style="left:' +
               jQuery.rnd(-30, 30) +
               "%; bottom:" +
               jQuery.rnd(-10, 110) +
               "%;height:" +
               jQuery.rnd(1, 3) +
               "px; width:" +
               jQuery.rnd(20, 80) +
               "%;animation-delay: -" +
               jQuery.rnd(0, 30) / 10 +
               's;"></span>'
         );
      }
   });
}
function lines() {
   jQuery.each(jQuery(".bloomlines.lines"), function() {
      var linecount = 6;
      for (var i = 0; i <= linecount; i++) {
         jQuery(this).append(
            '<span class="particle" style="top:' +
               jQuery.rnd(-30, 30) +
               "%; left:" +
               jQuery.rnd(-10, 110) +
               "%;width:" +
               jQuery.rnd(1, 3) +
               "px; height:" +
               jQuery.rnd(20, 80) +
               "%;animation-delay: -" +
               jQuery.rnd(0, 30) / 10 +
               's;"></span>'
         );
      }
   });
}


jQuery.rnd = function(m, n) {
   m = parseInt(m);
   n = parseInt(n);
   return Math.floor(Math.random() * (n - m + 1)) + m;
};

initparticles();

jQuery(document).ready(function(){
    animateDiv();
    
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h = 20;
    var w = jQuery('.container').width() / 4.5;
    
    var nh = h;
    var nw = Math.floor(Math.random() * w);
    
    return [nh,nw];    
    
}

function animateDiv(){
    var newq = makeNewPosition();
    var oldq = jQuery('.bloom-wrap').offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);
    
    jQuery('.bloom-wrap').animate({ top: newq[0], left: newq[1] }, speed, function(){
      animateDiv();        
    });
    
};

function calcSpeed(prev, next) {
    
    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);
    
    var greatest = x > y ? x : y;
    
    var speedModifier = 0.05;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}

jQuery(function(){
var bloomslider = [],
        indexe = 0;
    bloomslider.push('<h3 class="animated fadeInUp sml-font">Driving Inclusive <br/> finance for Micro and Small <br/> businesses in Africa</h3><span class="animated fadeInRight img-wrap-icon ion-ios-lightbulb"></span>');
    bloomslider.push('<h3 class="animated fadeInDown sml-font">Growing a business is hard,<br/> getting adequate financial<br/> services shouldn\'t be</h3> <span class="animated fadeInRight img-wrap-icon">&#8373</span>');
    bloomslider.push('<h3 class="animated fadeInLeft sml-font">Bloom Impact is a digital marketplace connecting micro and small businesses with financial products that meet their needs</h3><span class="animated fadeInRight img-wrap-icon ion-aperture"></span>');
    bloomslider.push('<h3 class="animated fadeInLeft sml-font">Digital customer<br/> acquisition creates massive<br/> efficiency and reduces costs</h3><span class="animated fadeInRight img-wrap-icon ion-laptop"></span>');
    bloomslider.push('<h3 class="animated fadeInLeft sml-font">Being financially literate,<br/> you can better manage your business<br/> and financial services</h3><span class="animated fadeInRight img-wrap-icon ion-pie-graph"></span>');
    
    function cyclehm() {
        jQuery('.bloom-slider').html(bloomslider[indexe]);
        indexe++;

        if (indexe === bloomslider.length) {
            indexe = 0;
        }

        setTimeout(cyclehm, 10000);
    }
    cyclehm();
});

