$(function() {
  // Cache the window object
  const $window = $(window);

  // Parallax background effect
  $('section[data-type="background"]').each(function() {
    const $bgobj = $(this); // Assigning the object

    $window.scroll(function() {
      // Scroll the background at var speed
      // the yPos is a negative value because we're scrolling it up
      let yPos = -($window.scrollTop() / $bgobj.data('speed'));

      // Put together our final background position
      let coords = '50% '+yPos+'px';

      // Move the background
      $bgobj.css({ backgroundPosition: coords });
    }); // end window scroll
  });
})