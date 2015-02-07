<?php
	$pageTitle = "ROI Calculator";
	$metaDescription = "";
	include("header.php");
?>
		
    <section class="calculator block" id="calculator" style="margin-top:70px;margin-bottom:70px;">
        <h1 style="text-align: center;">How Much Could You Be Recovering?</h1>
        <p style="text-align: center;">Use our ROI calculator to find out.</p>
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
					
			
<?php include("footer.php"); ?>