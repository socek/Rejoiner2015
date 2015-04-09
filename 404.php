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
            <h3>go back the <a href="/">right path</a> you must</h3>
        </div>
        <div class="clear"></div>
    </div>
</section>

<!-- CRAZY EGG CODE -->	
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0018/0289.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

  <!-- GA CODE -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25500978-2', 'auto');
  ga('send', 'pageview');

</script>

<?php include("footer_sitemap.php"); ?>