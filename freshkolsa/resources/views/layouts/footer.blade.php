<!-----------Beginning of footer-------->
    <!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-heading">
					<h3>Get in touch with us</h3>
				</div>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a><span>Google +</span></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a><span>Dribbble</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="copyright">
		<div class="container">
			<div class="w3agile-list">
				<ul>
                
                    <li><a href="/aboutus">About</a></li>
					<li><a href="/menu">Menu</a></li>
					<li><a href="/todaysspecial">Todays Special</a></li>
					<li><a href="/team">Our team</a></li>
                    <li><a href="/testimonials">Testimonial</a></li>
                    <li><a href="/feedback">Feedback</a></li>
					<li><a href="/contactus">Contact Us</a></li>
                    @if (Route::has('login'))
                    @if (Auth::check())
                    @else
                      <li><a href="{{ url('/register') }}">Sign Up</a></li>
                    @endif
           			@endif

				   @if (Route::has('login'))
                    @if (Auth::check())
                     <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @else
                      <li><a href="{{ url('/login') }}">Login</a></li>
                    @endif
           		@endif
				</ul>
			</div>
			<div class="agileinfo">
				<p> 2019 Tasty . All Rights Reserved . Design by <a href="#">Karan, Nikhil & Yash</a></p>
			</div>
		</div>
	</div>
	<!-- //copyright -->
</body>
</html>
