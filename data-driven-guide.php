<?php
	$pageTitle = "The Data-Driven Guide to Abandoned Cart Emails";
	$metaDescription = "The #1 data-driven guide to recovering more revenue abandoned cart emails and cart abandonment remarketing.";
    include("special-header.php");
	include("_includes/navs/data-guide-nav.php");
	include("_includes/funnel-forms/data-guide-popup.php");
    $socialLinks = "dataGuide";
    $fbLink = "https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.rejoiner.com%2Fdata-driven-guide";
    $twLink = "https://twitter.com/share?url=http%3A%2F%2Frejoiner.com%2Fdata-driven-guide&text=The best Data-Driven Guide to more revenue in cart abandonment remarketing. Here's the link:&via=rejoinerapp";
	$lnLink = "https://www.linkedin.com/shareArticle?source=rejoiner%2Ecom&title=The+Data+Driven+Guide+to+Abandoned+Cart+Emails&summary=The+best+Data+Driven+Guide+to+more+revenue+in+cart+abandonment+remarketing&mini=true&url=http%3A%2F%2Frejoiner%2Ecom%2Fdata-driven-guide%2F10737122";
?>


<!-- special page header -->
<div id="special-header">
	<div class="top-bar">
		<div class="left-side">
			<a class="white-logo" href="/"></a>
		</div>
		<div class="right-side">
			<a class="down-book data-guide-trigger" href="#">Download Guide</a>
			<div class="share" style="border-color: <?php echo $highColor; ?>;">
				<span>SHARE</span>
					<a href="<?php echo $fbLink; ?>" title="Share on Facebook" class="facebook facebook-share share-btn" data-js="facebook-share">&nbsp;&nbsp;</a>
					<a href="<?php echo $twLink; ?>" title="Share on Twitter" class="twitter twitter-share share-btn" data-js="twitter-share">&nbsp;&nbsp;</a>
					<a href="<?php echo $lnLink; ?>" title="Share on LinkedIn" class="linkedin share-btn">&nbsp;&nbsp;&nbsp;</a>
			</div>
		</div>
	</div><!-- end top bar -->
</div><!-- end special-header div -->

<section id="special-page-section">

    <div class="banner dataGuide-bg">
        <div class="headline">
			<div id="ribbon-header">
				<span class="left-ribbon green-left"></span>
				<span class="ribbon ribbon-green">THE DATA-DRIVEN GUIDE TO</span>
				<span class="right-ribbon green-right"></span>
			</div>
            <h1>Abandoned Cart Email &amp; Cart Abandonment Remarketing</h1>
        </div>
        <div class="triangle-up">
			<img src="/img/special-pages/cartguide/main-hd-triangle.png" />
		</div>
    </div>

    <div id="intro" class="intro cartguide ch-title">
        <div class="left-align-txt">
			<h5 class="dark-purple">Introduction</h5>
	        <span class="guide-pulltxt">The idea that 70% online consumers engage with your site to the point where they are about to <span class="underline">check out and abandon</span> is nerve wracking.</span>
			<p><a class="underline" href="http://baymard.com/" target="_blank">The Baymard Institute</a>, an eCommerce usability think tank, has aggregated cart abandonment data from various industry sources over the last 9 years. <strong class="medium-bold">Bad news:</strong>  Despite major advancements in technology and eCommerce user experience design, the average cart abandonment rate has remained constant.</p>
		</div>
		<div style="margin-bottom: 6%;"></div>
		<div class="graph-holder" id="baymardgraph">
			<p class="baymard-intro">Average Cart Abandonment Rates by Year</p>
			<?php include("_includes/graphs/baymard-cartabandonment.php"); ?>
		</div>
		<span class="caption" style="margin-bottom:4%;">
	            Source: <a href="http://baymard.com/lists/cart-abandonment-rate" target="_blank">Baymard Institute</a>
	    </span>
		<div class="left-align-txt">
			<p>Industry pundits portray cart abandonment as a problem that costs online retailers <i>billions</i> of dollars in lost revenue every year. <strong class="medium-bold">Good news:</strong> This is an exaggeration. It’s human nature to test the waters before making a purchase. There’s no technology in the world that will eliminate it. We must accept the fact that cart abandonment is a very natural part of the eCommerce buying cycle.</p>
			<span class="guide-pulltxt breather">What we can do is change our perspective and see shopping cart abandonment as a conversion rate optimization and customer service opportunity for us as eCommerce professionals.</span>
			<p>How? By taking a customer-centric approach. Customers are giving you an amazing signal of purchase intent when they abandon a transaction on your site. Think of cart abandonment emails as your second chance to continue the conversation with this incredibly important group of potential customers.</p>
			<p><strong class="medium-bold">By building a quality abandoned cart email program, one of three things will happen when you follow up:</strong></p>
			<div class="list-holder">
				<i>You'll win the order 10-15% of the time.</i>
				<i>You'll find out why the customer didn't buy and use this qualitative information to proactively improve your buying process.</i>
				<i>You'll create a great customer service moment and leave an everlasting impression on the customer.</i>
			</div>
			<p>This guide is written to help you maximize those three outcomes with every cart abandonment email that you send. In addition, you’ll learn to measure the cart abandonment rate on your site, how to identify a higher percentage of customers shopping on your site and how to calculate the expected ROI of an abandoned cart email solution.</p>
		</div>
    </div>

	<div style="margin-bottom:30px;"></div>

	<!-- CHAPTER 01 -->
    <div id="chapter1" class="text-content silverbg scrollto ch-title">
		<div class="left-align-txt">
	        <h5>CHAPTER 01</h5>
	        <h2>Why Customers Abandon Cart 70% Of The Time</h2>
	        <p>Though shopping cart abandonment is a behavior that we can’t eliminate; we can try to understand its route cause. The study we commonly reference was conducted by <a class="underline" href="http://www.statista.com/statistics/232285/reasons-for-online-shopping-cart-abandonment/
