<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $pageTitle; ?> 
    </title>



    <link rel="stylesheet" href="{{ asset('css/frontcss/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/branch.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/booktable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontcss/aboutus.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Nanum Gothic Coding' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/frontcss/lightbox.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body onload="startTime()">



    <!-- -----------Header Section------------ -->


    <section class="header">

        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        <nav class="nav-bar" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>


            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="" width="130" height="60">

            </div>
            <ul>

                <li><a href="/" class="nav-active"><i class="fa fa-home"></i> Home</a></li>


                <li id="branches" style="cursor: pointer"><a><i class="fa fa-link"></i> Branches<i></i></a>
                    <ul>
                        <div class="dropdown">
                            <li><a href="/branches/branch1" class="nav-active" style="color:white"> Pokhara</a></li><br>
                            <br>
                            <li><a href="/branches/branch2" class="nav-active" style="color:white"> Kathmandu</a></li>
                            <br><br>
                            <li><a href="/branches/branch3" class="nav-active" style="color:white"> Ilam </a></li>
                        </div>
                    </ul>
                </li>


                <li><a href="/services"><i class="fa fa-server"></i> Services</a></li>
                <li><a href="/gallery"><i class="fa fa-film"></i> Gallery</a></li>
                <li><a href="/events"><i class="fa fa-calendar"></i> Events</a></li>

                <li><a href="/about"><i class="fa fa-grav"></i> About Us</a> </li>

                <li><a href="/contact"><i class="fa fa-handshake-o"></i> Contact Us</a></li>
                <li style="border:0.5px solid white; padding:3px 5px;">
                    <a href="/reservation"><i class="fa fa-paper-plane "></i> Reservation</a>
                </li>
                {{-- <li style="solid white; padding:3px 5px;">
                    <a href="/login"><i class="fa fa-sign-in "></i> Login</a>
                </li> --}}
            </ul>



        </nav>
    </section>






    {{-- ----------dynamic content---- --}}
    <section>



        <div class="text-box" data-aos="zoon-in" data-aos-duration="1000">


            <p>{{$text}}</p>
            <h1>{{$title}}</h1>
            <div>
                <h2 id="time"></h2>
                <p>Lost time is never found again</p>
            </div>

        </div>
    </section>

    @yield('event')



    <!-- ------------------Footer-------------- -->
    <section class="footer">

        <div class="icons"></div>
        <a href=""><i class="fa-brands fa-facebook" style="color:white"></i></a>
        <a href=""> <i class="fa-brands fa-twitter" style="color:white"></i></a>
        <a href=""><i class="fa-brands fa-linkedin" style="color:white"></i></a>
        <a href=""><i class="fa-brands fa-instagram" style="color:white"></i></a>

        <p id="bholenath">© 2022 All Rights Reserved Terms of Use and Privacy Policy. Design by BHOLENATH <img
                src="{{ asset('/images/Shiva.png') }}" style="height:40px; width:40px; " alt="">.

        </p>

    </section>


    <script>
        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            setTimeout(startTime, 1000);
        }


        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>



    <script src="{{ asset('js/frontjs/lightbox-plus-jquery.js') }}"></script>
    <script src="{{ asset('js/frontjs/menu.js') }}"></script>

    <script src="https://kit.fontawesome.com/77454ad617.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
