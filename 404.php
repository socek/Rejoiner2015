<?php
	$pageTitle = "404";
	$metaDescription = "";
	include("header.php");
?>


<section style="height:600px;" id="fof-banner">
    <div>
        <div id="fof-text">
            <h1>ERROR code: 404</h1>
            <!-- yoda animate -->
            <div id="fof-yoda">
                <img class="floating-new" src="img/404/Yoda.png" alt="Master Yoda Illustration" draggable="false">
            </div>
            <!-- yoda end -->
            <h2>Hmmm, the wrong page you have found, it seems.</h2>
            <h3>go back the <a onclick="history.back(-1)" href="">right path</a> you must</h3>
               <!-- <a class="btn" href="#" onclick="history.back(-1)">move along</a>-->
        </div>
        <div class="clear"></div>
    </div>
</section>

			
<?php include("footer.php"); ?>