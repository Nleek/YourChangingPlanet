<!DOCTYPE html>

<html>
<head>
    <?php include("../includes/head.php");?>
    <title>Facts :: Your Changing Planet</title>
    <style>
        html,body{
            overflow-x: hidden;
        }
        nav{
            background-color: rgba(0,0,0,0.4);
        }
        #landing{
            /*background-image: url('../images/background1.jpg');*/
            background-color: transparent;
        }
        #firstImageContainer{
            background-image: url('../images/riverbed.jpg');
        }
        #secondImageContainer{
            background-image: url('../images/glacier.jpg');
        }
        .fullImageContainer{
            background-image: url('../images/icemeltingbg.png');
        }
        #bubbles{
            width:100%;
            overflow: hidden;
            position: relative;
            background-color: #546992;
            color: #c5c5c5 !important;
            font-size: 1em;
        }
        #bubblesCenter{
            overflow: auto;
        }
        #bubbles *{
            color: #f0f0f0 !important;
        }
        .largerText{
            font-size: 2.7em;
        }
        .textCenter{
            text-align: center;
        }
        #bubbleContainer{
            position: absolute;
            left: 0px;
            text-align: center;
            color: inherit;
        }
        #bubbleContainer .bubble{
            display: inline-block;
        }
        #bubbleContainer .bubble a{
            display: inline-block;
            width: 200px;
            height: 130px;
            padding: 10px;
            padding-top: 70px;
            padding-bottom: 10px;
            text-align: center;
            border-radius: 50% 50%;
            border: 2px solid #c5c5c5;
            font-size: 20px;
            font-family: "Work Sans";
            float: left;
            margin: 20px;
        }
        #bubbleContainer .bubble:hover{
            -ms-transform: translate(0px,-20px); /* IE 9 */
            -webkit-transform: translate(0px,-20px); /* Safari */
            transform: translate(0px,-20px);
            border-color: #fff;
            color: #fff;
        }
        #bubbleContainer a{
            text-decoration: none;
            color: inherit;
        }
        .vertAlign > p{
            font-family: "Muli";
            color: #696969;
            width: 80%;
            margin: 0 auto;
            font-size: 1.1em;
        }
        .vertAlign{
            font-family: "Muli";
            font-size: 1em;
        }
        .halfP{
            font-size: 1em;
        }
        footer{
            display: block;
            overflow: visible;
        }
    </style>
    <script>
        function initWaypoints(){
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
            var facts1 = new Waypoint({
                element: document.getElementById('facts1'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","facts1-title","fadeInRight");
                        setTimeout(function(){
                            animate("element","facts1-list","fadeInLeft");
                        },0);
                    }
                    else{
                        animate("element","facts1-title","fadeOutRight",true);
                        setTimeout(function(){
                            animate("element","facts1-list","fadeOutLeft");
                        },0);
                    }
                },
                offset: "70%"
            });
            var facts2 = new Waypoint({
                element: document.getElementById('facts2'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","facts2-title","fadeInLeft");
                        setTimeout(function(){
                            animate("element","facts2-list","fadeInRight");
                        },0);
                    }
                    else{
                        animate("element","facts2-title","fadeOutLeft",true);
                        setTimeout(function(){
                            animate("element","facts2-list","fadeOutRight");
                        },0);
                    }
                },
                offset: "70%"
            });
        }
        function local(){
            $("html,body,main").css("min-width","auto");
            var bubble = $("#bubbleContainer");
            var containerHeight = quarterHeight*3;
            //$("video").css({"height":vidheight+"px !important","width":width+"px"});
            var elemsHeight = bubble.parent().find("h3").height() + bubble.parent().find("p").height();
            var bblHeight = bubble.height();
            var vertbblpos = (containerHeight - (elemsHeight + bblHeight)) / 4;
            var bblWidth = bubble.width();
            var horrisbblpos = (width-bblWidth) / 2;
            $("#bubbleContainer").css({"left":horrisbblpos+"px","bottom":vertbblpos+"px"});
        }
        function smallCheck(){
            var fps = $("#facts1").find(".left,.right");//First Parent Section
            var sps = $("#facts2").find(".left,.right");//Second Parent Section
            var ismobi = navigator.userAgent.match(/Mobi/i);
            if(width<880||ismobi){
                //*******Adjust the first section*******
                fps.removeClass("halfWidth");
                fps.css({"width":"100%"});
                fps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center"});
                //*******Hide the bubble spacer*******
                $("#bubbleContainer").css("display","none");
                $("#bubblesCenter").addClass("inlineVertAlign-35");
                //*******Adjust the second section*******
                sps.removeClass("halfWidth");
                sps.css({"width":"100%"});
                sps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center"});
                
            }
            else{
                //*******Adjust the first section*******
                fps.css({"width":""});
                fps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                fps.addClass("halfWidth");
                //*******Hide the bubble spacer*******
                $("#bubblesCenter").removeClass("inlineVertAlign-35");
                $("#bubbleContainer").css("display","block");
                //*******Adjust the second section*******
                sps.css({"width":""});
                sps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                sps.addClass("halfWidth");
            }
            getVars();
        }
        window.onbeforeunload = function(){window.scrollTo(0,0);} //Start page at top every time it loads.
        $(document).ready(function(){
            getVars(); //Launch the getVars function to update the page variables
            smallCheck();
            $(".imgBG").css({"line-height":halfHeight+"px"});
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            initWaypoints();
            local();
            $("#hamburger").find("img").click(function(){hamburgerMenuIconClick();});
            $("#landing").vide({
                mp4: "../videos/factsVBG.mp4",
                poster: "../images/factsVBGP.png"
            },{
                 posterType: 'png'
            });
        });
        $(window).bind("load",function(){
            smallCheck();
            animate("loaded");
            $("#circle").click(function(){
                var toPos = height-$("nav").height();
                scrollToPosition(toPos);    
            });
        });
        $(window).scroll(function(){
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            local();
        });
        $(window).resize(function(){
            getVars(); //Launch the getVars function to update the page variables
            smallCheck();
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            local();
        });
    </script>
