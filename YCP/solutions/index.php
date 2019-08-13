<!DOCTYPE html>

<html>
<head>
    <?php include("../includes/head.php");?>
    <title>Solutions :: Your Changing Planet</title>
    <style>
        nav{
            background-color: rgba(0,0,0,0.4);
        }
        #landing{
            /*background-image: url('../images/background3.jpg');*/
            /*background-image: url('../images/solutions.jpeg');*/
            background-color: transparent;
        }
        #tempContent{
            background-color: #fff;
            /*box-shadow: 0px -5px 0px 0px #555;*/
            z-index: 100;
            position: relative;
        }
        #firstImageContainer{
            background-image: url('../images/car.jpg');
        }
        #secondImageContainer{
            background-image: url('../images/window.jpg');
        }
        #thirdImageContainer{
            background-image: url('../images/recycle.jpg');
        }
        #fourthImageContainer{
            background-image: url('../images/water.jpg');
        }
        .colorSeperator{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .title{
            font-family: "muli";
            font-size: 2.5em;
            text-align: center;
            padding: 30px;
            color: #f0f0f0;
            background-color: #4A5977;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            margin: 0;
        }
        .title span{
            font-size: 1.2em;
            font-weight: bold;
            padding: 10px;
        }
        .vertAlign{
            font-family: "Muli";
            width: 80%;
            margin: 0 auto;
            display: block;
        }
        .at4-share-outer{
            display: none;
        }
        footer{
            display: block;
            overflow: visible;
        }
        .biggerfont{
            font-size: 1.1em;
            color: #696969;
        }
        .mobile > .biggerfont{
            font-size: 1.5em;
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
            var windmills = new Waypoint({
                element: document.getElementById('windmills'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","windmills-title","fadeInRight",true);
                        setTimeout(function(){$("#windmills-content").css({"display":"block"});},10);
                    }
                    getVars("preventautocenter");
                },
                offset: "50%"
            });
            var solar = new Waypoint({
                element: document.getElementById('solar'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","solar-title","fadeInLeft",true);
                        setTimeout(function(){$("#solar-content").css({"display":"block"});},10);
                        getVars();
                    }
                    getVars("preventautocenter");
                },
                offset: "70%"
            });
            var reduce = new Waypoint({
                element: document.getElementById('reduce'),
                handler: function(direction) {
                    if(direction=="down"){
                        //animate("element","reduce-title","fadeInDown",true);
                        $("#reduce-title").css({"display":"block"});
                    }
                    getVars("preventautocenter");
                },
                offset: "90%"
            });
            var deforest = new Waypoint({
                element: document.getElementById('deforest'),
                handler: function(direction) {
                    if(direction=="down"){
                        //animate("element","deforest-title","fadeInDown",true);
                        $("#deforest-title").css({"display":"block"});
                    }
                },
                offset: "80%"
            });
            var recycle = new Waypoint({
                element: document.getElementById('recycle'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","recycle-title","fadeInRight",false);
                        setTimeout(function(){$("#recycle-content").css({"display":"block"});},10);
                    }
                },
                offset: "50%"
            });
            var shower = new Waypoint({
                element: document.getElementById('shower'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","shower-title","fadeInLeft",false);
                        setTimeout(function(){$("#shower-content").css({"display":"block"});},10);
                    }
                },
                offset: "50%"
            });
        }
        function smallCheck(){
            var fps = $("#windmills").find(".left,.right");//First Parent Section
            var sps = $("#solar").find(".left,.right");//Second Parent Section
            var tps = $("#recycle").find(".left,.right");//Third Parent Section
            var rps = $("#shower").find(".left,.right");//Fourth Parent Section
            var ismobi = navigator.userAgent.match(/Mobi/i);
            if(width<880||ismobi){
                $(".imgBB").css("line-height",halfHeight+"px");
                //*******Adjust the first section*******
                fps.removeClass("halfWidth");
                fps.css({"width":"100%"});
                fps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center","line-height":""});
                //*******Adjust the second section*******
                sps.removeClass("halfWidth");
                sps.css({"width":"100%"});
                sps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center","line-height":""});
                //*******Adjust the third section*******
                tps.removeClass("halfWidth");
                tps.css({"width":"100%"});
                tps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center","line-height":""});
                //*******Adjust the fourth section*******
                rps.removeClass("halfWidth");
                rps.css({"width":"100%"});
                rps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":"center","line-height":""});
            }
            else{
                //*******Adjust the first section*******
                fps.css({"width":""});
                fps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                fps.addClass("halfWidth");
                //*******Adjust the second section*******
                sps.css({"width":""});
                sps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                sps.addClass("halfWidth");
                //*******Adjust the third section*******
                tps.css({"width":""});
                tps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                tps.addClass("halfWidth");
                //*******Adjust the fourth section*******
                rps.css({"width":""});
                rps.find(".vertAlign").css({"padding-left":"50px","padding-right":"50px","text-align":""});
                rps.addClass("halfWidth");
            }
            getVars();
        }
        window.onbeforeunload = function(){window.scrollTo(0,0);} //Start page at top every time it loads.
        $(document).ready(function(){
            getVars(); //Launch the getVars function to update the page variables
            $("html,body,main").css("min-width","auto");
            smallCheck();
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            initWaypoints();
            $("#landing").vide({
                mp4: "../videos/solar.mp4",
                poster: "../images/solar.png"
            },{
                 posterType: 'png'
            });
            $("#hamburger").find("img").click(function(){hamburgerMenuIconClick();});
        });
        $(window).bind("load",function(){
            animate("loaded");
            $("#circle").click(function(){
                var toPos = height-$("nav").height();
                scrollToPosition(toPos);    
            });
            $(".imgBG").each(function(){$(this).css({"line-height":halfHeight+"px"});});
            smallCheck();
        });
        $(window).scroll(function(){
            getVars("preventautocenter");
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
        });
        $(window).resize(function(){
            getVars(); //Launch the getVars function to update the page variables
            smallCheck();
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
        });
    </script>
