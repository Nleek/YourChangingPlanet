<?php include("baseUrl.php");?>
<nav class="transition">
        <h3><a href="<?php echo"$BaseURL";?>">Your Changing Planet</a></h3>
        <div id="linkContainer" class="transition">
            <ul>
                <li id="home-nav" class="transition"><a href="<?php echo"$BaseURL";?>">Home</a></li>
                <li id="facts-nav" class="transition"><a href="<?php echo"$BaseURL"."/facts"; ?>">Facts</a></li>
                <li id="causes-nav" class="transition"><a href="<?php echo"$BaseURL"."/causes"; ?>">Causes</a></li>
                <li id="effects-nav" class="transition"><a href="<?php echo"$BaseURL"."/effects"; ?>">Effects</a></li>
                <li id="solutions-nav" class="transition"><a href="<?php echo"$BaseURL"."/solutions"; ?>">Solutions</a></li>
                <li id="donations-nav" class="transition"><a href="<?php echo"$BaseURL"."/donations"; ?>">Donations</a></li>
                <!--<li id="citations-nav" class="transition"><a href="<?php echo"$BaseURL"; ?>/sources.php">Citations</a></li>-->
            </ul>
        </div>
        <div id="hamburger" data-status="closed" class="h-menu-icon transition"><img src="<?php echo"$BaseURL"."/images/menu.svg"; ?>" alt="Hamburger Menu" /></div>
    </nav>
