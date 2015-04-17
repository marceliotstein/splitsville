/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

 $(document).ready(function(e) {
   apprtxt = lpgpractice['approach'];
   $('#approach-text').html(apprtxt);

   changetxt = lpgpractice['changing'];
   $('#change-text').html(changetxt);

   childrentxt = lpgpractice['children'];
   $('#children-text').html(childrentxt);

   stakestxt = lpgpractice['stakes'];
   $('#stakes-text').html(stakestxt);

   larrybio = lpgbios['larry'];
   $('#bio1').html(larrybio);

   mikebio = lpgbios['mike'];
   $('#bio2').html(mikebio);

   scarlettbio = lpgbios['scarlett'];
   $('#bio3').html(scarlettbio);
 });

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Closes the Responsive Menu on Click outside Menu
$('body > *').not('nav').click(function() {
    if(!$('button.navbar-toggle').hasClass('collapsed')) {
        $('.navbar-toggle:visible').click();
    }
});
