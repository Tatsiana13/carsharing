<style>
    .photobg {
        width: 100%;
        height: 680px;
        padding-top: 16%;
        color: white;
        /*margin-left: 7px;*/
        /*padding-right: 70px;*/
        /*border: 4px solid black;*/
        /*padding: 10px;*/
        background: url('/public/images/city/travel.jpg') no-repeat center center;
    }

    .photobg1 {
        width: 100%;
        height: 680px;
        color: azure;
        padding-top: 6%;

        /*margin-left: 7px;*/
        /*padding-right: 70px;*/
        /*border: 4px solid black;*/
        background: rgb(33, 59, 80);
    }

    .photobg2 {
        width: 100%;
        height: 680px;
        padding-top: 6%;
        background: white;
        color: #226b8a;

    }

    .photobg3 {
        width: 100%;
        height: 1000px;
        padding-top: 6%;
        background: #a7cade;


    }

    .photobg4 {
        width: 100%;
        height: 680px;
        padding-top: 8%;
    }

    .photobg5 {
        width: 100%;
        height: 680px;
        padding-top: 2%;
        /*padding-left: 40%;*/

    }

    .topbutton {
        width: 100px;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 50px;
        right: 50px;
        cursor: pointer;
        color: #333;
        font-family: verdana;
        font-size: 12px;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px;
    }

    .footer-clean {
        padding: 50px 0;
        background-color: rgba(151, 187, 180, 0.4);
        color: #262626;
    }

    .footer-clean h3 {
        margin-top: 0;
        margin-bottom: 12px;
        font-weight: bold;
        font-size: 16px;
    }

    .footer-clean ul {
        padding: 0;
        list-style: none;
        line-height: 1.6;
        font-size: 14px;
        margin-bottom: 0;
    }

    .footer-clean ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
    }

    .footer-clean ul a:hover {
        opacity: 1;
    }

    .footer-clean .item.social {
        text-align: right;
    }

    @media (max-width: 767px) {
        .footer-clean .item {
            text-align: center;
            padding-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .footer-clean .item.social {
            text-align: center;
        }
    }

    .footer-clean .item.social > a {
        font-size: 24px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        border: 1px solid #ccc;
        margin-left: 10px;
        margin-top: 22px;
        color: inherit;
        opacity: 0.75;
    }

    .footer-clean .item.social > a:hover {
        opacity: 0.9;
    }

    @media (max-width: 991px) {
        .footer-clean .item.social > a {
            margin-top: 40px;
        }
    }

    @media (max-width: 767px) {
        .footer-clean .item.social > a {
            margin-top: 10px;
        }
    }

    .footer-clean .copyright {
        margin-top: 14px;
        margin-bottom: 0;
        font-size: 13px;
        opacity: 0.6;
    }


</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Newcar" ? " active" : "" ?>"
                   href="?type=newcar&action=show">Cars</a>
            </li>

            <li class="nav-item active"><a class="nav-link" href="#content1">About Us</a></li>
            <li class="nav-item active"><a class="nav-link" href="#content2">Conditions</a></li>
            <li class="nav-item active"><a class="nav-link" href="#content3">Popular Destinations</a></li>
            <li class="nav-item active"><a class="nav-link" href="#content4">Questions</a></li>
            <li class="nav-item active"><a class="nav-link" href="#content6">Reviews</a></li>
            <li class="nav-item active"><a class="nav-link" href="#content6">Contacts</a></li>
        </ul>
    </div>
</nav>


<a href="#" title="Вернуться к началу" class="topbutton"><img src="/public/images/icons/arrow.png" width="40px"
                                                              height="40px"></a>

<section id="ex1">
    <div class="photobg">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">

                    <h1>Car Hire – Search, Compare & Save </h1>
                    <h2>With AutoRental service you can explore in comfort!</h2>
                    <h2>Compare 900 companies at over 60,000 locations. Price Match Guarantee</h2>

                </div>
                <div class="col">
                </div>
            </div>
        </div>
</section>


<section id="content1">
    <div class="photobg1">


        <div class="container-sm">
            <h2>ABOUT US</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p></div>
        <div class="container-md"><p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p></div>
        <div class="container-lg"><p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p></div>
    </div>
</section>

<div class="separator"></div>

<section id="content2">
    <div class="photobg2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3> CONDITIONS</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="col">
                    <h3> CONDITIONS</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

        </div>
</section>

<div class="separator"></div>

<section id="content3">
    <div class="photobg3">
        <div class="container-sm">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <h2>MOST POPULAR DESTINATIONS</h2>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    </tr>
                    <tr class="align-bottom">
                    </tr>
                    <tr>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/madrid.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">Madrid</h5>
                                    <p>Spain</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/amster.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">Amsterdam</h5>
                                    <p>Netherlands</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>

                    <thead>
                    <tr>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    </tr>
                    <tr class="align-bottom">
                    </tr>
                    <tr>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/warsaw.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">Warsaw</h5>
                                    <p>Poland</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/london.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">London</h5>
                                    <p>United Kingdom</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>


                    <tbody>
                    <tr>
                    </tr>
                    <tr class="align-bottom">
                    </tr>
                    <tr>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/paris.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">Paris</h5>
                                    <p>France</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row g-0 bg-light position-relative">
                                <div class="col-md-6 mb-md-0 p-md-4">
                                    <img src="/public/images/city/sochi.jpg" width="80%" height="90%">
                                </div>
                                <div class="col-md-6 p-4 ps-md-0">
                                    <h5 class="mt-0">Sochi</h5>
                                    <p>Russia</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</div>
<div class="col">
</div>
</div>

<section id="content4">
    <div class="photobg4">

        <div class="container-sm">
            <h3> MOST FREQUENTLY QUESTIONS</h3>

            <div class="accordion" id="accordionPanelsStayOpenExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                            What do I need to hire a car?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                         aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <strong>To book your car, all you need is a credit or debit card. When you pick the car up,
                                you’ll need:</strong>
                            Your voucher / eVoucher, to show that you’ve paid for the car.
                            The main driver’s credit / debit card, with enough available funds for the car’s deposit.
                            Each driver’s full, valid driving licence, which they’ve held for at least 12 months (often
                            24).
                            Your passport and any other ID the car hire company needs to see.
                            Different car hire companies have different requirements, so please make sure you check the
                            car’s terms and conditions as well.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                            How old do I have to be to rent a car?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                         aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <strong>For most car hire companies,</strong>
                            the age requirement is between 21 and 70 years old. If you’re under 25 or over 70, you might
                            have to pay an additional fee.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                            Can I book a hire car for someone else?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <strong>Yes,</strong>
                            as long as they meet these requirements. Just fill in their details while you’re making the
                            reservation.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                            How do I find the cheapest car hire deal?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                         aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <strong>We work with all the major international car hire brands</strong>
                            (and lots of smaller local companies) to bring you a huge choice of cars at the very best
                            prices. That’s how we can find you cheap car hire deals at over 60,000 locations worldwide.
                            To compare prices and find your ideal car at an unbeatable price, just use our search form.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                            What should I look for when I’m choosing a car?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                         aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <strong>Space:</strong>
                            You’ll enjoy your rental far more if you choose a car with plenty of room for your
                            passengers and luggage.
                            Fuel policy: Not planning on driving much? A Full to Full fuel policy can save you a lot of
                            money.
                            Location: You can’t beat an ‘on-airport’ pick-up for convenience, but an ‘off-airport’
                            pick-up with a shuttle bus can be much cheaper.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSix">
                            Are all fees included in the rental price?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                         aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <strong>The vast majority of our rentals include Theft Protection,</strong>
                            Collision Damage Waiver (CDW), local taxes, airport surcharges and any road fees. You’ll pay
                            for any ‘extras’ when you pick your car up, along with any young driver, additional driver
                            or one-way fees – but we’ll explain any additional costs before you book your car (and
                            taking your own child seats or GPS can be an easy way to reduce your costs). For more
                            details on what’s included, just check the Ts&Cs of any car you’re looking at.
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section

<div class="photobg5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/public/images/comments/comment1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/public/images/comments/comment2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/public/images/comments/comment3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<div class="footer-clean" id="content6">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li>
                            <a class="text-dark<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
                               href="?type=Aut&action=show">Log In</a>
                        </li>
                        <li>
                            <a class="text-dark<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
                               href="?type=Aut&action=showreg">Sign In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2018</p>
                </div>
            </div>
        </div>
    </footer>
</div>





