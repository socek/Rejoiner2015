<?php
	$pageTitle = "Shopping Cart Abandonment ROI Calculator | Rejoiner";
	$metaDescription = "Find out how much revenue you could recover with Rejoiner's cart abandonment ROI calculator.";
	include("header.php");
?>
		
    <section class="calculator block" id="calculator" style="margin-top:70px;margin-bottom:70px;">
        <h1 style="text-align: center;">How Much Could You Be Recovering?</h1>
        <h3 style="text-align: center;margin-top:-10px;">Try Our Cart Abandonment Email ROI Calculator to Find Out</h3>
        <div class="containers">
            <div id="checkoutVisitscontainer" class="container">
                <label>Monthly Checkout Visits</label>
                <input type="text" value="25000" id="checkoutVisits" />
            </div>
            <div id="aovcontainer" class="container">
                <label>Average Order Value</label>
                <input type="text" value="150" id="aov" />
            </div>
            <div id="abandonratecontainer" class="container">
                <label>Abandonment Rate</label>
                <input type="text" value="66" id="abandonrate" />
            </div>
            <div style="clear:both"></div>

            <div id="roitable">
                <ul class="headerrow">
                    <li>Recovery Rate</li>
                    <li>Recovered Monthly</li>
                    <li>Recovered Annually</li>
                </ul>
                <ul class="tier1">
                    <li>5%</li>
                    <li>$24,750</li>
                    <li>$297,000</li>
                </ul>
                <ul class="tier2">
                    <li>10%</li>
                    <li>$49,500</li>
                    <li>$594,000</li>
                </ul>
                <ul class="tier3">
                    <li>20%</li>
                    <li>$99,000</li>
                    <li>$1,188,000</li>
                </ul>
                <ul class="tier4">
                    <li>30%</li>
                    <li>$148,500</li>
                    <li>$1,782,000</li>
                </ul>
            </div>
            <img src="img/normal_range.png" alt="Normal Range" id="normalrange" />
            <div style="clear:both;"></div>
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
			
<?php include("footer.php"); ?>