" target="_blank">WorldPay in 2012</a>. A sample of 19,000 consumers were asked why they leave eCommerce websites without paying:</p>
			<!--WorldPlay Graph start -->
			<div class="clearfix medium" id="worldplay"></div>
				<?php include("_includes/graphs/worldplay-abandonment.php"); ?>
			<div class="clearfix medium"></div>
			<!-- WorldPlay Graph end -->
			<div class="clearfix medium"></div>
	        <p>As you can see, three out of the top five reasons given for abandoning an eCommerce website are cost or price related. The others describe customers who weren’t quite ready to buy yet:</p>
			<div class="list-holder">
				<i>Presented with unexpected costs</i>
				<i>Just Browsing</i>
				<i>Found a better price elsewhere</i>
				<i>Overall price to expensive</i>
				<i>Decided againts buying</i>
			</div>
			<p>Below, you’ll learn about strategies to make sure you never miss out on an order because of a price concern or unexpected shipping charges. You’ll also learn how to target those “just browsing” customers and uncover million dollar insights into why customers aren’t buying from you.</p>
		</div>
    </div>

	<!-- CHAPTER 02 -->
    <div id="chapter2" class="text-content scrollto ch-title">
		<div class="left-align-txt">
	        <h5>CHAPTER 02</h5>
	        <h2 style="max-width:500px;">Live Cart Abandonment Rate Index by Device</h2>
	        <p>Cross-device shopping has created an enormous challenge for online retailers. If eCommerce managers thought it was difficult to create a great experiences on desktop, imagine how difficult it is to create a consistent, usable experiences across mobile, tablet, and desktop via mobile sites and native applications.</p>
			<p><a class="underline" href="http://www.criteo.com/resources/mobile-commerce-report/" target="_blank">As of Q3 2015</a>, 40% of all eCommerce transactions involved multiple devices and mobile commerce now represents 35% of total eCommerce transactions globally. The rate at which consumers are using mobile devices to shop is outpacing the average retailer’s ability to build experiences for these new mediums. This is reflected in the data we see from our own client installs.</p>
	        <p>The following is a live index of 350 Rejoiner client’s cart abandonment rate data by device. The most recent data points were calculated using  <span class="purple-highlighter" id="last_month_data"><img src="/img/_unused_archive/loading.gif"></span>  transactions in <span class="purple-highlighter"><?php echo date('F-Y', strtotime('first day of last month')); ?></span>.</p>
            <div class="graph_line">
                <div>#1 Mobile</div>
                <div id="phone_graph" class="graph_loading" style="height: 64px; width: 300px;"><img src="/img/_unused_archive/loading.gif"></div>
                <div id="phone_all"></div>
                <div id="phone_change"></div>
            </div>
            <div class="graph_line">
                <div>#2 Tablet</div>
                <div id="tablet_graph" class="graph_loading" style="height: 64px; width: 300px;"><img src="/img/_unused_archive/loading.gif"></div>
                <div id="tablet_all"></div>
                <div id="tablet_change"></div>
            </div>
            <div class="graph_line">
                <div>#3 Desktop</div>
                <div id="desktop_graph" class="graph_loading" style="height: 64px; width: 300px;"><img src="/img/_unused_archive/loading.gif"></div>
                <div id="desktop_all"></div>
                <div id="desktop_change"></div>
            </div>

		</div>
    </div>

	<!-- CHAPTER 03 -->
    <div id="chapter3" class="text-content silverbg scrollto ch-title">
		<div class="left-align-txt">
	        <h5>CHAPTER 03</h5>
	        <h2>How to Measure Your Cart Abandonment Rate</h2>
	        <p>There are an endless supply of tools available to help you measure how customers move through each page of your checkout funnel and can visualize where the dropoff occurs. A common approach is to use a free tool like <a class="underline" href="http://www.google.com/analytics/" target="_blank">Google Analytics</a> in combination with another specialized analytics provider like <a class="underline" href="/" target="_blank">Rejoiner</a>, <a class="underline" href="https://kissmetrics.com/" target="_blank">KISSMetrics</a>, or <a class="underline" href="https://mixpanel.com/" target="_blank">Mixpanel</a>. Most solutions are intended for aggregated reporting on how all customers are moving through the funnel, but an important feature is the ability to make the distinction between an identifiable customer and an anonymous one. We’ll cover more ways to identify a higher percentage of site visitors shortly.</p>
			<img class="breathe show-dsk" src="/img/special-pages/cartguide/rejoiner-funnel-dsk.jpg" draggable="false" />
			<img class="breathe show-mob" src="/img/special-pages/cartguide/rejoiner-funnel-mob.jpg" draggable="false" />
			<p>If you’re just getting started, setting up a conversion funnel in Google Analytics is a simple task that you can use to establish a baseline cart abandonment rate. Not only does it empower you to understand how and when people drop out during your conversion process, it also allows you to measure your cart abandonment rate over time.</p>
			<span class="guide-pulltxt breather">
				There are two central ideas when it comes to setting up these reports for your site: a goal &amp; a funnel.
			</span>
			<div class="list-holder">
				<strong class="list-presenter">SOME GOAL EXAMPLES ARE:</strong>
				<!--<span class="list-intro pull-top">SOME GOAL EXAMPLES ARE:</span>-->
				<ul>
					<!-- 01 point -->
					<li>
						URL Destination
						<ul>
							<li class="examples"> - Example: Confirmation page</li>
						</ul>
					</li>
					<!-- end 01 point -->

					<!-- 02 point -->
					<li>
						Duration (on site/page)
						<ul>
							<li class="examples"> - Example: Confirmation page</li>
						</ul>
					</li>
					<!-- end 02 point -->

					<!-- 03 point -->
					<li>
						Number of Pages/Screens Visited
						<ul>
							<li class="examples"> - Example: User visited 5 pages</li>
						</ul>
					</li>
					<!-- end 03 point -->

					<!-- 04 point -->
					<li>
						User Event
						<ul>
							<li class="examples"> - Example: Clicked <span class="underline">Buy Now</span> Button</li>
						</ul>
					</li>
					<!-- end 04 point -->

				</ul>
			</div>
			<p>A funnel represents the path that a customer takes to reach your goal. For the purposes of measuring cart abandonment, we’re going to use a URL destination as our goal. Typically, that destination is your thank you page or order confirmation page after a user completes an order.</p>
			<p>To get started building funnels on your site, we put together a <a class="wistia-popover[height=400,playerColor=df7237,width=642]" href="//fast.wistia.net/embed/iframe/n5iw6x7egk?popover=true">short video</a> to walk you through the process. We hope it’s helpful! If video isn’t your thing, read on for written instructions as well.</p>
			<!-- wistia script -->
			<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
			<!-- wistia script ends-->
			<div class="list-holder">
				<strong class="list-presenter">HOW TO SET UP A SHOPPING CART FUNNEL IN GOOGLE ANALYTICS:</strong>
				<span class="list-intro pull-top">For the sake of this example, we’re going to use a multi-step checkout as our path to a completed order.</span>
				<br />
				<i class="longer">
					Sign into your Google Analytics account and click <span class="courier">Admin</span>  in the upper right-hand corner.
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-admin.jpg">
					</div>
				</i>
				<i class="longer">
					Choose the profile that you’ll be setting up the funnel for and click on <span class="courier">Goals</span>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-goals.jpg">
					</div>
				</i>
				<i class="longer">
					To set up a new goal, click <span class="courier">Goals</span>, then click the <span class="courier">+ New Goal</span> button.
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-newgoal.jpg">
					</div>
				</i>
				<i class="longer">
					Create a <span class="courier">Custom</span> template, and click <span class="courier">Continue.</span>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-template.jpg">
					</div>
				</i>
				<i class="longer">
					Next, you’ll set up your <strong class="medium-bold" style="font-style:italic;">Goal Description</strong> and the <strong class="medium-bold" style="font-style:italic;">Type</strong> of goal you’d like to track. Name your goal <span class="courier">Completed Order</span> and choose <span class="courier">Destination</span> for cart abandonment and select <span class="courier">Continue.</span>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-description.jpg">
					</div>
				</i>
				<i class="longer">
					Now enter the URL of the <strong class="medium-bold" style="font-style:italic;">last page</strong> in your sales funnel – where you want your customers to end up - inside the <span class="courier">Destination Equals to</span> field. Think <strong class="medium-bold" style="font-style:italic;">Confirmation</strong> page.
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-destination.gif">
					</div>
					<br />
					<span style="font-size: 14px;display:block;width:95%;color:#777;"><strong style="color:#E86725;letter-spacing: 1px;font-family:'museo-sans', Helvetica, Arial, sans-serif;">IMPORTANT:</strong> You will need to select <span class="courier">Destination Begins With</span> for your URL if your website dynamically injects a number at the end of your confirmation page.</span>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-destination.jpg">
					</div>
				</i>
				<i class="longer">
					Next, set the <span class="courier">Funnel Option</span> to <span style="font-weight:600;font-style:italic;">On</span>. To a test checkout as your customer would, noting each step in the process. Add in the additional steps as the funnel leading up to your confirmation page. Leave the <span class="courier">Required</span> option <span style="font-weight:600;font-style:italic;">Off</span> your first URL*.
					<div class="down-lines">
						- Cart page <span>(example: yoursite.com<strong>/checkout/cart/</strong>)</span><br />
						- Checkout page <span>(example: yoursite.com<strong>/checkout/onepage/</strong>)</span>
					</div>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-funnel.jpg">
					</div>
					<br />
					<span style="font-size: 14px;display:block;width:95%;color:#777;"><strong style="color:#E86725;letter-spacing: 1px;font-family:'museo-sans', Helvetica, Arial, sans-serif;">IMPORTANT:</strong> Note that setting your first URL to be required means that customers will only be able to enter the sales funnel listed in step one.</span>
				</i>
				<i class="longer">
					Save your new goal.
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-savegoal.jpg">
					</div>
				</i>
				<i class="longer">
					The data for your funnel report will begin aggregating over the next 24 hours.
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-goalset.jpg">
					</div>
				</i>
				<i class="longer">
					You can view your funnel report by clicking <span class="courier">Conversions</span> in the left hand sidebar of Google Analytics, then <span class="courier">Goals</span> > <span class="courier">Funnel Visualization</span>
					<div class="list-blocker">
						<img src="/img/special-pages/cartguide/ga/ga-conversions.jpg">
					</div>
				</i>
			</div>
			<p><strong>The end result will look something like:</strong></p>
			<img src="/img/special-pages/cartguide/ga-funnel.jpg" draggable="false" />
		</div>
    </div>


	<!-- CHAPTER 04 -->
    <div id="chapter4" class="text-content midpointTrigger scrollto ch-title">
		<div class="left-align-txt">
	        <h5>CHAPTER 04</h5>
	        <h2>How to Identify a Higher Percentage of Site Visitors</h2>
	        <p>On eCommerce websites where only a small percentage of customers make it into the checkout process, and an even smaller percentage are registered, this presents a challenge (less people to follow up with if we don’t know they are - because we don’t have their email address yet).</p>
			<span class="guide-pulltxt breather">
				There are several strategies that can be employed to identify a higher percentage of customers even before they get to checkout, thus capturing a larger number of people for our cart abandonment program to follow up with:
			</span>
			<span class="guide-checkmarks">Triggered Pop-Ups/Offers</span>
			<p>Triggered on-site offers can entice anonymous visitors to opt-in, creating an identifiable session much earlier in the buying process. On-site lead magnets can be paired with your abandoned cart email program, so that after a customer opts-in, their session is tagged while shopping on your site.</p>
			<span class="guide-checkmarks">Newsletter Append</span>
			<p>If you’ve built up an in-house email marketing list, leveraging your weekly newsletter send can greatly increase the percentage of identifiable customers browsing your website. Your ESP should give you the ability to append the customer’s email address within a query string parameter, should they click through the email. If your cart abandonment email partner can field that query string parameter and tag the session, you’ve just increased the percentage of identifiable sessions on your site.</p>
			<span class="guide-checkmarks">Pre-Submit Tracking</span>
			<p>By using pre-submit tracking, high intent customers can be identified in real-time, as soon they enter an email address on your checkout form, even if they don’t complete the checkout form. We recommend placing the email address field as close to the top of the checkout form as possible. Then, you will need to double check that the customer is opted-into your email list before sending them your abandonment campaign.</p>
		</div>
    </div>

	<!-- CHAPTER 05 -->
    <div id="chapter5" class="text-content silverbg scrollto ch-title">
		<div class="left-align-txt">
	        <h5>CHAPTER 5</h5>
			<h2>Abandoned Cart Email Best Practices</h2>
			<h4 class="partial-title purple">Approach Your Campaign With a Customer Service Focus</h4>
			<p>Abandoned cart emails are your chance to continue the conversation with an extremely important group of customers: those that demonstrated the highest amount of possible purchase intent but still didn’t buy. Your job is to provide amazing customer service and find out why. To uncover these insights, <strong class="medium-bold">include your toll free number prominently</strong> within the email and <strong class="medium-bold">write your copy using a helpful customer service tone</strong>.</p>

			<p><strong class="medium-bold">Send from a live, monitored inbox</strong> and ask your customers for feedback. Asking simple questions like, <i>Was there a problem?</i> or <i>How can we help?</i> will generate real, qualitative responses about what friction points are causing customers to abandon in the first place. This is priceless information. To make customers feel more comfortable about providing you this feedback, <strong class="medium-bold">send from a real person’s name</strong> and include a photograph of a real person in the footer of the email.
			</p>
			<div class="email-row">
				  <!-- image 01 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
  						<img src="/img/special-pages/cartguide/email-large/ghurka-email.jpg" alt="" class="email-image" />
  					</div>
				    <span class="email-caption">View Email</span>
				  </div>

				  <!-- image 02 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
						<img src="/img/special-pages/cartguide/email-large/liftopia-email.jpg" alt="" class="email-image" />
					</div>
					<span class="email-caption">View Email</span>
				  </div>

				  <!-- full screen container -->
				  <div id="email-fullscreen-image">
					<div class="email-box">
						<div class="close-email">X</div>
					    <div class="container-fullscreen">
					    	<img src="" alt="" />
					    </div>
					</div>
				  </div>
			</div>
		</div>
    </div>

