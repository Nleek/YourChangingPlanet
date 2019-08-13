<!DOCTYPE html>

<html>
<head>
    <?php include("../includes/head.php");?>
    <title>Causes :: Your Changing Planet</title>
    <style>
        nav{
            background-color: rgba(0,0,0,0.4);
        }
        #landing{
            /*background-image: url('../images/traffic.jpg');*/
            background-color: transparent;
        }
        #tempContent{
            background-color: #fff;
            /*box-shadow: 0px -5px 0px 0px #555;*/
            z-index: 100;
            position: relative;
        }
        .fullImageContainer{
            background-image: url('../images/traffic3.png');
        }
        .hide{
            display: none;
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
        #imageTitle{
            text-shadow: none;
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
            var conts = new Waypoint({
                element: document.getElementById('conts'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","conts-p","fadeInLeft");
                        setTimeout(function(){animate("element","conts-t","fadeInRight");},10);
                    }
                    else{
                        setTimeout(function(){animate("element","conts-t","fadeOutLeft",true);},10);
                        animate("element","conts-p","fadeOutRight",true);
                    }
                },
                offset: "80%"
            });
            var why = new Waypoint({
                element: document.getElementById('why'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","imageTitle","fadeInLeft");
                    }
                    else{
                        animate("element","imageTitle","fadeOutRight",true);
                    }
                },
                offset: "80%"
            });
            var breakdown = new Waypoint({
                element: document.getElementById('breakdown'),
                handler: function(direction) {
                    if(direction=="down"){
                        animate("element","breakdown-p","fadeInLeft",true);
                        setTimeout(function(){
                            animate("element","breakdown-t","fadeInRight",true);
                            setTimeout(function(){
                                animate("element","breakdown-btn","fadeInUp",true);
                            },10);
                        },10);
                    }
                    else{
                        setTimeout(function(){animate("element","breakdown-t","fadeOutLeft",true);},10);
                        animate("element","breakdown-p","fadeOutRight",true);
                    }
                },
                offset: "80%"
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
                mp4: "../videos/nighttimeTrafficPollution.mp4",
                poster: "../images/traffic.png"
            },{
                 posterType: 'png'
            });
            $("#conts-p").find("button").click(function(){
                window.location.href="../solutions/";    
            });
            $(".bottomP").find("button").click(function(){
                window.location.href="../effects/";    
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

<body data-page="causes">

    <?php include("../includes/navbar.php");?>
    <main>
        <section id="landing" class="fullSection">
            <div id="title" class="autoCenter">
                Causes
            </div>
        </section>
        <div id="circle" class="transition"><img src="../images/downChevron.svg" alt="down" /></div>
        <section id="intro" class="quarterSection">
            <h2 id="introHeader">What's Actually Happening?</h2>
            <p id="introContent">
                Global warming is the increase of temperature in the Earth's atmosphere, caused by the greenhouse effect. The greenhouse effect helps to keep a balance between the temperature radiating from the sun, and the temperature on Earth. It is a natural process that occurs when the sun's light passes through the atmosphere and is wrapped around the Earth like a blanket. The main greenhouse gases are carbon dioxide, methane, and nitrous oxide. Without constant levels of these gases, Earth's temperature rises, leaving negative effects on plants, animals, other crucial aspects of life. 
            </p>
        </section>
        <section id="conts" class="halfSection backgroundColor bottomPadding">
            <div class="inlineVertAlign">
                <div id="conts-t" class="halfTitle hide">Contributors to Global Warming:</div>
                <div id="conts-p" class="hide">
                    <p class="halfTitleP">There are many activities that contribute to the greenhouse effect, even the hairspray ladies! Gases that contribute to the greenhouse effect include: nitrous oxide, water vapor, carbon dioxide, and methane. One cause is the burning of fossil fuels such as coal, oil, and natural gases. When fossil fuels are burned, carbon dioxide is released into the atmosphere.  Large amounts of carbon dioxide in the air causes a rise in the atmospheric temperature. Another dangerous greenhouse gas is chlorofluorocarbons, also known as CFCs. This gas is found in common items such as aerosols and foam plastics. CFCs are also responsible for breaking down our ozone layer which protects the Earth from harmful rays, and without it, the heat that comes in from the sun- stays in! You know that sunburn you get from laying out on the beach? Well that's from a lack of an ozone layer!</p>
                    <p class="halfTitleP">The more greenhouse gases in the atmosphere, the more heat is trapped in the Earth, leading global warming. There's lots of ways we can help to prevent this, too! If you want to learn more about what you can do to help the environment, click below! Every small step, is a step in a better direction!</p>
                    <p class="halfTitleP"><button class="transition">Become Part of the Solution</button></p>
                </div>
            </div>
        </section>
        <section id="why" class="halfSection fullImageContainer imgBG">
            <div id="imageTitle" class="hide">WHY?</div>
        </section>
        <section id="breakdown" class="halfSection bottomPadding">
            <div class="inlineVertAlign">
                <div class="bottomP">
                    <div id="breakdown-t" class="bottomTitle hide">Let Us Break it Down</div>
                    <p id="breakdown-p" class="hide">Unfortunately we live in a world of industry and greed, and like most things it's a chain reaction. So let us break it down for you... The demand for products is higher than ever before, and to meet that demand we must mass produce. And sometimes it's hard to realize what effect we are having on our Earth because like we said earlier, it doesn't affect us directly. Around the world, there are large factories releasing toxic chemicals into the air. These chemicals do not leave the air! There is no magic filter that takes out all the bad things and leaves the good. They stay in our atmosphere and they harm it. By harming the atmosphere we harm our ozone layer, which in return lets more radiation from the sun in. This heat stays on Earth and overall warms it up. This heat is the problem, and causes so many natural things to alter.</p>
                    <p class="halfTitleP"><button id="breakdown-btn" class="transition hide">Learn About Effects</button></p>
                </div>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php");?>
</body>
</html>
