//Burger nav for mobile view
$('.burger-nav').on('click', function(e) {
	$('header nav ul').toggleClass('open');
});

/* Page Scroll Up using JavaScript
const btnScrollTop = document.querySelector("#btnScrollTop");
      btnScrollTop.addEventListener("click", function() {
      
      // Approach- I 
      window.scrollTo(0, 0); // behavior is auto bydefault

      Approach- II
      window.scrollTo({
         left: 0,
         top: 0,
         behavior: "smooth"
      });
      console.log("Scroll Top using Javascript")
})*/

// Page Scroll Up and Down using JQuery
$('#btnScrollTop').on('click', function(e) {
	console.log(e.type);
	$('html, body').animate({ scrollTop: 0 }, 'slow');
	console.log('Page scroll top using Jquery');
});

$('#btnScrollDown').on('click', function(e) {
	// document.scrollTop to change the position of the document. Set the scrollTop of the document equal to the bottom of the featured section of your site
	$('html, body').animate({ scrollTop: $(document).height() }, 'slow');
	console.log('Page scroll down using Jquery');
});

//Tooltip
$(function() {
	$('[data-toggle="tooltip"]').tooltip();
});
