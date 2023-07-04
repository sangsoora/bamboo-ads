<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">

        <title>{{$title ?? 'Harmony Oasis'}}</title>

        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @section('head')
            <link rel='icon' href='{{url('favicon.ico')}}' type='image/x-icon' />
            <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
            <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
            <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#bd00ff">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />            <link rel="stylesheet" href="{{url('lib/app.css')}}">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            {{-- <!-- Facebook Pixel Code -->
            <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '183937492245269');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=183937492245269&ev=PageView&noscript=1"
            /></noscript>
            <!-- End Facebook Pixel Code --> --}}
        @show
    </head>
    <body>
        <div class="navbar navbar-expand-md navbar-light navbar-oasis fixed-top">
            <a class="navbar-brand" href="{{route('therapist')}}">
                <img src="{{url('images/logo.jpg')}}" alt="Harmony Oasis"/> Harmony Oasis
            </a>
            <button class="navbar-toggler" type="button" id="open-btn">&#9776;</button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('therapist')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a class="closebtn" id="close-btn">&times;</a>
            <a class="side-btn" href="{{route('therapist')}}">About</a>
            <a class="side-btn" href="#features">Features</a>
        </div>
        <div class="main-banner">
            <div class="main-banner-text">
                <h1>Safely self-diagnose and get connected to an Asian therapist you can identify with using Harmony Oasis</h1><br>
                <h3>Privately self-diagnose and start to get a clearer understanding of what's troubling you.</h3>
                <h3>Match with a set of qualified Asian therapists and specialists.</h3>
                <h3>Connect, schedule and start getting the support you deserve.</h3>
                <button class="btn btn-flat btn-modal" data-page="therapist" data-button="main">Sign up</button>
            </div>
        </div>
        <section id="features">
            <div class="section-title">
                <h2>Key Features</h2>
            </div>
            <div class="cards">
                <div class="card" data-aos="zoom-in-right">
                    <div class="card-infos">
                        <div class="d-flex justify-content-center">
                            <h3 class="steps">AI Powered Self-Diagnosis</h3>
                        </div>
                        <p>Our advanced self-diagnosis tool uses the best of AI tech to help you clarify and understand the issues that are challenging you.</p><br>
                        <div class="signup" data-page="therapist" data-button="first">
                            <button class="btn btn-flat btn-modal">SIGN UP</button>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="card-infos">
                        <div class="d-flex justify-content-center">
                            <h3 class="steps">Personalized Matches</h3>
                        </div>
                        <p>Building on the self-diagnosis, our platform will provide you with a personalized list of Asian therapists who have the relevant skills, experience and qualifications to best support you.</p><br>
                        <div class="signup" data-page="therapist" data-button="second">
                            <button class="btn btn-flat btn-modal">SIGN UP</button>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="zoom-in-left" data-aos-delay="400">
                    <div class="card-infos">
                        <div class="d-flex justify-content-center">
                            <h3 class="steps">Express Bookings + Details</h3>
                        </div>
                        <p>We provide relevant insurance information, location / remote meeting capabilities, and integrate with the therapists calendars, so that you can book right away, or when the time is right.</p><br>
                        <div class="signup" data-page="therapist" data-button="third">
                            <button class="btn btn-flat btn-modal">SIGN UP</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="formModalCenter" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title text-center" id="formModalLongTitle">Sign up to get our latest update!</h4>
                    <form class="needs-validation">
                        <input type="email" name="email" autofocus placeholder="somebody@example.com" class="form-control email" required>
                        <div class="invalid-feedback">Please provide a valid email.</div>
                        <div class="text-center">
                            <button class="btn-flat mb-4 submit modal-submit">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            AOS.init({
                duration: 1000
            });
            $(document).ready(function () {
                var anchors = $('a[href^="#"]');
                if (anchors.length) {
                anchors.click(function (e) {
                    // prevent default anchor click behavior
                    e.preventDefault();
                    // store hash
                    var hash = this.hash;

                    if ($(hash).length) {
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top + (-85)
                    }, 500);
                    }
                });
                }
            });
            const open = document.getElementById("open-btn");
            const close = document.getElementById("close-btn");
            open.addEventListener('click', e => {
                document.getElementById("mySidenav").style.width = "100vw";
            })
            close.addEventListener('click', e => {
                document.getElementById("mySidenav").style.width = "0";
            })

            var sideBtns = $(".side-btn");
            if (sideBtns.length) {
                sideBtns.click(function (e) {
                    close.click();
                })
            }
            const initUpdateNavbarOnScroll = () => {
            const navbar = document.querySelector('.navbar-oasis');
            if (navbar) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 0) {
                        navbar.classList.add('navbar-oasis-white');
                    } else {
                        navbar.classList.remove('navbar-oasis-white');
                    }
                });
                }
            }
            document.addEventListener('DOMContentLoaded', () => {
                initUpdateNavbarOnScroll();
            });
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    var email = document.querySelector('.email');
                    function validateEmail(email) {
                        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(email);
                    }
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false || !validateEmail(email.value)) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            var page = '';
            var button = '';
            $('.btn-modal').click(function (e) {
                $('#formModalCenter').modal('show');
                page = $(this).data('page');
                button = $(this).data('button');
            });
            $('.close').click(function (e) {
                $('#formModalCenter').modal('hide');
            });
            $('.modal-submit').click(function (e) {
                e.preventDefault();
                $.post('/contact/store', {
                    email: $('.email')[0].value,
                    page: page,
                    button: button
                }).done(function () {
                    $('#formModalCenter').modal('hide');
                });
            });
            $('.signup').click(function (e) {
                page = $(this).data('page');
                button = $(this).data('button');
                $.post('/click/count_clicks', {
                    page: page,
                    button: button
                }).done(function () {
                });
            });
        </script>
    </body>
</html>
