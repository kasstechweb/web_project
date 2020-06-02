    </main>
    </div> <!-- end #app in header -->

    <footer class="site-footer">
        <div class="">
            <div class="top-footer">
                <div class="footer-column">
                    <h6>About</h6>
                    <p class="text-justify">Here at <i>GameShop </i>, we specialise in providing you with the best digital codes for the hottest games. There’s no need to pay full price or wait for a game again. We combine the lowest prices with rapid digital delivery, so you can start playing your favourite games, fast. GameShop has over 20 years of combined industry experience. We’ve taken our passion for games and created a truly innovative service that puts gamers first.</p>
                </div>

                <div class="footer-column">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li class="">
                            <a href="{{ url(route('myhome')) }}"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="">
                            <a href=""><i class="fab fa-hotjar"></i> Top Selling</a>
                        </li>
                        <li class="">
                            <a href="{{ url(route('category', ['category'=>'pc'])) }}"><i class="fas fa-desktop"></i> PC Games</a>
                        </li>
                        <li class="">
                            <a href="{{ url(route('category', ['category'=>'playstation'])) }}"><i class="fab fa-playstation"></i> Playstation Games</a>
                        </li>
                        <li class="">
                            <a href="{{ url(route('category', ['category'=>'xbox'])) }}"><i class="fab fa-xbox"></i> Xbox Games</a>
                        </li>
                        <li class="">
                            <a href="{{ url(route('category', ['category'=>'nintendo'])) }}"><i class="fas fa-magic"></i> Nintendo Games</a>
                        </li>
                        <li class="">
                            <a href="{{ url(route('category', ['category'=>'giftcards'])) }}"><i class="fas fa-gifts"></i> Gift Cards</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h6>Account</h6>
                    <ul class="footer-links">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="">
            <div class="row">
                <div class="">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                        <a href="#">Game Shop</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!--	<script src="js/scripts.js"></script>-->
</body>
</html>