<div class="ch-title" id="bestpractices">
	<!-- CHAPTER 05 - point 2 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Assume Your Customer Will Open Abandonment Emails on a Mobile Device</h4>
			<p>Over 50% of the 5,000,000 monthly emails sent by Rejoiner are opened on a device that is different than the one the customer originally abandoned on. Think about that for a second. <strong class="medium-bold">More than half the time, customers will consume your email on a different device than where the first touch occurred.</strong></p>
			<p>If you are not employing session regeneration and customers are not signed in on their mobile devices (hint: they probably won’t be), customers will have a disjointed experience and will be less likely to go back and re-add items all over again.</p>
			<p><strong class="medium-bold">Design &amp; code responsive email templates so that they render well</strong> on mobile devices, as this is more than likely where customers will consume them. More importantly, <strong class="medium-bold">regenerate cart sessions</strong> across devices so customers have a seamless shopping experience from device to device.</p>
			<div class="sibling-images">
				<div style="max-width:635px;padding:20px;margin: 3% auto 1%;">
					<img class="float-left float-left-660" style="margin-top:0px;" src="/img/special-pages/cartguide/email-large/peak-desktop.png" draggable="false"/>
					<div class="easy-cellphone">
						<div>
							<img src="/img/special-pages/cartguide/email-large/peak-mobile.png" draggable="false"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CHAPTER 05 - point 3 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Segment Abandoned Carts for Better Targeting &amp; Filtering</h4>
			<p>Segmentation can be used for <strong class="medium-bold">more granular targeting of your ideal customers</strong> and also for filtering out customers you may not want to send to. For example, you would want to filter out customers in the geographies that you don’t ship to. You also may want to treat wholesale customers differently than retail, or filter them out entirely.</p>
			<p>For targeting purposes, <strong class="medium-bold">segmentation enables you to identify your most valuable customers</strong>. For example, you may want to develop a special campaign for particularly high value orders or use a special offer for a customer shopping a particularly high margin SKU. The only way to accomplish this is with a flexible segmentation engine that can segment your customer data using demographic, transactional, and behavioral filters. </p>
			<img class="center-image" src="/img/special-pages/cartguide/segmentation-img.jpg" draggable="false"/>
		</div>
	</div>

	<!-- CHAPTER 05 - point 4 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Track Guests, Registered Customers &amp; Existing Subscribers</h4>
			<p>A successful abandoned cart email program <strong class="medium-bold">engages both guests &amp; registered customers</strong>. Pre-submit tracking enables you to identify anonymous customers as soon as they enter an email address on your site, in real-time. Liftopia, the largest eCommerce company selling ski lift tickets, used this feature to <a class="underline" target="_blank" href="/liftopia-case-study">identify thousands of potential customers</a> that they didn’t even know existed because they weren’t registered. Within the first month of using pre-submit tracking, they tracked almost $1.3 million in revenue abandoned by customers who were only filling out the few form fields on their checkout page and were never hitting submit.</p>
			<p><strong class="medium-bold">So, place your email capture field as high on the checkout page as possible</strong> to give yourself the best chance to identify a guest customer before they abandon. Since registered customers have already given you their email address, you can use this to track their behavior as they move around your site.</p>
			<p>To identify more customers earlier in the funnel, <strong class="medium-bold">consider a triggered pop-up or opt-in</strong> that encourages customers to provide their email address earlier in the process. Tieing the opt-in into your abandoned cart email program will enable you to identify a higher percentage of customers that express purchase intent, even if they don’t make it to the cart or checkout page.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
					<img style="margin-top:0px;" src="/img/special-pages/cartguide/track-form.png" draggable="false"/>
					<img style="margin-top:0px;" src="/img/special-pages/cartguide/track-popup.png" draggable="false"/>
			</div>
		</div>
	</div>

	<!-- CHAPTER 05 - point 5 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Send a Customer Service Email Within 30 Minutes of the Cart Being Abandoned</h4>
			<p>The first abandoned cart email you send should have no other purpose other than to provide responsive customer service. Customers will abandon a purchase simply because they have unanswered questions, had a payment issue, or experienced a network delay while checking out. Take the opportunity and use your first abandoned cart email to create a memorable customer service moment. <strong class="medium-bold">Encourage customers to pick up the phone and call</strong> you or <strong class="medium-bold">prompt them to reply to the email with their questions</strong>.</p>

			<div class="email-row">
				  <!-- image 01 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
  						<img src="/img/special-pages/cartguide/email-large/katespade-email.jpg" alt="" class="email-image" />
  					</div>
				    <span class="email-caption">View Email</span>
				  </div>

				  <!-- image 02 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
						<img src="/img/special-pages/cartguide/email-large/fab-email.jpg" alt="" class="email-image" />
					</div>
					<span class="email-caption">View Email</span>
				  </div>

			</div><!-- end email div -->

		</div><!-- end main div -->
	</div><!-- end ch - point 05 -->

	<!-- CHAPTER 05 - point 6 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Build Abandoned Cart Emails Into Your Customer Feedback Loop</h4>
			<p>By asking customer service focused questions like, <i>Was there a problem?</i> or <i>How can we help?</i> you are <strong class="medium-bold">inviting customers to start a dialogue</strong> with you about their shopping experience. The insight generated by having these discussions will be <strong class="medium-bold">priceless for your conversion rate optimization efforts.</strong></p>
			<p>Qualitative feedback from customers will quickly unearth trends around where the friction points exist in your checkout process and what issues are causing customers not to convert in the first place. <strong class="medium-bold">Make it a regular practice to review this feedback with your development team</strong> and prioritize the on-site issues that are causing customers to bail on your checkout process. Our customers regularly receive <strong class="medium-bold"><i>million dollar insights</i></strong> from their cart abandonment email campaigns with this approach.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
					<img style="margin-top:0px;" src="/img/special-pages/cartguide/email-large/huck-email.png" draggable="false"/>
			</div>
		</div>
	</div><!-- end ch - point 06 -->

	<!-- CHAPTER 05 - point 7 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Trigger in Real-Time Using the Customer’s Last Action On Your Website</h4>
			<p>It’s hard to believe that there are still email vendors and eCommerce platforms sending “batched” cart abandonment email campaigns in 2015. This is a big missed opportunity for the retailers they serve. A batched approach sends to all customers who abandon in a twenty four hour time period, at the same time.</p>
			<p>In comparison, a real-time campaign triggers email sends on a per-customer level based on their last interaction on your website.</p>
			<p><strong class="medium-bold">Getting that first email out within 60 minutes of a customer’s last interaction on your site is critical for two possible outcomes:</strong></p>
			<div class="list-holder">
				<i>Getting a response from the customer about why they didn’t buy (before they buy somewhere else).</i>
				<i>Providing great customer service and winning back the sale.</i>
			</div>
		</div><!-- end main div -->
	</div><!-- end ch - point 07 -->

	<!-- CHAPTER 05 - point 8 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Send a Second and Third Email to Customers Who Haven’t Purchased</h4>
			<p>If your first email wasn’t successful at converting the customer or eliciting a response, try sending a second and third email. Track customer replies and suppress the remaining emails for customers who respond with customer service questions or convert. Sending 3 emails 30-60 Minutes, 24 hours and 3 days post abandon is the most common cadence retailers start with.</p>
			<p>Here’s a campaign from a Rejoiner customer to give you an idea of the % of revenue each email generates.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/campaign-breakdown-dsk.jpg" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/campaign-breakdown-mob.jpg" draggable="false" />
			</div>
		</div>
	</div><!-- end ch - point 08 -->

	<!-- CHAPTER 05 - point 9 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Employ Discounts/Offers Intelligently</h4>
			<p>Including discount codes in your abandoned cart email program seems like a no-brainer. It is to some degree, but be aware of the pitfalls:<p>
			<p>Common concern centers on training customers to abandon transactions on purpose, just to receive a discount. <strong class="medium-bold">This can be mitigated with intelligent frequency capping</strong>. Frequency capping catches the customers who are abusing the system and stops any emails from being sent to them.</p>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" src="/img/special-pages/cartguide/frequency-capping.png" draggable="false" />
			</div>
			<p>Another frequent concern is that discount codes included in abandoned cart emails will be leaked into the public domain. This can be eliminated by <strong class="medium-bold">generating one-time use codes dynamically and making them unique to individual customers</strong>. This means that every customer will receive a unique code that can only be used once.</p>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" src="/img/special-pages/cartguide/email-large/discounts-katespade.png" draggable="false" />
			</div>
			<p>The more nuanced argument against including discounts is the belief that you’re cannibalizing a sale that had a likelihood to happen anyway, thus giving away margin. This is partially true.</p>
			<p>There will be a percentage of customers who abandon cart that would have come back to complete their purchase without an incentive. <strong class="medium-bold">The only way to measure the true incremental lift of sending an offer versus not sending it is to run a <a href="/#hold-out-feature" target="_blank" class="underline">hold out test</a></strong>. Hold out tests measure the purchase behavior of control groups who don’t receive any emails and compare the value of those customers to a test group of customers who do receive an offer. Comparing the revenue generated by the control group to the test group gives us a true understanding of how much additional revenue is being generated and if there is enough lift to warrant a coupon or offer.</p>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/holdout-desk.jpg" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/ug-holdout.jpg" draggable="false" />
			</div>
		</div><!-- end main div -->
	</div><!-- end ch - point 09 -->

	<!-- CHAPTER 05 - point 10 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Customer Success is as Important as Campaign Success</h4>
			<p>Abandoned cart email success is about more than just conversion and revenue. Though it’s important to track engagement/conversion metrics with Google Analytics and your Email Service Provider of choice, these metrics only tell one part of the story. Open rate, click-through rate, conversion rate, bounce rate, unsubscribe rate, attributable revenue, and revenue per email are the baseline engagement metrics for your campaigns.</p>
			<p><strong class="medium-bold">Also track the number of phone calls that your campaign generates and document the feedback you’re getting from customers</strong>. Track how many <strong class="medium-bold">customers reply to your abandoned cart emails with unanswered questions or usability problems</strong> they experienced on the site. There are enormous qualitative benefits to be had by running abandoned cart email campaigns that won’t be captured in the “recovered sales” column.  Don’t underestimate these benefits.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/cservice-email-dsk.jpg" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/email-large/nike-mob-cs.jpg" draggable="false" />
			</div>
		</div>
	</div><!-- end ch - point 10 -->

	<!-- CHAPTER 05 - point 11 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Maintain CAN-SPAM Compliance</h4>
			<p>The best way to combat the SPAM folder is to send highly segmented abandoned cart emails that your customers actually want to open. Aside from that, follow best practices for CAN-SPAM compliance. <strong class="medium-bold">Include your physical mailing address</strong> and a <strong class="medium-bold">1-click opt-out link</strong> at the bottom of every abandoned cart email. <strong class="medium-bold">Sync your unsubscribes across email vendors</strong> if you use more than one to maintain continuity. <strong class="medium-bold">Never use misleading subject lines or envelope information and honor opt-out requests as quickly as you can</strong>.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/can-spam-img-dsk.png" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/can-spam-img-mob.png" draggable="false" />
			</div>
		</div>
	</div><!-- end ch - point 11 -->

	<!-- CHAPTER 05 - point 12 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Go Beyond “Cart” Abandonment With “Browse” and “Wishlist” Triggers</h4>
			<p>Don’t forget about tracking other important signals of purchase intent. Cart abandonment represents a customer with high purchase intent but <strong class="medium-bold">browse and wishlist abandonment</strong> are also effective triggers.</p>
			<p>Browse abandonment campaigns focus on customers who are opted into your in-house email list, have engaged with your newsletter or other email marketing, but haven’t made it to the cart yet. They may have browsed specific product or category pages and your goal is help them pick up where they left off after they leave your site.</p>
			<p>Wishlist abandonment focuses on customers who have expressed buying intent by saving items for later using the wishlist feature on your site. </p>

			<div class="email-row">
				  <!-- image 01 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
  						<img src="/img/special-pages/cartguide/email-large/jcrew-email.jpg" alt="" class="email-image" />
  					</div>
				    <span class="email-caption">View Email</span>
				  </div>

				  <!-- image 02 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
						<img src="/img/special-pages/cartguide/email-large/pottery-email.jpg" alt="" class="email-image" />
					</div>
					<span class="email-caption">View Email</span>
				  </div>

			</div><!-- end email div -->

		</div><!-- end main div -->
	</div><!-- end ch - point 12 -->

	<!-- CHAPTER 05 - point 13 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Recommend Other Products That Your Customers Might Be Interested In</h4>
			<p>Recommendations increase click-through, conversion and the relevancy of your abandoned cart email program. There are many approaches to integrating product recommendations into abandoned cart emails, but our strategy focuses on <strong class="medium-bold">recommending products in the same product category that a customer has abandoned</strong>. You can also recommend top sellers, items frequently purchased together, or new products to get your customers buying more from you.</p>

			<div class="email-row">
				  <!-- image 01 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
  						<img src="/img/special-pages/cartguide/email-large/starbucks-email.jpg" alt="" class="email-image" />
  					</div>
				    <span class="email-caption">View Email</span>
				  </div>

				  <!-- image 02 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
						<img src="/img/special-pages/cartguide/email-large/blaze-email.jpg" alt="" class="email-image" />
					</div>
					<span class="email-caption">View Email</span>
				  </div>

			</div><!-- end email div -->

		</div><!-- end main div -->
	</div><!-- end ch - point 13 -->

	<!-- CHAPTER 05 - point 14 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Increase Deliverability with SPF &amp; DKM Authentication</h4>
			<p>A Sender Policy Framework (SPF) record is a DNS record that identifies third-party mail servers that you have authorized to send email on behalf of your domain. In the eyes of a receiving email server (Gmail, Yahoo, Hotmail, etc.), a SPF record is a signal that you've given a third party permission to send an email using your domain in the email's From: address.</p>
			<p>DomainKeys Identified Mail (DKIM) is a method to verify that your messages’ content is trustworthy and was not altered from the point at which the message left your servers. This is achieved by adding a public key to your site’s DNS record, which must match the private key your server uses to sign outgoing messages.</p>
		</div><!-- end main div -->
	</div><!-- end ch - point 14 -->

	<!-- CHAPTER 05 - point 15 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Use Preheaders to Get More Opens</h4>
			<p>An email preheader is a small amount of copy that renders under the subject line in the preview pane of most email clients. <strong class="medium-bold">Give your pre-headers careful consideration, as they act as a secondary subject line and can positively (or negatively) influence open rates</strong>. Email preheaders can be hidden in the body of the your template using CSS or visible depending on the requirements of your template design.</p>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/udemy-preheader.png" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/udemy-preheader-mobile.png" draggable="false" />
			</div>
			<div class="wistia-vid">
				<p><strong>VIDEO TUTORIAL:</strong> How to add an invisible preheader to your emails.</p>
				<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="//fast.wistia.net/embed/iframe/4xoqgbj011?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
				<script src="//fast.wistia.net/assets/external/E-v1.js" async></script>
			</div><!-- end wistia vid-->
		</div><!-- end main div -->
	</div><!-- end ch - point 15 -->

	<!-- CHAPTER 05 - point 16 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Personalize Beyond Salutation</h4>
			<p>Personalization broadly refers to any tactic that makes an email more relevant to the person receiving it, based on what information you know about the recipient. Basic personalization includes things as simple as <strong class="medium-bold">including the customer’s first name in the salutation or subject line</strong>. For abandoned cart emails, <strong class="medium-bold">including the contents of the customer’s cart is also a common personalization tactic</strong>. This could be as simple as including the name of one of the products they abandoned in the email copy or recreating the cart itself inside of the email template.</p>
			<p>More sophisticated personalization techniques use demographic, geographic, and even environmental data to make emails more relevant to recipients. Imagine personalizing a browse abandonment email for a clothing brand, knowing the weather in the recipient’s geography was rainy that day.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" src="/img/special-pages/cartguide/email-large/gooze-email-personalize.png" draggable="false" />
			</div>
		</div>
	</div><!-- end ch - point 16 -->

	<!-- CHAPTER 05 - point 17 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Adopt a Mentality of Ongoing Optimization</h4>
			<p>We routinely hear vendors refer to abandoned cart email campaigns as <i>set it and forget it</i>, as if that was a benefit. This mentality leaves an enormous amount of revenue on the table.</p>
			<p>A better approach is to <strong class="medium-bold">think about your abandoned cart email program as a constant work in progress</strong>. Split testing is the most powerful tool at your disposal to improve engagement metrics like open rate, click-through rate and conversion. There is no silver bullet to magically drive conversion upwards overnight, but <strong class="medium-bold">consistent testing can string together many small wins and a big increase in revenue generated</strong>. Our team can increase a cart abandonment campaigns' recovered revenue up to 100% with consistent testing over 6 months.</p>
			<p><strong class="medium-bold">Focus your testing efforts on subject line improvements first</strong>, then progressively test the other facets of your campaign. <a class="underline" target="_blank" href="http://blog.rejoiner.com/2015/08/how-we-ab-test-our-clients-abandoned-cart-email-campaigns-to-maximize-revenue/">We've created a helpful guide</a> that outlines 22 different ways you can test your abandoned cart email campaigns to grow revenue.</p>
			<div class="clearfix medium"></div>
			<div class="sibling-images beige breather">
				<img style="margin-top: 0px" class="show-dsk" src="/img/special-pages/cartguide/optimization-mentality-dsk.png" draggable="false" />
				<img style="margin-top: 0px" class="show-mob" src="/img/special-pages/cartguide/optimization-mentality-mob.png" draggable="false" />
			</div>
		</div><!-- end main div -->
	</div><!-- end ch - point 17 -->

	<!-- CHAPTER 05 - point 18 -->
	<div class="text-content">
		<div class="guide-triangle silver">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title small purple">Handle Conversion Tracking for Phone Orders and Third Party Payment Processors</h4>
			<p>Unified conversion tracking across all of the payment methods you offer to customers is essential to staying in step with customers. Customers may abandon an order on your website, then complete the order over the phone. <strong class="medium-bold">Tie conversions from your internal order processing systems back to those being tracked by your abandoned cart email provider</strong>. Ensure that customers are never confused by abandoned cart emails because one system wasn’t talking to another.</p>
		</div>
	</div><!-- end ch - point 18 -->

	<!-- CHAPTER 05 - point 19 -->
	<div class="text-content silverbg">
		<div class="guide-triangle white">&nbsp;</div>
		<div class="left-align-txt">
			<h4 class="partial-title purple">Use Humor &amp; Make Your Customer Laugh</h4>
			<p>Abandoned cart emails are the perfect opportunity to make your customers smile. The notion that you are reaching out to them about an imaginary shopping cart that was left behind on your website is humorous in itself. <strong class="medium-bold">Your copywriting tone and photography can both be used to make the interaction light hearted and fun.</strong></p>

			<div class="email-row">
				  <!-- image 01 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
  						<img src="/img/special-pages/cartguide/email-large/doggyloot-email.jpg" alt="" class="email-image" />
  					</div>
				    <span class="email-caption">View Email</span>
				  </div>

				  <!-- image 02 -->
				  <div id="email-thumbnail-content">
					<div class="thumb-container">
						<img src="/img/special-pages/cartguide/email-large/chubbies-email.jpg" alt="" class="email-image" />
					</div>
					<span class="email-caption">View Email</span>
				  </div>

			</div><!-- end email div -->

		</div><!-- end main div -->
	</div><!-- end ch - point 19 -->
