<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel DC Comics</title>
</head>
<body>
    <header>
        <nav class="header-nav container">
            <div>
                <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo">
            </div>
            <div class="link-container">
                <ul class="link-list">
                    <li class="active"> 
                        <a href="">Characters</a>
                    </li>
                    <li class=""> 
                        <a href="">Comics</a>
                    </li>
                    <li class=""> 
                        <a href="">Movies</a>
                    </li>
                    <li class=""> 
                        <a href="">TV</a>
                    </li>
                    <li class=""> 
                        <a href="">Games</a>
                    </li>
                    <li class=""> 
                        <a href="">Collectibles</a>
                    </li>
                    <li class=""> 
                        <a href="">Videos</a>
                    </li>
                    <li class=""> 
                        <a href="">Fans</a>
                    </li>
                    <li class=""> 
                        <a href="">News</a>
                    </li>
                    <li class=""> 
                        <a href="">Shop</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-jumbotron">
    
    </div>
    <main>
        @yield('main-content')
    </main>
    <footer>
        <div id="jumbotron">
            <div class="container footer-link-container">
                <div class="footer-links">
                    <h4>DC COMICS</h4>
                    <ul>
                    <li><a href=""> Character </a></li>
                    <li><a href=""> Comics</a></li>
                    <li><a href=""> Movies</a></li>
                    <li><a href=""> TV</a></li>
                    <li><a href=""> Games</a></li>
                    <li><a href=""> Videos</a></li>
                    <li><a href=""> News</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>SHOP</h4>
                    <ul>
                    <li><a href=""> SHOP DC </a></li>
                    <li><a href=""> SHOP DC COLLECTIBLES</a></li>
                    
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>DC COMICS</h4>
                    <ul>
                    <li><a href=""> Terms of use </a></li>
                    <li><a href=""> Privacy Policy</a></li>
                    <li><a href=""> Ad Choises</a></li>
                    <li><a href=""> Advertising</a></li>
                    <li><a href=""> Jobs</a></li>
                    <li><a href=""> Subscription</a></li>
                    <li><a href=""> talent workshop</a></li>
                    <li><a href=""> CPSC Certificates</a></li>
                    <li><a href=""> Ratings</a></li>
                    <li><a href=""> Shop Help</a></li>
                    <li><a href=""> Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>SITES</h4>
                    <ul>
                    <li><a href=""> DC </a></li>
                    <li><a href=""> MAD Magazine</a></li>
                    <li><a href=""> DC Kids</a></li>
                    <li><a href=""> DC Universe</a></li>
                    <li><a href=""> DC Power Visa</a></li>
                    </ul>
                </div>
        
            </div>
        </div>
        <div id="bottom-footer">
            <div class="container bottom-footer-container">
            <div class="button-container">
                <a href="#" class="button">SIGN-UP NOW!</a>
            </div>
            <div id="socials">
                <h3>FOLLOW US</h3>
                <img src="{{ asset('images/footer-facebook.png') }}" alt="facebook">
                <img src="{{ asset('images/footer-periscope.png') }}" alt="periscope">
                <img src="{{ asset('images/footer-pinterest.png') }}" alt="pinterest">
                <img src="{{ asset('images/footer-twitter.png') }}" alt="twitter">
                <img src="{{ asset('images/footer-youtube.png') }}" alt="youtube">
            </div>
            </div>
        </div>
    </footer>
</body>
</html>