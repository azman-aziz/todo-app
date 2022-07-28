<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Todo List App</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="abovefold overflow-hidden">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
            @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap');

            * {
                font-family: 'Inter', sans-serif !important;
            }

            body ::-webkit-input-placeholder {
                color: #989DB1 !important;
            }

            body :-ms-input-placeholder {
                color: #989DB1 !important;
            }

            body ::-ms-input-placeholder {
                color: #989DB1 !important;
            }

            body ::placeholder {
                color: #989DB1 !important;
            }

            body .font-red-hat-display {
                font-family: 'Red Hat Display', sans-serif !important;
            }

            body .cl-light-blue {
                color: #34b3ff;
            }

            body nav .navbar-brand {
                font-family: 'Red Hat Display', sans-serif !important;
                font-size: 26px;
                font-weight: 700 !important;
            }

            @media screen and (min-width: 768px) {
                body nav .navigation {
                    margin-left: 80px;
                }
            }

            body nav .navigation li {
                margin-right: 32px;
            }

            body nav .navigation a {
                font-size: 16px;
                font-weight: 400 !important;
                color: #16171C !important;
            }

            body nav .authentication li {
                margin-right: 38px;
            }

            body nav .authentication a {
                font-size: 16px;
                font-weight: 700 !important;
            }

            @media screen and (min-width: 768px) {
                body nav .authentication .cl-white {
                    color: #FFFFFF !important;
                }
            }

            @media screen and (max-width: 768px) {
                body nav .authentication .login {
                    width: 100%;
                }
            }

            @media screen and (max-width: 768px) {
                body nav .authentication .login a {
                    background: #518CFF;
                    border-radius: 8px;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    color: #FFFFFF !important;
                    padding: 14px 14px 14px 14px !important;
                }
            }

            body nav .authentication .signup {
                background: #FFFFFF;
                border-radius: 8px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #518CFF !important;
                padding: 14px 14px 14px 14px !important;
            }

            body .abovefold {
                background: -webkit-gradient(linear, left top, left bottom, from(#F9FAFE), to(#FFFFFF));
                background: linear-gradient(180deg, #F9FAFE 0%, #FFFFFF 100%);
            }

            body .abovefold .header {
                margin-top: 85px;
                margin-bottom: 115px;
            }

            body .abovefold .img-header {
                position: absolute;
                top: 0;
                right: -230px;
            }

            body .abovefold .headline {
                font-family: 'Red Hat Display', sans-serif !important;
                font-weight: 700 !important;
                line-height: 91px;
                color: #16171C;
                font-size: 72px;
            }

            @media screen and (max-width: 768px) {
                body .abovefold .headline {
                    font-size: 54px;
                    line-height: 80px !important;
                }
            }

            body .abovefold .sub-headline {
                font-family: 'Red Hat Display', sans-serif !important;
                font-weight: 400 !important;
                font-size: 26px;
                line-height: 38px;
                color: #494C57;
                margin-top: 30px;
                width: 75%;
            }

            @media screen and (min-width: 768px) {
                body .abovefold .sub-headline {
                    width: 373px;
                }
            }

            body .abovefold .four-point {
                margin-top: 80px;
            }

            body .abovefold .card {
                background: #FFFFFF;
                -webkit-box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
                box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
                border-radius: 12px;
                padding: 52px 52px 40px;
                border: none;
            }

            @media screen and (min-width: 768px) {
                body .abovefold .card {
                    width: 464px;
                }
            }

            body .abovefold .card .form-control {
                background: #F8F8FC;
                border-radius: 8px;
                border: none;
                padding: 16px 20px;
                height: 56px;
                font-weight: 600 !important;
            }

            body .abovefold .card .input-title {
                color: #494C57;
                font-size: 16px;
                margin-bottom: 12px;
            }

            body .abovefold .card .btn-card {
                margin-top: 36px;
                background: #00B67A;
                border-radius: 8px;
                height: 56px;
                padding: 10px;
                color: #FFFFFF;
                font-size: 16px;
                font-weight: 700 !important;
            }

            body .abovefold .card .award {
                font-size: 12px;
                line-height: 18px;
                color: #8D8F98;
            }
        </style>
        @include('sweetalert::alert')


        <div class="container position-relative">

            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Ornament.png"
                alt="bg-header" class="img-fluid img-header d-none d-md-block">
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light pt-md-5">
            <div class="container px-0">
                <a class="navbar-brand me-0" href="#">
                    To-Do-List-App
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto navigation">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Career</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto authentication">
                        <li class="nav-item my-auto text-center login">
                            <a class="nav-link cl-white mb-3 mb-md-0" aria-current="page" href="#">Sign In</a>
                        </li>
                        <li class="nav-item me-0 text-center">
                            <a class="nav-link signup" href="#">
                                Sign up <span class="ms-2"><img
                                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/arrow-right.svg"
                                        alt="arrow" class="img-fluid"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container header">
            <div class="row">
                <div class="col-lg-6 px-md-0 my-auto position-relative">
                    <div class="headline">
                        Simpan Dokumentasimu di <span class="cl-light-blue">ToDoList-App</span>
                    </div>
                    <div class="sub-headline">
                        Catatan Canggih, Terintegrasi Teknologi Website Terkini
                    </div>
                    <div class="row four-point">
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Licensed & Regulated
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Hassle-free
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> 100% Transparent
                        </div>
                        <div class="col-md-6">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/Vector.png"
                                alt="vector" class="me-3"> Across 180+ Countries
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-md-0">
                    <div class="card">
                        <div class="input-group mb-4">
                            <label for="input" class="w-100">
                                <span class="input-title">Email</span>
                                <input type="text" class="form-control mt-2" placeholder="Email@example.org">
                            </label>
                        </div>
                        <div class="input-group mb-4">
                            <label for="input" class="w-100">
                                <span class="input-title">Password</span>
                                <input type="text" class="form-control mt-2" placeholder="Your Password">
                            </label>
                        </div>
                        
                        <button class="btn btn-card">
                            Get Started
                        </button>
                        <div class="row mx-0 mt-4 award">
                            <div class="col-1 px-0">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/award.png"
                                    alt="award" class="img-fluid">
                            </div>
                            <div class="col-11 px-0">
                                Licensed and regulated by The Monetary
                                Authority of Singapore, Hong Kong Customs and Excise Department and Bank Indonesia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><section class="famouly-brands">

    <style scoped>
      body .famouly-brands {
        background: radial-gradient(100% 100% at 50% 0%, #F9FAFE 0%, #FAFAFD 100%);
        padding-top: 90px;
        padding-bottom: 90px;
      }

      body .famouly-brands .brand img {
        width: 200px !important;
      }
    </style>
    <div class="container">
      <div class="row brand">
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Slack-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Microsoft-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Google-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Airbnb-Logo.png"
            alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section><section class="adventages">

    <style scoped>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body ::-webkit-input-placeholder {
            color: #989DB1 !important;
        }

        body :-ms-input-placeholder {
            color: #989DB1 !important;
        }

        body ::-ms-input-placeholder {
            color: #989DB1 !important;
        }

        body ::placeholder {
            color: #989DB1 !important;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body .cl-light-blue {
            color: #34b3ff;
        }

        body .adventages {
            z-index: 10 !important;
            position: relative;
            background: #FFFFFF;
            padding-top: 90px;
            padding-bottom: 90px;
        }

        body .adventages .headline {
            font-family: 'Red Hat Display', sans-serif !important;
            font-weight: 700 !important;
            font-size: 60px;
            line-height: 140%;
            color: #16171C;
        }

        @media screen and (max-width: 768px) {
            body .adventages .headline {
                font-size: 44px;
                line-height: 60px !important;
            }
        }

        body .adventages .card {
            background: transparent;
            width: 286px;
            border: none;
            margin-top: 125px;
        }

        @media screen and (max-width: 768px) {
            body .adventages .card {
                margin-top: 80px;
            }
        }

        body .adventages .card-desc {
            margin-top: 32px;
        }

        body .adventages .card-title {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #16171C;
        }

        body .adventages .card-text {
            font-weight: 400;
            font-size: 16px;
            line-height: 160%;
            color: #494C57;
        }
    </style>
    <div class="container">
        <div class="row mx-0 text-center d-block">
            <div class="headline">
                We Provide the Easiest Way to <br>
                <span class="cl-light-blue font-red-hat-display">Manage Your Finances</span>
            </div>
        </div>
        <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
            <div class="card">
                <div class="card-body p-0">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dollar-sign.png"
                        alt="dolar" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Great Trading</h4>
                        <p class="card-text">We believe in the potential to provide groundbreaking solutions across
                            industries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/shield.png"
                        alt="dolar" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Security First</h4>
                        <p class="card-text">Security has been our top consideration because when choosing an
                            exchange, trust matters.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/cpu.png"
                        alt="dolar" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Robust Technology</h4>
                        <p class="card-text">To enhance the safety aspect of our products, our products are
                            developed using the latest robust technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><footer class="page-footer font-small blue">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body footer {
            background: #313E60;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer .logo {
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 700;
            font-size: 26px;
            line-height: 38px;
            color: #FAFAFD;
        }

        body footer .social-media {
            margin-top: 55px;
        }

        body footer .copyright {
            font-family: 'Red Hat Display', sans-serif !important;
            font-weight: 400;
            font-size: 16px;
            line-height: 135%;
            color: #FAFAFD;
            margin-top: 20px;
        }

        body footer .nav-footer p {
            font-weight: 700 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer .nav-footer a {
            font-weight: 400 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer li {
            margin-bottom: 16px;
        }
    </style>
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 address">
                <div class="logo font-red-hat-display">
                    GivMoney
                </div>
                <div class="social-media">
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_linkedin.svg"
                            alt="linkedin" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_facebook.svg"
                            alt="facebook" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_twitter.svg"
                            alt="twitter" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_instagram.svg"
                            alt="twitch" class="img-fluid mr-4">
                    </a>
                </div>
                <div class="copyright font-red-hat-display">
                    2021 All rights reserved.
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="row col-md-6 nav-footer">
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Features
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Payments</a>
                        </li>
                        <li>
                            <a href="#!">Collections</a>
                        </li>
                        <li>
                            <a href="#!">Conversions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Resources
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Blog</a>
                        </li>
                        <li>
                            <a href="#!">FAQ</a>
                        </li>
                        <li>
                            <a href="#!">Partnerships</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Our Company
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About Us</a>
                        </li>
                        <li>
                            <a href="#!">Careers</a>
                        </li>
                        <li>
                            <a href="#!">News & Media</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>