</div> <!-- ch-title" id="bestpractices" END -->

<!-- end of chapter 5 -->

	<!-- CHAPTER 06 -->
	<div id="chapter6" class="text-content scrollto ch-title">
		<div class="left-align-txt">
			<h5>CHAPTER 06</h5>
			<h2>Calculate Your Return on Investment</h2>
			<p>Provide some data about your site and we can project how much revenue your company would be able to generate with an abandoned cart email program that is set up using Rejoiner's software and by our team of email experts. Simply fill in the data on the calculator below, or <a href="#" target="_blank" class="underline">download an excel version</a> of our abandoned cart email ROI calculator.</p>
		</div>
		<!-- ROI CALCULATOR -->
		<div class="calculator guide-calculator">
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
				<img src="img/roi-calculator/normal_range.png" alt="Normal Range" id="normalrange" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<!-- END ROI CALCULATOR -->
	</div>
	<!-- END OF ALL GUIDE CHAPTERS -->

	<!-- START BRANDED-GUIDE-CTA-->

	<section id="branded-guide-cta">
		<div class="purple-ribbon">
			<div class="ribbon-logo"></div>
			<div class="triangle-up"></div>
		</div>
		<span class="rj-intro">Rejoiner is a lifecycle email software designed specifically to help eCommerce companies reduce their cart abandonment rate and retain their best customers. <a href="/">Learn more</a>.</span>
		<div class="cta-boxes">
			<div class="pdf-share-cta">
				<p class="cta-box-title">Thanks for Reading!</p>
				<p class="cta-clue">Know someone who could benefit from this?</p>
				<a href="/_includes/_ebooks/data-guide-test.pdf" download="Data Driven Guide to Abandoned Cart Email &amp; Cart Abandonment Remarketing" target="_blank" class="">Download PDF</a>
				<a href="<?php echo $twLink; ?>" title="Share on Twitter" class="share-btn"><i class="birdie"></i>Share on Twitter</a>
			</div>
			<div class="related-cta liftopia left-align-txt">
				<p class="cta-box-title">See how Liftopia recovered $714,000 in revenue last winter</p>
				<a href="/liftopia-case-study">View The Case Study »</a>
			</div>
		</div>
	</section>

	<!-- END BRANDED-GUIDE-CTA -->


