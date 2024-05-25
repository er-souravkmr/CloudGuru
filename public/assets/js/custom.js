//Owl Caraousel

//placemnt
$(document).ready(function () {
  $('.placement_carousel').owlCarousel({
    loop: true,
    margin: 50,
    autoplay: true,
    autoplayTimeout: 1500,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })

});

//Student
$(document).ready(function () {
  $('.student').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    autoplayTimeout: 1500,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })

});

//Courses
$(document).ready(function () {
  $('.course-slider').owlCarousel({
    loop: true,
    // autoplay: true,
    margin: 10,
    autoplayTimeout: 1500,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })

});

//NAvbar Drpdown

$(document).ready(function(){



  $('.dropdown-submenu a.test').on("click", function(e){
    // alert('hi');
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});