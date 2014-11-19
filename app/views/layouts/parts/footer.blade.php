    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/jquery.easing.min.js') }}
    {{ HTML::script('assets/js/scrolling-nav.js') }}
    @yield('js')

    <script type="text/javascript">
    var animatedScroll = false;
    $('.navbar').animate({
        "top": "-50px"
    });
    $(window).scroll(function () {
        if(!animatedScroll){
            animatedScroll = true;
            if ($(window).scrollTop() > $('#test').position().top)
             {
                $('.navbar').animate({
                    "top": "0px"
                }, function(){ animatedScroll = false;});
             }
            else
             {
              $('.navbar').animate({
                    "top": "-50px"
                },function(){ animatedScroll = false;});
             }
        }
    });
    </script>
  </body>
</html>