</section>

<!-- stickyNavbar plugin -->
<script src="//cdn.jsdelivr.net/stickynavbar.js/1.3.0/jquery.stickyNavbar.min.js"></script>



<!-- Popup appears on scroll after hitting ".midpointTrigger" -->
<script type="text/javascript">
// * https://github.com/shorttompkins/scrollToggle/blob/master/README.md
var ScrollToggle = function (top, callbackShow, callbackHide) {
    this.ontop = 0;
    this.hontop = 0;
    this.top = top + 20;
    this.show = callbackShow;
    this.hide = callbackHide;
    var self = this;
    (function () {
        $(window).scroll(function (event) {
            var y = $(window).scrollTop();
            if (y >= self.top)
                self.ontop = 1;
            else
                self.ontop = 0;
            if (self.ontop !== self.hontop) {
                if (self.ontop) {
                    self.show();
                }
                else {
                    self.hide();
                }
            }
            self.hontop = (self.ontop * 1);
        });
    })();
};
//ScrollToggle(verticalScrollTriggerPosition, callbackScrolledTO, callbackScrolledAWAY)
//verticalScrollTriggerPosition can be a number, property, or computed. It is the vertical Y coord of the scrollbar destination.

var getCookie = function(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
};

var myScroller = new ScrollToggle($('.midpointTrigger').position().top, function () {
	if(getCookie('popupCaseSeen') !== 'true') {
	    console.log("Element has been reached - Show modal.");
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
		$('body').addClass('stop-scrolling');
	}
}, function () {
	if(getCookie('popupCaseSeen') !== 'true') {
	    console.log("Element is gone - Hide Modal");
	    //set cookie
	    var d = new Date();
	    d.setTime(d.getTime() + (24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = "popupCaseSeen=true" + "; " + expires;
	}
});

<!-- full images plugin -->
$('#email-fullscreen-image').css('height', '100%');
//for when user clicks on an image
$('.email-image').click(function() {
  var src = $(this).attr('src'); //get the source attribute of the clicked image
  $('#email-fullscreen-image img').attr('src', src); //assign it to the tag of fullscreen div
  $('#email-fullscreen-image').fadeIn();
});
$('#email-fullscreen-image').click(function() {
  $(this).fadeOut(); //this will hide the fullscreen div if you click away from the image
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top -30
		}, 300);
		return false;
	  }
	}
  });
});

</script>

<script async src="/js/data-guide-nav.min.js"></script>


<?php include("special-footer.php"); ?>
