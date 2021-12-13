<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>CherryShare @yield('title')</title>
</head>
<body>
<div class="dashboard">
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="#" class="brand-logo">
                <i class="fas fa-seedling"></i>
                <span>SHAREMA</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="{{ route('page.show') }}" class="dashboard-nav-item"><i class="fas fa-home"></i>Home</a><a
                    href="{{ route('page.about') }}" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i>About</a>


            <a href="{{ route('chat.list') }}" class="dashboard-nav-item"><i class="far fa-envelope"></i>Messages</a>
            <a href="{{ route('offer.index') }}" class="dashboard-nav-item"><i class="fas fa-users"></i> Offers </a>
            <a href="{{ route('profile.show') }}" class="dashboard-nav-item"><i class="fas fa-user"></i>Profile </a>
            <div class="nav-item-divider"></div>
            <a href="{{ route('signup') }}" class="dashboard-nav-item"><i class="fas fa-user-plus"></i></i>Signup</a>
            <a href="{{ route('logout') }}" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i>Logout</a>

        </nav>
    </div>
    <div class="dashboard-app">
        <header class="dashboard-toolbar"><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col p-5">
                    @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>

<script>
    //starts the carousel
    $('.carousel').carousel()

    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });

   /* var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
        cluster: '{{env("PUSHER_APP_CLUSTER")}}',
        encrypted: true
    });

    var channel = pusher.subscribe('notify-channel');
    channel.bind('App\\Events\\Notify', function(data) {


        $('.chat-messages').append(data.message);



       // alert(data.message);
    });*/
</script>
</body>
</html>
