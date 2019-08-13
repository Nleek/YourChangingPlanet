<!DOCTYPE html>

<html>
<head>
    <?php include("../includes/head.php");?>
    <title>Effects :: Your Changing Planet</title>
    <style>
        nav{
            background-color: rgba(0,0,0,0.4);
        }
        #landing{
            /*background-image: url('../images/background4.jpg');*/
            background-color: transparent;
        }
        #tempContent{
            background-color: #fff;
            /*box-shadow: 0px -5px 0px 0px #555;*/
            z-index: 100;
            position: relative;
        }
        .fullImageContainer{
            background-image: url('../images/seals.png');
        }
        .chart{
            height: 300px;
            width: 80%;
            margin: 0 auto;
            margin-top: 20px;
        }
        .spacer{
            background-image: url('../images/iceburg.jpg');
            box-shadow: inset 0px 0px 10px #505050;
        }
        .halfTitleP button{
            padding: 10px;
            border: none;
            text-align: center;
            border: 3px solid rgba(85,111,238,1);
            background-color: transparent;
            color: #686868;
            font-family: "Montserrat";
            text-transform: uppercase;
            font-size: 1em;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .halfTitleP button:hover{
            background-color: rgba(85,111,238,1);
            color: #fff;
            cursor: pointer;
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
            var tellme = new Waypoint({
                element: document.getElementById('tellme'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","imageTitle","fadeInLeft");
                    }
                    else{
                        animate("element","imageTitle","fadeOutRight",true);
                    }
                },
                offset: "70%"
            });
        }
        window.onbeforeunload = function(){window.scrollTo(0,0);} //Start page at top every time it loads.
        $(document).ready(function(){
            getVars(); //Launch the getVars function to update the page variables
            $("html,body,main").css("min-width","auto");
            var scrollPos = $(window).scrollTop();
            parallaxTitle(scrollPos);
            initWaypoints();
            $("#landing").vide({
                mp4: "../videos/polarbear.mp4",
                poster: "../images/polarbear.png"
            },{
                 posterType: 'png'
            });
            var tempchart = new CanvasJS.Chart("warmingChart",
                {
                  backgroundColor: "#fafafa",
                  theme: "theme2",
                  title:{
                    fontFamily:"Work Sans",
                    text: "Average Global Temperature (degrees / year)"
                  },
                  animationEnabled: true,
                  axisY:{
                    labelFontSize: 14,
                    includeZero: false,
                    labelFontFamily: "work sans",
                  },
                  axisX:{
                    interval:10,
                    labelFontSize: 14,
                    labelFontFamily: "work sans",
                    intervalType: "year"
                  },
                  data: [
                  {        
                    type: "spline",
                    //lineThickness: 3,        
                    dataPoints: [
                    { x: new Date(1880, 06, 1), y: 56.7},
                    { x: new Date(1890, 06, 1), y: 56.6},
                    { x: new Date(1900, 06, 1), y: 56.9},
                    { x: new Date(1910, 06, 1), y: 56.4},
                    { x: new Date(1920, 06, 1), y: 56.65},
                    { x: new Date(1930, 06, 1), y: 56.65},
                    { x: new Date(1940, 06, 1), y: 57.25},
                    { x: new Date(1950, 06, 1), y: 57},
                    { x: new Date(1960, 06, 1), y: 57.1},
                    { x: new Date(1970, 06, 1), y: 57.25},
                    { x: new Date(1980, 06, 1), y: 57.75},
                    { x: new Date(1990, 06, 1), y: 57.9},
                    { x: new Date(2000, 06, 1), y: 57.91},
                    { x: new Date(2010, 06, 1), y: 58.2},
                    ]
                  }
                  
                  
                  ]
                });
            tempchart.render();
            var meltingchart = new CanvasJS.Chart("meltingChart",
                {
                  theme: "theme2",
                  title:{
                    fontFamily:"Work Sans",
                    fontSize:20,
                    text: "Change in Sea Level (inches / year)"
                  },
                  animationEnabled: true,
                  axisY:{
                    labelFontSize: 14,
                    includeZero: false,
                    labelFontFamily: "work sans",
                  },
                  axisX:{
                    interval:10,
                    labelFontSize: 14,
                    labelFontFamily: "work sans",
                    intervalType: "year"
                  },
                  data: [
                  {        
                    type: "spline",
                    //lineThickness: 3,        
                    dataPoints: [
                    { x: new Date(1880, 06, 1), y: 0},
                    { x: new Date(1890, 06, 1), y: 0.9},
                    { x: new Date(1900, 06, 1), y: 1.75},
                    { x: new Date(1910, 06, 1), y: 2},
                    { x: new Date(1920, 06, 1), y: 2},
                    { x: new Date(1930, 06, 1), y: 2.1},
                    { x: new Date(1940, 06, 1), y: 3.7},
                    { x: new Date(1950, 06, 1), y: 4.25},
                    { x: new Date(1960, 06, 1), y: 5.9},
                    { x: new Date(1970, 06, 1), y: 5.8},
                    { x: new Date(1980, 06, 1), y: 6},
                    { x: new Date(1990, 06, 1), y: 6.5},
                    { x: new Date(2000, 06, 1), y: 7.95},
                    { x: new Date(2010, 06, 1), y: 8.25},
                    ]
                  }
                  
                  
                  ]
                });
            tempchart.render();
            meltingchart.render();
            $(".halfTitleP").find("button").click(function(){
                window.location.href="../solutions/";    
            });
            $("#hamburger").find("img").click(function(){hamburgerMenuIconClick();});
        });
        $(window).bind("load",function(){
            animate("loaded");
            $("#circle").click(function(){
                var toPos = height-$("nav").height();
                scrollToPosition(toPos);    
            });
            $("#imageTitle").parent().css({"line-height":$("#imageTitle").parent().height()+"px"});
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

<body data-page="effects">

    <?php include("../includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Effects
            </div>
        </section>
        <div id="circle" class="transition"><img src="../images/downChevron.svg" alt="down" /></div>
        <section id="intro" class="quarterSection">
            <h2 id="introHeader">How Does This Effect Us?</h2>
            <p id="introContent">
                Global warming affects species all over the world. From plants and animals, to the human population, everyone will feel the effects of global warming. One effect of global warming is the warming weather. With Earth's temperatures rising, the seasons will become hotter. This directly affects the amount of rainfall during already warm months, such as June, July, and August. Shortage of rainfall will affect the amount of water available for clean showering, and drinking. A shortage of water will cause in increase of wildfires across the globe. It will also affect the growing of crops, which may lead to a food shortage. But this will not only affect humans, but plants and animals too. When a drought occurs, their food supply and habitat will also be damaged.
            </p>
        </section>
        <section id="tellme" class="halfSection fullImageContainer imgBG" style="min-height: 370.5px;">
            <div id="imageTitle" class="hide">Statistics</div>
        </section>
        <section class="quarterSection backgroundColor bottomPadding">
            <div class="halfTitle">
                Our World is Warming Up
            </div>
            <div class="halfTitleP">
                With crops such as sugarcane growing in cooler temperatures, rising heat will limit the growth of these crops. Many crops needing water to grow will also be affected by droughts. With many crops becoming harder to grow, food prices will increase, leaving many people hungry and passing from famine. The graph below shows the average global temperature from 1881 to 2011. Although it may seem like a small change, it has a massive impact.
            </div>
            <div id="warmingChart" class="chart"></div>
        </section>
        <div class="spacer imgBG quarterSection"></div>
        <section class="quarterSection bottomPadding">
            <div class="halfTitle">
                And It's Starting to Melt
            </div>
            <div class="halfTitleP">
                As the higher temperatures melt ice caps and glaciers, our oceans will expand. With large pieces of the world melting, such as Antarctica and Greenland, the large amounts of water will flood into the sea. As sea levels rise, low elevation areas may find themselves 'under the sea'. Many people around the world will find themselves rehoming due to flooding. With that said, this graph shows the rise in sea level from 1881 to 2011. A whole 8.25 inches, is a lot in just 20 years!
            </div>
            <div id="meltingChart" class="chart"></div>
        </section>
        <div class="spacer imgBG quarterSection"></div>
        <section class="halfSection backgroundColor">
            <div class="inlineVertAlign">
                <div class="halfTitle">
                    This Melting Disrupts Natural Habitats
                </div>
                <div class="halfTitleP">
                    Global warming will also put many species of plants and animals in danger. With species adapted to colder temperatures, such as polar bears, penguins, and arctic fox - their species will start to become more and more extinct. Rising temperatures will also affect their habitat. With ice caps melting, these species will not have a space to reside. By 2050, the estimated population of polar bears will drop by 2/3. Which leaves us to wonder if our grandchildren will even live to see them?
                </div>
                <p class="halfTitleP"><button class="transition">Become Part of the Solution</button></p>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php");?>
    <script src='<?php echo"$BaseURL"; ?>/js/jquery.canvasjs.min.js'></script>
</body>
</html>
    