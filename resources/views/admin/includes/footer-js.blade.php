<script src="{{url('bracketThemes/lib/jquery/jquery.js')}}"></script>
    <script src="{{url('bracketThemes/lib/popper.js/popper.js')}}"></script>
    <script src="{{url('bracketThemes/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{url('bracketThemes/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{url('bracketThemes/lib/moment/moment.js')}}"></script>
    <script src="{{url('bracketThemes/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{url('bracketThemes/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{url('bracketThemes/lib/peity/jquery.peity.js')}}"></script>
    <script src="{{url('bracketThemes/lib/chartist/chartist.js')}}"></script>
    <script src="{{url('bracketThemes/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('bracketThemes/lib/d3/d3.js')}}"></script>
    <script src="{{url('bracketThemes/lib/rickshaw/rickshaw.min.js')}}"></script>


    <script src="{{url('bracketThemes/js/bracket.js')}}"></script>
    <script src="{{url('bracketThemes/js/ResizeSensor.js')}}"></script>
    <script src="{{url('bracketThemes/js/dashboard.js')}}"></script>
    <script src="{{url('bracketThemes/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('bracketThemes/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{ asset('assets/sellercenter/js/dataTables.checkboxes.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="{{url('bracketThemes/lib/select2/js/select2.min.js')}}f"></script>
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });
        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }

        


      });
    </script>
    @yield('js-classes')