</head>

<body data-page="facts">

    <?php include("../includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Facts
            </div>
        </section>
        <div id="circle" class="transition"><img src="../images/downChevron.svg" alt="down" /></div>
        <section id="intro" class="quarterSection">
            <h2 id="introHeader">Our World Is Changing.</h2>
            <p id="introContent">
                Global Warming: many think it's a joke, or a hoax, but it is slowly taking over our planet. Historical landmarks such as  Montana Glacier National Park has lost 70% of their glaciers since 1910. The Arctic Sea also has lost 400,000 square miles of ice due to increasing temperatures, and it is estimated that within the next one hundred years, sea level will rise at least seven feet, and will directly affect those living in coastal cities. We've all heard it before; the polar bears will go extinct! But there's also an estimated one hundred species that will become extinct due to global warming controlling their habitat and climate within the next 25 years. It's time to listen up. The world we live in is changing, and we have the facts to prove it.. 
            </p>
        </section>
        <section class="halfSection firstThreeFourths" id="facts1">
            <div class="halfWidth right imgBG" id="firstImageContainer"><span id="facts1-title">What is it?</span></div>
            <div class="halfWidth left">
                <p class="vertAlign">
                    To keep it simple, global warming is caused by increasing greenhouse gases collecting in the Earth's atmosphere. Greenhouse gasses are what make the earth habitable for humans and animals, but because of their increasing density in the atmosphere (from fossil fuels) they are largely responsible for the rise of the earth's temperature. These gases trap the sun's heat around the earth like a blanket that is getting progressively thicker. This results in many different effects, but the main one is the melting of the ice caps.
                </p>
            </div>
        </section>
        <section id="bubbles" class="three-fourthsHeight backgroundColor">
            <div id="bubblesCenter" class="">
                <h3 class="halfTitle largerText">Is the Temperature Really Changing?</h3>
                <p class="halfP textCenter">Yes! Even though temperatures in local areas can fluctuate naturally, over the past 50 or so years the average global temperature has increased at the fastest rate ever recorded. Even experts think the trend is increasing because the last 10 hottest years have occurred since 1990. Scientist even say that unless we curb these global warming emissions, the average U.S. temperatures would be 3 to 9 degrees higher at the end of the century!</p>
                <div id="bubbleContainer">
                    <div class="bubble transition"><a href="../causes/">What are some causes of global warming?</a></div>
                    <div class="bubble transition"><a href="../effects/">How does global warming affect the environment?</a></div>
                    <div class="bubble transition"><a href="../solutions/">How can I get involved?</a></div>
                </div>
            </div>
        </section>
        <section class="halfSection firstThreeFourths" id="facts2">
            <div class="halfWidth left imgBG" id="secondImageContainer"><span id="facts2-title">Research</span></div>
            <div class="halfWidth right">
                <p class="vertAlign">Multiple scientific observations have been made throughout the years that have made it very evident that our world is changing, and many research projects have been done to prove that greenhouse gases emitted from human activities are to blame. Even small increases in Earth's temperature caused by climate change can have severe effects. Although it may not affect us directly, if we don't start preventing climate change now, research shows we may never be able to bounce back from it later on down the road.</p>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php");?>
</body>
</html>
