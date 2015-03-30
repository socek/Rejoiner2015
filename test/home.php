<?php
	$pageTitle = "Automated Lifecycle Email & Cart Abandonment Software | Rejoiner";
	$metaDescription = "";
	include("header-home.php");
?>

<section id="homebanner">
	<div>
		<div id="hometext">
			<h1>Automated Lifecycle Email Software to Help You Maximize Customer Lifetime Value and Reduce Your Cart Abandonment Rate Up To 15%</h1>
			<p>Rejoiner is data-driven automated lifecycle email software for e-commerce companies and online retailers looking to automate cart abandonment and retention email campaigns to grow revenue–on autopilot.</p>
			<!--<span class="animated fadeInDown arrow-img-anim"><br>scroll down to learn more</span>-->
		</div>
		<div class="clear"></div>
	</div>
</section>


<section id="clientlogos">
	<div class="row" style="margin-bottom:30px;">
		<h3>TO DATE CUSTOMERS LIKE THESE HAVE<br> 
		GENERATED&nbsp;<span class="money bolderUp">$</span><span class="countUp bolderUp" id="count">40,193,359</span>&nbsp;IN REVENUE</h3>
	</div>
	<div class="row">

			
				<img src="img/client-logos/mastercard.png" alt="MasterCard" draggable="false">
		

			
				<img src="img/client-logos/Hallmark.png" alt="Hallmark" draggable="false">
		

	
				<img src="img/client-logos/Dreamworld_logo.png" alt="Dreamworld" draggable="false">
	

			
				<img src="img/client-logos/amf-logo.png" alt="AMF" draggable="false">
			

			
				<img src="img/client-logos/liftopia-logo.png" alt="Liftopia" draggable="false">
		

		
				<img src="img/client-logos/vtech.png" alt="VTech" draggable="false">
		

		</div>
	
	<img src="img/stroke.png" class="strokeimg">
</section>

	<section id="product-intro">
		<div>
			<div id="hometext">
				<h4>product features</h4>
				<h1>Rejoiner Helps You Maximise Revenue From Your Existing Customers, Convert More Abandoned Carts Into New Customers, with the Ability to Continuously Optimize Campaigns to Increase Sales</h1>
				<div id="product-show" class="animated"></div>
			</div>
		</div>
	</section>

	<div id="product-nav">
	<nav class="prod-holder">
		<ul>
			<li><a href="#recover-sec"><b class="small-border">Recover</b></a></li>
			<li><a href="#retain-sec"><b class="small-border">Retain</b></a></li>
			<li><a href="#optimize-sec"><b class="small-border">Optimize</b></a></li>
			<li><a href="#automate-sec"><b class="small-border">Automate</b></a></li>
			<li><a href="#succeed-sec"><b class="small-border">Succeed</b></a></li>
			<!-- other items here -->
		</ul>
	</nav>
</div> <!-- .cd-secondary-nav -->

<!-- COUNT UP -->
<script type="text/javascript">
var options = {  
    useEasing: true,
    useGrouping: true,
    separator: ',',
    decimal: '.',
    prefix: '',  
    suffix: ''
}
var count = new countUp("count", 35000000, 40193360, 2, 10000000, options);
var countFaster = new countUp("count", 35000000, 40193360, 2, 50, options);
//count.start();
  
	$(window).scroll(function() {
		$('.bolderUp').each(function(){
		var countRev = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (countRev < topOfWindow+850) {
				$(this).addClass("countMoreUp animated pulse");
				count.start();
				//countFaster.start();
				//speed up counter to endvalue -- sprint to finish
			//}
			//else if (countRev > topOfWindow+500) {
			//	$(this).removeClass("animated pulse").addClass("animated fadeIn");
			//	count.stop();
			//	countFaster.stop();
				
			}
			else if (countRev > topOfWindow+850) {
				$(this).removeClass("animated pulse").addClass("animated fadeIn");
				count.stop();
			}
		});
	});



</script>



			
<?php include("footer.php"); ?>