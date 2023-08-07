<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite([
        'resources/materialize/css/materialize.css',
    ])
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
        .mobile-screen-mock {
            max-width: 360px;
            margin: auto;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
    </style>

  </head>

  <body>
    @yield('content')

    
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Initialize dropdowns
          var elemsDropdown = document.querySelectorAll('.dropdown-trigger');
          var instancesDropdown = M.Dropdown.init(elemsDropdown);
          
          // Initialize modals
          var elemsModal = document.querySelectorAll('.modal');
          var instancesModal = M.Modal.init(elemsModal);

          // Initialize tabs
          var elemsTabs = document.querySelectorAll('.tabs');
          var instancesTabs = M.Tabs.init(elemsTabs);

          // Initialize side navs
          var elemsSidenav = document.querySelectorAll('.sidenav');
          var instancesSidenav = M.Sidenav.init(elemsSidenav);

          // Initialize collapsibles
          var elemsCollapsible = document.querySelectorAll('.collapsible');
          var instancesCollapsible = M.Collapsible.init(elemsCollapsible);

          // Initialize tooltips
          var elemsTooltip = document.querySelectorAll('.tooltipped');
          var instancesTooltip = M.Tooltip.init(elemsTooltip);

          // Initialize selects
          var elemsSelect = document.querySelectorAll('select');
          var instancesSelect = M.FormSelect.init(elemsSelect);

          // Initialize textareas (for auto-resizing)
          var elemsTextarea = document.querySelectorAll('textarea');
          M.textareaAutoResize(elemsTextarea);

          // Initialize sliders
          var elemsSlider = document.querySelectorAll('input[type=range]');
          var instancesSlider = M.Range.init(elemsSlider);

          // Initialize date pickers
          var elemsDatepicker = document.querySelectorAll('.datepicker');
          var instancesDatepicker = M.Datepicker.init(elemsDatepicker);

          // Initialize time pickers
          var elemsTimepicker = document.querySelectorAll('.timepicker');
          var instancesTimepicker = M.Timepicker.init(elemsTimepicker);
          
          // Initialize floating action buttons
          var elemsFab = document.querySelectorAll('.fixed-action-btn');
          var instancesFab = M.FloatingActionButton.init(elemsFab);

          // Initialize material boxed
          var elemsBoxed = document.querySelectorAll('.materialboxed');
          var instancesBoxed = M.Materialbox.init(elemsBoxed);

          // Initialize parallax
          var elemsParallax = document.querySelectorAll('.parallax');
          var instancesParallax = M.Parallax.init(elemsParallax);

          // Initialize carousels
          var elemsCarousel = document.querySelectorAll('.carousel');
          var instancesCarousel = M.Carousel.init(elemsCarousel);
          
          // Initialize scrollspy
          var elemsScrollspy = document.querySelectorAll('.scrollspy');
          var instancesScrollspy = M.ScrollSpy.init(elemsScrollspy);
          
          // Initialize pushpin
          var elemsPushpin = document.querySelectorAll('.pushpin');
          var instancesPushpin = M.Pushpin.init(elemsPushpin);
          
          // Initialize feature discovery
          var elemsTapTarget = document.querySelectorAll('.tap-target');
          var instancesTapTarget = M.TapTarget.init(elemsTapTarget);
      });
  </script>
</body>
</html>
      