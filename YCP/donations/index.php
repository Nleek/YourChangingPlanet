<!DOCTYPE html>

<html>
<head>
    <?php include("../includes/head.php");?>
    <title>Donations :: Your Changing Planet</title>
    <style>
        nav{
            background-color: rgba(0,0,0,0.4);
        }
        #landing{
            /*background-image: url('../images/background5.jpeg');*/
            background-color: transparent;
        }
        #tempContent{
            background-color: #fff;
            /*box-shadow: 0px -5px 0px 0px #555;*/
            z-index: 100;
            position: relative;
        }
        .eightyContainer{
            width: 80%;
            margin: 0 auto;
            overflow: auto;
        }
        .eightyContainer a{
            display: block;
            width: 33%;
            text-align: center;
            float: left;
        }
        .eightyContainer a img{
            display: inline-block;
            margin: 0 auto;
            width: 80%;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0); //Start page at top every time it loads.
            getVars(); //Launch the getVars function to update the page variables
            $("html,body,main").css("min-width","auto");
            $("#hamburger").find("img").click(function(){hamburgerMenuIconClick();});
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            //$("nav").find("li").mouseenter(function(){
            //    if(!$(this).hasClass("current")){
            //        var navElem = $(this).attr("id");
            //        animate("element",navElem,"pulse",true);
            //        //console.log($(this).attr("id"));
            //    }
            //});
            $("#landing").vide({
                mp4: "../videos/iceberg-donations.mp4",
                poster: "../images/iceberg-donations.png"
            },{
                 posterType: 'png'
            });
        });
        $(window).bind("load",function(){
            animate("loaded");
            $("#circle").click(function(){
                var toPos = height-$("nav").height();
                scrollToPosition(toPos);    
            });
        });
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

<body data-page="donations">

    <?php include("../includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Donations
            </div>
        </section>
        <div id="circle" class="transition"><img src="../images/downChevron.svg" alt="down" /></div>
        <section id="tempContent" class="halfSection">
            <h2 class="halfTitle">Donate To Organizations Committed To Changing the World</h2>
            <p class="halfP">This is just a website from a technical school, so we can't really offer much for donations. But while building this website, our team really took this cause to heart. So if we inspired you to make some differences in your lifestyle or even just made you more aware, awesome! We're glad! But if you want to go a step further and donate to some actual organizations, we've linked some down below. All of the donations go to further studies of global warming and even eco-friendly projects that make the world a better place. Keep it green, BPA!</p>
            <div class="eightyContainer quarterSection">
                <a class="vertAlign-Margin" href="http://www.greenpeace.org/"><img src="../images/greenpeace-logo.svg" alt="GreenPeace" /></a>
                <a class="vertAlign-Margin" href="http://www.eesi.org/"><img src="../images/eesi-logo.png" alt="EESI" /></a>
                <a class="vertAlign-Margin" href="http://www.nature.org/"><img src="../images/nature-conservancy-logo.png" alt="The Nature Conservancy Logo" /></a>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php");?>
</body>
</html>
