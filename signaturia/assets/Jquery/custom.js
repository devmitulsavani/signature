$(document).ready(function () {
  $('.burger-menu, .close-menu, .nav-close-bg').click(function () {
    $('nav').toggleClass('translate-x-72');
    $('.nav-close-bg').toggleClass('hidden');
  });
  $('.burger-menu').click(function () {
    $('.burger-menu span:first-child').toggleClass('rotate-45 top-2 top-0');
    $('.burger-menu span:nth-child(2)').toggleClass('hidden');
    $('.burger-menu span:last-child').toggleClass('-rotate-45 top-2 top-4');
  });
});

$('.testimonial-silder').slick({
  centerMode: true,
  arrows: true,
  prevArrow: $('.testimonial-prev'),
  nextArrow: $('.testimonial-next'),
  speed: 300,
  centerPadding: '150px',
  autoplay: false,
  arrows: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        centerMode: false,
      }
    }
  ]
});
// tabs
// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function () {
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();

  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$('.mailsignatory-desgin').slick();

$('.Pricing-silde').slick({
  dots: false,
  infinite: false,
  arrows: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
  ]
});

// faq

$(function () {
  $(".product-faq .Accordion_item:not(:first-child) .accordion-content").addClass("hidden");
  $(".Accordion_item:first-of-type .js-accordion-title").addClass("open");

  $(".js-accordion-title").click(function () {
    $(".open").not(this).removeClass("open").next().slideUp(300);
    $(this).toggleClass("open").next().slideToggle(300);
  });
});


// form

// if($('.input-populated input').val() !='' ) {
//   $('.input-populated').addClass('active');
// }
$($('.input-populated input')).each(function () {
  if ($(this).val() != '') {
    $(this).parent('.input-populated').addClass('active');
  }
});
$('.input-populated input').on('keyup', function () {
  var self = $(this),
    label = self.parents('.input-populated');

  if (self.val() != '') {
    label.addClass('active');
  } else {
    label.removeClass('active');
  }
});

$(".preview-btn, .back-btn").click(function () {
  $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
});


// drop down


$(document).ready(function () {

  $(".burger-menu, .sidebar-bg").click(function() {
    $(".sidebar").toggleClass("-translate-x-[500px]");
    $(".sidebar-bg").toggleClass("hidden opacity-30");
  });

  $('.dashbord-editmenu').click(function () {
    $(this).children('.dashbord-edititems').slideToggle();
    console.log('click')
  });
  $('.profile-menu').click(function () {
    $(this).children('.profile-items').slideToggle();
  });

  $(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.dashbord-editmenu, .profile-menu') && !$(target).parents().is('.dashbord-editmenu, .profile-menu')) {
      $('.dashbord-edititems, .profile-items').slideUp();
    }})
})
// $(document).click(function(e) { 
//   var target = e.target; 
//   if (!$(target).is('.dashbord-editmenu, .profile-menu') && !$(target).parents().is('.dashbord-editmenu, .profile-menu')) 
//   { $('.dashbord-edititems, .profile-items').slideUp(); }
//   });

const listViewButton = document.querySelector('.list-view-button');
const gridViewButton = document.querySelector('.grid-view-button');
const list = document.querySelector('.grid-list-main');

listViewButton.onclick = function () {
  gridViewButton.classList.remove('active');
  listViewButton.classList.add('active');
  list.classList.remove('grid-view-filter');
  list.classList.add('list-view-filter');
}

gridViewButton.onclick = function () {
  listViewButton.classList.remove('active');
  gridViewButton.classList.add('active');
  list.classList.remove('list-view-filter');
  list.classList.add('grid-view-filter');
}