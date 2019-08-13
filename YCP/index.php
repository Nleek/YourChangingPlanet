<!DOCTYPE html>

<html>
<head>
    <?php include("includes/head.php");?>
    <script src="js/jquery.collagePlus.min.js"></script>
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <title>Home :: Your Changing Planet</title>
    <style>
        nav h3{
            display: none;
        }
        nav ul li{
            display: none;
        }
        #preloader{
            z-index: 100000000;
            position: fixed;
            top: 0px;
            left: 0px;
            text-align: center;
            background-color: white;
            width: 100%;
            text-align: center;
            font-family: "muli";
            font-size: 1.4em;
            color: #ACC8F2;
        }
        #preloader img{
            margin: 0 auto;
            display: block;
            width: 73px;
        }
        /*    ---- Landing Page ----    */
        #landing{
            /*background-image: url('http://www.yourchangingplanet.com/images/earth3.jpg');*/
            min-height: 400px;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            background-color: transparent;
            overflow: auto;
            background-attachment: fixed;
            box-shadow: 0px 0px 0px 0px #000;
        }
        #introHeader span{
            border-bottom: 3px solid #4A5977;
        }
        #introContent span{
            font-size: 2em;
            font-weight: 300;
            font-family: "Muli";
        }
        #introContent span img{
            height: 120px;
            -ms-transform: rotate(4deg); /* IE 9 */
            -webkit-transform: rotate(4deg); /* Safari */
            transform: rotate(4deg);
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
            /*margin-top: 20%;  Instead of using a static margin, were going center this with JS */
            padding: 25px;
            border-top: 2px solid #fff;
            border-bottom: 2px solid #fff;
            color: #fff;
            text-align: center;
            max-width: 600px;
            font-family: "Montserrat";
            font-size: 3.4em;
            text-transform: uppercase;
            font-weight: 400;
            display: none;
            text-shadow: 0px 0px 4px #000;
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
        }
        .textRight{
            text-align: right;
        }
        #buttonCont{
            background-color: #4A5977;
            position: relative;
        }
        #buttonCont button{
            position: absolute;
            top:0;
            left:35%;
            width: auto;
            background-color: #fff;
            color: #4A5977;
            border-radius: 0px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 16px;
            padding-right: 16px;
            border: 2px solid #fff;
            font-family: "muli";
            font-size: 2em;
        }
        #buttonCont button:hover{
            color: #fff;
            background-color: #4A5977;
            cursor: pointer;
        }
        
        #Collage{
            padding: 0;
            overflow-y: hidden;
        }
        #Collage img{
            opacity: 0;
        }
    </style>
    <script>
        function local(){
            loadAnimation();
            $("html,body,main").css("min-width","auto");
            $(".buttonCenter").each(function(){
                var parentWidth = $(this).parent().width();
                var selfWidth = $(this).width();
                
                var selfLeftPadding = $(this).css("padding-left");
                selfLeftPadding = selfLeftPadding.replace("px","");
                selfLeftPadding = Number(selfLeftPadding);
                var selfRightPadding = $(this).css("padding-right");
                selfRightPadding = selfRightPadding.replace("px","");
                selfRightPadding = Number(selfRightPadding);
                var selfPadding = selfLeftPadding + selfRightPadding;
                selfWidth += selfPadding;
                
                selfWidth += 4;
                var centeringValue = parentWidth/2 - (selfWidth/2);
                
                console.log("selfWidth:"+selfWidth+" selfPadding:"+selfPadding+" centeringValue:"+centeringValue);
                
                var parentHeight = $(this).parent().height();
                var selfHeight = $(this).height();
                
                var vertCenteringValue = (parentHeight/2) - (selfHeight/2);
                console.log("selfHeight:"+selfHeight+" parentHeight:"+parentHeight+" vertCenteringValue:"+vertCenteringValue);
                
                $(this).css({"left":centeringValue+"px","top":vertCenteringValue+"px"});
            });
            $("#preloader").css({"height":(height/2)+(73/2)+"px","padding-top":(height/2)-(73/2)});
        }
        function initWaypoints(){
            var nav = new Waypoint({
                element: document.getElementById("intro"),
                handler: function(direction) {
                    if(direction=="down"){
                        $("nav").css({"background-color":"rgba(0,0,0,0.4)"});
                    }
                    else{
                        $("nav").css({"background-color":"transparent"});
                    }
                },
                offset: "90%"
            });
            var paragraph = new Waypoint({
                element: document.getElementById('intro'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","introContent","fadeInUp");
                        setTimeout(function(){animate("element","introHeader","fadeInUp");},10);
                    }
                    else{
                        setTimeout(function(){animate("element","introContent","fadeOutDown",true);},10);
                        animate("element","introHeader","fadeOutDown",true);
                    }
                },
                offset: "70%"
            });
        }
        function collage() {
            $('.Collage').collagePlus(
                {
                    'fadeSpeed' : 1000,
                    'targetHeight' : 200,
                    'allowPartialLastRow' : false
                }
            );
            local();
        };
        function loadAnimation(){
                setTimeout(function(){$("#preloader").find("span").html(".");
                    setTimeout(function(){$("#preloader").find("span").html("..");
                        setTimeout(function(){$("#preloader").find("span").html("...");
                            setTimeout(function(){$("#preloader").find("span").html("..");
                                setTimeout(function(){$("#preloader").find("span").html(".");
                                    loadAnimation();
                                },700);
                            },700);
                        },700);
                    },700);
                },700);
            }
        $(document).ready(function(){
            $(window).scrollTop(0);
            $(window).scroll(function(e){e.preventDefault();$(window).scrollTop(0);});
            getVars(); //Launch the getVars function to update the page variables
            local();
            $("#hamburger").find("img").click(function(){hamburgerMenuIconClick();});
            $("#landing").vide({
                mp4: "videos/earthSpinning.mp4",
                poster: 'images/home.png',
            },{
                posterType: 'png'    
            });
            $("#buttonCont").find("button").click(function(){
                window.location.href="facts/";    
            });
            $(".Collage").imagesLoaded(function(){
                collage();    
            });
        });
        $(window).bind("load",function(){
            $(window).scrollTop(0);
            $(window).unbind("scroll");
            initWaypoints();
            $("nav").find("h3").css({"display":"block"}).addClass("animated fadeInLeft");
            $("nav").find("li").each(function(){$(this).css({"display":"block"}).addClass("animated fadeInRight");});
            $("#preloader").fadeOut(700,function(){$(this).remove();});
            animate("loaded");
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            $("#circle").click(function(){
                var toPos = height-$("nav").height();
                scrollToPosition(toPos);    
            });
            $(window).scroll(function(){
                var scrollPos = $(window).scrollTop();
                parallaxTitle(scrollPos);
            });
        });
        var resizeTimer = null;
        $(window).bind('resize', function() {
            // hide all the images until we resize them
            // set the element you are scaling i.e. the first child nodes of ```.Collage``` to opacity 0
            $('.Collage .Image_Wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            getVars(); //Launch the getVars function to update the page variables
            local();
        });
    </script>
</head>

<body data-page="home">
    <div id="preloader"><img src="images/earthLoader.gif" alt="Earth Loader" />Your planet is loading<br />please wait<span></span></div>
    <?php include("includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Global Warming
            </div>
        </section>
        <div id="circle" class="transition"><img src="images/downChevron.svg" alt="down" /></div>
        <section id="intro" class="quarterSection">
            <h2 id="introHeader"><span>&nbsp;A Message From The Creators&nbsp;</span></h2>
            <p id="introContent">
                Hello viewers, friends, family and fellow BPA members - welcome to YourChangingPlanet.com! If you were not already aware of the purpose of this site, please allow us to give you a little run down. This year for the 2016 BPA web design topic, our team had to choose to design and present a public service announcement as a website. So we thought "what could be a better subject than the biggest issue our world is facing today; Global warming." When we decided on the topic, I don't think any of us really knew what exactly we were about to get ourselves into. When you sit on a computer day and night looking at the the statistics of the Earth in about 50 years, it really starts to scare you. You see a sad truth that's been stressed for so many years, but yet still is considered a joke to nearly half the population. This project has changed our lives. So yes, although this is just a little website from a team of three hopeful kids trying to make our school proud, it's also stands for so much more than that. If we can just start here.. and know that it reaches the screens of a few friends we meet along the way, or some family members who wanted to see what we've been up too.. then that means we can make a difference, even if it's just a small one. Our world is a beautiful place, and although you may sometimes think otherwise, you have an impact. Just make it a green one.
                <br /><br />
                <span><img alt="-Taylor, Lukas, Nikki" src="images/signatures.png" /></span>
            </p>
        </section>
        <section class="quarterSection textCenter" id="buttonCont">
            <button class="buttonCenter transition">Click Here To Learn More</button>
            <div class="Collage">
                <?php
                    $folderObject = dir('images/collage');
                    $folder = "images/collage";
                    while (false !== ($filename = $folderObject->read())){
                        if($filename!=="."&&$filename!==".."){echo("<img alt=\"$filename\" src=\"$folder/$filename\" />");}
                    }
                    $folderObject->close();
                ?>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>