// Including footer.html and footer.html into index.html files
//$('.header').load('header.html');
//$('.footer').load('footer.html');

//Burger nav for mobile view
$('.burger-nav').on('click', function (e) {
  $('header nav ul').toggleClass('open')
})

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
$('#btnScrollTop').on('click', function (e) {
  console.log(e.type)
  $('html, body').animate({ scrollTop: 0 }, 'slow')
  console.log('Page scroll top using Jquery')
})

$('#btnScrollDown').on('click', function (e) {
  // document.scrollTop to change the position of the document. Set the scrollTop of the document equal to the bottom of the featured section of your site
  $('html, body').animate({ scrollTop: $(document).height() }, 'slow')
  console.log('Page scroll down using Jquery')
})

// A $(document ).ready() block.
$(document).ready(function () {
  console.log(
    'Code included inside $( document ).ready() will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute.',
  )
  console.log(
    'Experienced developers sometimes use the shorthand $() for $( document ).ready()',
  )
  w3.includeHTML()
})

// Capturing Form data for ajax call
$('.contactUsForm').on('submit', function () {
  console.log('Form submitted successfully')

  event.preventDefault() //prevent default action
  var url = $(this).attr('action') //get form action url
  var method = 'GET' //get form GET/POST method

  var name = $('#name').val()
  var email = $('#email').val()
  var address = $('#address').val()
  var city = $('#city').val()
  var phone = $('#number').val()
  var message = $('#message').val()

  console.log(url)
  console.log(method)
  console.log(name + email + address + city + phone + message)

  $.get({
    url: url,
    data: {
      name: name,
      email: email,
      address: address,
      city: city,
      phone: phone,
      message: message,
    },
  })
    .done(function (data) {
      console.log('Done')

      $('.contactUsForm').css('display', 'none')
      $('.success-message').css('display', 'block')
      $('.capturedData').html('<p> Name: ' + name + '</p>')
      $('.capturedData').append('<p>Email : ' + email + '</p>')
      $('.capturedData').append('<p>Address: ' + address + '</p>')
      $('.capturedData').append('<p>City: ' + city + '</p>')
      $('.capturedData').append('<p>Phone Number: ' + phone + '</p>')
      $('.capturedData').append('<p>Message: ' + message + '</p>')
      //location.href = 'confirmation.html';
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.log('Fail')
    })
})