</head>

<body data-page="solutions">

    <?php include("../includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Solutions
            </div>
        </section>
        <div id="circle" class="transition"><img src="../images/downChevron.svg" alt="down" /></div>
        <section id="intro" class="quarterSection">
            <h2 id="introHeader">What Can We Do?</h2>
            <p id="introContent">
                Global warming is often a subject that people push to the side, thinking "I can't make a difference", but you can. The whole process actually starts with you! Imagine if you and every single person reading this, started to make differences in their daily lifestyle. And then imagine communities getting involved and making greener choices! The effect is greater then you may think! While global warming isn't an overnight fix, these small differences can help turn the planet around. And if you don't really know where to start, here is a good place.
            </p>
        </section>
        <section class="colorSeperator" id="reduce">
            <h2 class="title" id="reduce-title">Reduce Emissions</h2>
        </section>
        <section class="halfSection backgroundColor" id="windmills">
            <div class="halfWidth right imgBG" id="firstImageContainer"><span id="windmills-title">Go Green</span></div>
            <div class="halfWidth left" id="windmills-content">
                <span class="vertAlign biggerfont">Earth-friendly cars are becoming more popular than ever! Purchasing a car with the best fuel economy will limit the pollution in the air and help with gas milage. Every gallon of gas is equivalent to twenty-five pounds of heat-trapping gas that is released into the atmosphere. Some cars even run strictly on electricity! How cool is that? Now we're not telling you to go out and buy a brand new energy efficient car, but just be aware that burning gas is a contributor to global warming. And an environmentally friendly car will not only help save the Earth, but also a few dollars in your pocket.</span>
            </div>
        </section>
        <section class="halfSection backgroundColor" id="solar">
            <div class="halfWidth left imgBG" id="secondImageContainer"><span id="solar-title">Efficiency</span></div>
            <div class="halfWidth right" id="solar-content">
                <span class="vertAlign biggerfont">Keep your home air tight. By sealing your windows, and the bottom of a drafty door, you will save fifteen to twenty-five percent of heat that may have be escaping. This will save you money, and help reduce the impact of global warming. This tip goes hand and hand with using a programmable thermostat. By keeping your thermostat at a comfortable temperature throughout the day, and reducing the heat (or increasing in the summertime) while you are away or at work, will save heat.</span>
            </div>
        </section>
        <section class="colorSeperator" id="deforest">
            <h2 class="title" id="deforest-title">Conserve Resources</h2>
        </section>
        <section class="halfSection backgroundColor" id="recycle">
            <div class="halfWidth right imgBG" id="thirdImageContainer"><span id="recycle-title">Recycle</span></div>
            <div class="halfWidth left" id="recycle-content">
                <span class="vertAlign biggerfont">By recycling, you're doing everyone a favor. It significantly reduces the amount of waste that we bury in landfills, and reducing the amount of pollution because factories no longer need to make a product from raw materials. It also creates well-paying jobs in recycling and manufacturing industries in the United States, as well as securing the environment for our future generations to come. So start a recycling bin at home, you can recycle cans, papers, plastics, and even glasses!</span>
            </div>
        </section>
        <section class="halfSection backgroundColor" id="shower">
            <div class="halfWidth left imgBG" id="fourthImageContainer"><span id="shower-title">Water</span></div>
            <div class="halfWidth right" id="shower-content">
                <span class="vertAlign biggerfont">Every morning, you get up, you take your shower right? Sing a little song, take your sweet time? Well, take this into perspective.. A ten minute shower, at 2.5 gallons per minute, is a 25 gallon shower! That's a lot of water! If you use a low-flow shower head, you can save 15 gallons of water during that 10-minute shower! You're probably wondering why it's important to cut down on your precious shower time, right? Well that's easy. Conserving water can also save energy. In order to pump the water from a central facility into your home or office, energy is required to run that equipment. It also helps in protecting our natural ecosystems from further damage, which is especially important for the survival of some endangered species. And, on top of it all- it's will save you some money too!</span>
            </div>
        </section>
        <!--<section class="halfSection backgroundColor" id="nature">
            <div class="halfWidth left" id="nature-content">
                <span class="vertAlign">Every year, forests the size of Panama are being cut down. And at the current rate of deforestation, our rainforest could be completely vanished within one hundred years! Logging operations all around the world cut down forest, some even acting illegally. The quickest, and maybe not the easiest solutions to this is to just stop cutting down trees. There are hundreds of partitions that people sign all the time, and since then the rate of deforestation has decreased slightly. But with finacial realities, that makes it unlikely to ever really come to a complete halt. But to help with this problem, go out and plant some trees! Every tree makes a difference!</span>
            </div>
            <div class="halfWidth right imgBG" id="thirdImageContainer"><span id="nature-title">Nature</span></div>
        </section>
        <section class="halfSection backgroundColor" id="solar">
            <div class="halfWidth right" id="oceans-content">
                <span class="vertAlign">Keep your home air tight. By sealing your windows, and the bottom of a drafty door, you will save fifteen to twenty-five percent of heat that may have be escaping. This will save you money, and help reduce the impact of global warming. This tip goes hand and hand with using a programmable thermostat. By keeping your thermostat at a comfortable time of the day, and reducing the heat (or increasing in the summertime) while you are away or at work, will save heat.</span>
            </div>
            <div class="halfWidth right imgBG" id="secondImageContainer"><span id="solar-title" class="vertAlign">Efficiency</span></div>
        </section>-->
    </main>
    <?php include("../includes/footer.php");?>
</body>
</html>
