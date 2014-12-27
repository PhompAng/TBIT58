    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/jquery.easing.min.js') }}
    {{ HTML::script('assets/js/scrolling-nav.js') }}
    {{ HTML::script('assets/js/owl.carousel.min.js') }}
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-33407474-2', 'auto');
	  ga('send', 'pageview');

	</script>
    @yield('js')
  </body>
</html>
