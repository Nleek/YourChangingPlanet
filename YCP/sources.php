<!DOCTYPE html>

<html>
<head>
    <?php include("includes/head.php");?>
    <title>Home :: Your Changing Planet</title>
    <style>
        nav h3{
            display: none;
        }
        nav ul li{
            display: none;
        }
        /*    ---- Landing Page ----    */
        #landing{
            background-image: url('http://www.yourchangingplanet.com/images/earth3.jpg');
            min-height: 400px;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            background-color: #000;
            overflow: auto;
            background-attachment: fixed;
            box-shadow: 0px 0px 0px 0px #000;
            text-align: center;
        }
        .bgimg{
            background-image: url('http://www.yourchangingplanet.com/images/earth3.jpg');
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            background-color: #000;
            background-attachment: fixed;
            color: #fafafa;
        }
        #title{
            margin:0 auto;
            display: block;
        }
        section h1{
            padding-left: 10%;
            padding-right: 10%;
            text-transform: uppercase;
            margin: 0;
            font-family: "Montserrat";
        }
        .textLeft{
            text-align: left;
        }
        .textCenter{
            text-align: center;
            font-family: "Muli";
        }
        .textRight{
            text-align: right;
        }
        .small{
            height: 100px;
        }
    </style>
    <script>
        function initWaypoints(){
            var nav = new Waypoint({
                element: document.getElementById("first"),
                handler: function(direction) {
                    if(direction=="down"){
                        $("nav").css({"background-color":"rgba(0,0,0,0.4)"});
                    }
                    else{
                        $("nav").css({"background-color":"transparent"});
                    }
                },
                offset: "bottom-in-view"
            });
        }
        $(document).ready(function(){
            initWaypoints();
            getVars(); //Launch the getVars function to update the page variables
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
        });
        $(window).bind("load",function(){
            $("nav").find("h3").css({"display":"block"}).addClass("animated fadeInLeft");
            $("nav").find("li").each(function(){$(this).css({"display":"block"}).addClass("animated fadeInRight");});
            animate("loaded");
            //animate("element","caption","fadeInLeft");
        });
        //$(window).bind('mousewheel DOMMouseScroll', function(e) {
        //    var wheelDelta = e.originalEvent.wheelDelta;
        //    scrollCheck(wheelDelta);
        //});
        $(window).scroll(function(){
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
        });
        $(window).resize(function(){
            getVars(); //Launch the getVars function to update the page variables
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
        });
    </script>
</head>

<body data-page="citations">

    <?php include("includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Sources
            </div>
        </section>
        <section id="first" class="quarterSection"><h2 class="vertAlign textCenter">
            All of our scientific data was collected from the following sources:
        </h2></section>
        <section class="small backgroundColor">
            <h1 class="vertAlign textCenter"><a href="http://climate.nasa.gov">Climate.NASA.gov</a></h1>
        </section>
        <section class="small">
            <h1 class="vertAlign textCenter"><a href="http://list25.com/25-alarming-global-warming-statistics/5/">List25.com</a></h1>
        </section>
        <section class="small backgroundColor">
            <h1 class="vertAlign textCenter"><a href="http://www.justfacts.com/globalwarming.asp">JustFacts.com</a></h1>
        </section>
        <section class="small">
            <h1 class="vertAlign textCenter"><a href="http://www.ucsusa.org/global_warming/what_you_can_do/ten-personal-solutions-to.html#.Vr0uF0U8KJK">UCSUSA.org</a></h1>
        </section>
        <section class="small backgroundColor">
            <h1 class="vertAlign textCenter"><a href="http://www.clean-air-kids.org.uk/">Clean-Air-Kids.org</a></h1>
        </section>
        <section class="quarterSection"><h3 class="vertAlign textCenter">
            All images that were used in the making of this site are in the public domain and were aquired from a variety of sources, including wikipedia. We purchased the videos used on the site from POND5.com. 
        </h3></section>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>