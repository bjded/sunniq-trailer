<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for reliable trailer rentals in the Dallas-Fort Worth Metroplex? SunniQ Trailer Rental offers high-quality trailers for all of your hauling needs.">
    <meta name="keywords" content="SunniQ Trailer Rental, trailer rentals, Dallas, Fort Worth, Texas, Metroplex, hauling, moving, transport">
    <title>SunniQ Trailer Rental | www.sunniqtrailer.com</title>
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#f18a13">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11246181517"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11246181517'); </script>
</head>
<body id="top">
    <!-- GET Handler -->
    <?php if (isset($_GET['success'])) : ?>
        <p style="padding: 5px 10px; background-color: green; font-size: 15px; font-weight: 600; text-align: center; letter-spacing: 0.3px; color: #fff">
            Thank you for taking the time to request a rental. We will contact you as soon as possible!
        </p>
    <?php endif; ?>
    <!-- GET Handler -->

    <header>
        <a href="/" id="logo">
            <img src="img/sunniq-logo-white.svg" alt="sunniq logo">
        </a>
        <nav>
            <a href="#trailers" class="smooth">Trailers</a>
            <a href="#rental-documents" class="smooth">Rental Documents</a>
            <a href="#book-now" class="smooth">Book Now</a>
            <a href="#reviews" class="smooth">Reviews</a>
        </nav>
        <span id="mobile-menu" class="material-symbols-outlined">menu</span>
        <div id="mobile-nav">
            <a href="#trailers" class="smooth">Trailers</a>
            <a href="#rental-documents" class="smooth">Rental Documents</a>
            <a href="#book-now" class="smooth">Book Now</a>
            <a href="#reviews" class="smooth">Reviews</a>
        </div>
    </header>

    <div id="announcement">
        <p>Need a trailer? Give us a call! <a href="tel:6822019664">(682) 201-9664</a></p>
    </div>

    <div id="home-hero">
        <h1>SunniQ <span>Trailer Rental</span></h1>
        <h2>Proudly serving the Dallas-Fort Worth metroplex.</h2>
        <a href="#book-now" class="btn smooth">Book Now</a>
    </div>

    <div id="trailers" class="container">
        <div class="row">
            <span class="heading">Trailers</span>
            <div class="trailer">
                <div class="gallery">
                    <img src="img/trailers/lacosta-2023/00.webp">
                    <img src="img/trailers/lacosta-2023/01.webp">
                    <img src="img/trailers/lacosta-2023/02.webp">
                    <img src="img/trailers/lacosta-2023/03.webp">
                    <img src="img/trailers/lacosta-2023/04.webp">
                    <img src="img/trailers/lacosta-2023/05.webp">
                    <img src="img/trailers/lacosta-2023/06.webp">
                    <img src="img/trailers/lacosta-2023/07.webp">
                    <img src="img/trailers/lacosta-2023/08.webp">
                </div>
                <div class="info">
                    <h1>20' Lacosta (2023)</h1>
                    <h2>Centrally Located</h2>
                    <br>
                    <h3>Features</h3>
                    <p>2' Dovetail</p>
                    <p>7,000 lb. Axles</p>
                    <p>14,000 lb. Gross Weight</p>
                    <p>12,000 lb. Winch</p>
                    <p>Chains & Straps Available</p>
                    <p>Drive Over Fenders</p>
                    <br>
                    <h3>Pricing</h3>
                    <!-- <p>Hourly Rate <span class="amount">$25</span></p> -->
                    <p>Daily Rate (Mon. - Thurs.) <span class="amount">$100</span></p>
                    <p>Daily Rate (Fri. - Sun.) <span class="amount">$140</span></p>
                    <p>Weekly Rate <span class="amount">$500</span></p>
                    <br><br>
                    <a href="#book-now" class="btn smooth trailer-select" data-trailer="2">Book Trailer</a>
                </div>
            </div>
        </div>
    </div>

    <div id="rental-documents" class="container">
        <div class="row">
            <span class="heading">Rental Documents</span>
            <div class="document">
                <img src="img/rental-agreement-thumbnail.webp" alt="thumbnail">
                <span>Rental Agreement</span>
                <a href="files/rental-agreement.pdf" class="btn" target="_blank" rel="noopener">View PDF</a>
            </div>
            <div class="document">
                <img src="img/trailer-liability-addendum-thumbnail.webp" alt="thumbnail">
                <span>Trailer Liability Addendum</span>
                <a href="files/trailer-liability-addendum.pdf" class="btn" target="_blank" rel="noopener">View PDF</a>
            </div>
            <div class="document">
                <img src="img/trailer-liability-flyer-thumbnail.webp" alt="thumbnail">
                <span>Trailer Liability Flyer</span>
                <a href="files/trailer-liability-flyer.pdf" class="btn" target="_blank" rel="noopener">View PDF</a>
            </div>
        </div>
    </div>

    <div id="book-now" class="container">
        <div class="row">
            <span class="heading">Book Now</span>
            <span class="sub-heading">You can request a rental by filling out the form below or giving us a call at <a href="tel:6822019664">(682) 201-9664</a>.</span>
            <form action="php/form-submit.php" method="POST">
                <div class="form-group">
                    <label for="name"><span class="material-symbols-outlined">signature</span>Name *</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="phone"><span class="material-symbols-outlined">phone</span>Phone *</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="email"><span class="material-symbols-outlined">mail</span>Email *</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="company"><span class="material-symbols-outlined">business_center</span>Company</label>
                    <input type="text" name="company" id="company">
                </div>
                <div class="form-group">
                    <label for="trailers"><span class="material-symbols-outlined">rv_hookup</span>Trailer *</label>
                    <select name="trailers" id="trailers" required>
                        <option value="">Select a Trailer</option>
                        <option value="2">20' Lacosta (2023)</option>
                    </select>
                </div>
                <div class="form-group date-picker">
                    <div class="date">
                        <label for="pickup-date"><span class="material-symbols-outlined">calendar_month</span>Pickup *</label>
                        <input type="date" name="pickup-date" id="pickup-date" required>
                    </div>
                    <div class="date">
                        <label for="dropoff-date"><span class="material-symbols-outlined">calendar_month</span>Drop-off *</label>
                        <input type="date" name="dropoff-date" id="dropoff-date" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="cf-turnstile" data-sitekey="0x4AAAAAAAJFg4thPx9pSXR4" data-callback="javascriptCallback" data-theme="dark"></div>
                    <input type="submit" name="submit" id="submit" value="Request Rental" class="btn">
                </div>
                <span class="disclaimer">* = Required Fields</span>
            </form>
        </div>
    </div>

    <div id="reviews" class="container">
        <div class="row">
            <span class="heading">Satisfied Customers</span>
            <div class="carousel">
                <div class="review">
                    <img src="img/male-placeholder.jpg" alt="reviewer photo">
                    <div class="rating">
                        <span class="name">M K</span>
                        <div class="stars">
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            (5.0)
                        </div>
                        <div class="comment hide">
                            <p>
                                <span class="material-symbols-outlined quote flipped">format_quote</span>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quam ad at veniam! Delectus et molestiae deserunt dolorem similique porro, ullam temporibus perferendis ipsum incidunt ut voluptatem hic maiores iusto laboriosam, nihil ea beatae tempora sed. Blanditiis quidem rerum ducimus eum sit, nisi est explicabo expedita. In possimus recusandae voluptatem!
                                <span class="material-symbols-outlined quote">format_quote</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <img src="img/male-placeholder.jpg" alt="reviewer photo">
                    <div class="rating">
                        <span class="name">Yazan Sahoory</span>
                        <div class="stars">
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            (5.0)
                        </div>
                        <div class="comment">
                            <p>
                                <span class="material-symbols-outlined quote flipped">format_quote</span>
                                Great price and service. I used the trailer to haul a f250 utility truck from Houston to Dallas.
                                <span class="material-symbols-outlined quote">format_quote</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <img src="img/male-placeholder.jpg" alt="reviewer photo">
                    <div class="rating">
                        <span class="name">Charlie Ellison</span>
                        <div class="stars">
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            (5.0)
                        </div>
                        <div class="comment">
                            <p>
                                <span class="material-symbols-outlined quote flipped">format_quote</span>
                                Very satisfied with how easy it was to go through the process. The trailer was great. Pulled really well. I would refer people to this place.
                                <span class="material-symbols-outlined quote">format_quote</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <img src="img/male-placeholder.jpg" alt="reviewer photo">
                    <div class="rating">
                        <span class="name">Anthony Zamora</span>
                        <div class="stars">
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            (5.0)
                        </div>
                        <div class="comment">
                            <p>
                                <span class="material-symbols-outlined quote flipped">format_quote</span>
                                It came with everything I needed to haul it came in handy what a good trailer find on Google.
                                <span class="material-symbols-outlined quote">format_quote</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <img src="img/male-placeholder.jpg" alt="reviewer photo">
                    <div class="rating">
                        <span class="name">Rick Hill</span>
                        <div class="stars">
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            <span class="material-symbols-outlined">rv_hookup</span>
                            (5.0)
                        </div>
                        <div class="comment">
                            <p>
                                <span class="material-symbols-outlined quote flipped">format_quote</span>
                                We rented the trailer to haul three motorcycles to Colorado. Quincy set up the trailer so we can accommodate the motorcycles. The trailer pulls straight and is well maintained. I will certainly be using Quincy's trailer again for another motorcycle weekend.
                                <span class="material-symbols-outlined quote">format_quote</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="comment center" style="padding: 10px 0">
                        <p>
                            <p>If you've recently rented one of our trailers, we'd love to hear about your experience!</p>
                            <br>
                            <a href="https://www.google.com/search?q=sunniq+trailer+rental&rlz=1C1ONGR_enUS1059US1059&oq=sunniq+trailer+rental&aqs=chrome.0.69i59j69i64j35i39j69i60l3.5945j0j15&sourceid=chrome&ie=UTF-8#lrd=0x833bcddcca8deee3:0xcf1b8f5ab43585e,3,,,," class="btn" target="_blank" rel="noopener">Leave a Review</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="information">
        <p><span class="material-symbols-outlined">location_on</span>Watauga, TX</p>
        <p><span class="material-symbols-outlined">call</span><a href="tel:6822019664">(682) 201-9664</a></p>
        <p><span class="material-symbols-outlined">mail</span><a href="mailto:sunniqtrailers@gmail.com">sunniqtrailers@gmail.com</a></p>
    </div>

    <footer>
        <img src="img/sunniq-logo-white.svg" alt="sunniq logo">
        <p>&copy; 2023 SunniQ Trailer Rental</p>
    </footer>

    <div id="back-to-top">
        <a href="#top" class="smooth">
            <span class="text">Back to Top</span><span class="material-symbols-outlined">expand_less</span>
        </a>
    </div>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
