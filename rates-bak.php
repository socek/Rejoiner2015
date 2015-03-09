<?php
	$pageTitle = "";
	$metaDescription = "";
	include("header.php");
?>

<section class="index" style="max-width: 980px; margin: auto;">

        <section class="headsection rate-statistic">
            <h1 class="statistic">Shopping Cart Abandonment Rates &amp; Statistics</h1>
            <h3>Abandonment rate index segmented by vertical industry &amp; updated monthly</h3>
        </section>

    <script type="text/javascript">
        jQuery(function($) {
            var $chart1 = [.5503,.5799,.5707,.5827,.5799,.5861];
            var $industry_1 = [.5200,.5793,.5756,.6296,.6293,.6075];
            var $industry_2 = [.5381,.5679,.5572,.5875,.5744,.5692];
            var $industry_3 = [.6482,.6047,.5713,.5667,.5927,.6200];
            var $industry_4 = [.5340,.5682,.5217,.5240,.4947,.4927];
            var $industry_5 = [.7433,.7338,.7294,.7469,.7565,.7426];
            var $industry_6 = [.4742,.5546,.5414,.5621,.5479,.5753];
            var $industry_7 = [.5242,.5625,.5660,.5222,.5113,.5312];
            var $industry_8 = [.5410,.5600,.5200,.5367,.5056,.5211];
            var $industry_9 = [.5250,.5925,.6122,.6163,.5444,.5422];
            var $industry_10 = [.5425,.5760,.5300,.5675,.6243,.6625];
            var $industry_11 = [.5885,.6127,.5873,.5969,.6472,.6511];
            var $industry_12 = [.3767,.4354,.4429,.4447,.4431,.4500];


            var $selector = '#compositeline';
            $($selector).sparkline($chart1, { width:'425', height:'204', lineWidth: 5, fillColor: '#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600', zeroAxis: false });
            $('#chart_1').sparkline($industry_1, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_2').sparkline($industry_2, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_3').sparkline($industry_3, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_4').sparkline($industry_4, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_5').sparkline($industry_5, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_6').sparkline($industry_6, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_7').sparkline($industry_7, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_8').sparkline($industry_8, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_9').sparkline($industry_9, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_10').sparkline($industry_10, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_11').sparkline($industry_11, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});
            $('#chart_12').sparkline($industry_12, { width:'300', height:'64', lineWidth: 3, fillColor:'#c9dfa2', lineColor: '#93bd41', spotRadius: '3', spotColor:'#fa8600'});


        });
    </script>

    <div class="composite-chart">
        <div class="rate">
            <h4>Aggregate Shopping Cart</h4>
            <h4>Abandonment Rate (last 6 months)</h4>
            <div class="current-rate">
                <p class="percent">57.49%</p>
            </div>
        </div>
        <div class="chart">
            <div id="compositeline"></div>
        </div>
    </div>

    <section class="button">
        <button class="start-trial learn-more" onclick="window.location = '/';">Track Your Abandonment Rate</button>
    </section>

    <div class="industry">
        <h2>Cart Abandonment Rates & Statistics by Vertical Industry</h2>
        <h3>Datapoints calculated using 969,561 orders tracked by Rejoiner in July 2014</h3>
        <ul>
            <li>#1</li>
            <li>Consumer Electronics</li>
            <li><div id="chart_5"></div></li>
            <li>74.26%</li>
            <li class="minus">-1.39%</li>
        </ul>
           <ul>
            <li>#2</li>
            <li>Medical</li>
            <li><div id="chart_10"></div></li>
            <li>66.25%</li>
            <li class="plus">+3.82%</li>
        </ul>
        <ul>
            <li>#3</li>
            <li>Accessories &amp; Eyewear</li>
            <li><div id="chart_11"></div></li>
            <li>65.11%</li>
            <li class="minus">-0.39%</li>
        </ul>
         <ul>
            <li>#4</li>
            <li>Beauty</li>
            <li><div id="chart_3"></div></li>
            <li>62.00%</li>
            <li class="plus">+2.73%</li>
        </ul>
        <ul>
            <li>#5</li>
            <li>Apparel</li>
            <li><div id="chart_1"></div></li>
            <li>60.75%</li>
            <li class="minus">-2.18%</li>
        </ul>
        <ul>
            <li>#6</li>
            <li>Grocery &amp; Gourmet</li>
            <li><div id="chart_6"></div></li>
            <li>57.53%</li>
            <li class="minus">-2.73%</li>
        </ul>    
        <ul>
            <li>#7</li>
            <li>Automotive</li>
            <li><div id="chart_2"></div></li>
            <li>56.92%</li>
            <li class="plus">+3.0%</li>
        </ul>
        </ul>
            <ul>
            <li>#8</li>
            <li>Jewelry</li>
            <li><div id="chart_9"></div></li>
            <li>54.22%</li>
            <li class="plus">+0.22%</li>
        </ul>
        <ul>
            <li>#9</li>
            <li>Home &amp; Garden</li>
            <li><div id="chart_7"></div></li>
            <li>53.12%</li>
            <li class="plus">+1.99%</li>
        </ul>
        <ul>
            <li>#10</li>
            <li>Industrial Supply</li>
            <li><div id="chart_8"></div></li>
            <li>52.11%</li>
            <li class="plus">+1.55%</li>
        </ul>
    
      
        <ul>
            <li>#11</li>
            <li>Collectibles</li>
            <li><div id="chart_4"></div></li>
            <li>49.27%</li>
            <li class="minus">-0.20%</li>
        </ul>
          
         <ul>
            <li>#12</li>
            <li>Sporting Goods</li>
            <li><div id="chart_12"></div></li>
            <li>45.00%</li>
            <li class="minus">-0.69%</li>
        </ul>
    </div>

     <section class="button">
        <button class="start-trial learn-more" onclick="window.location = '/';">Learn More about Rejoiner</button>
    </section>

    <section class="info">
        <div class="statistics">
            <h3>About</h3>
            <p>Shopping cart abandonment rates, collected from 969,561  eCommerce transactions in July 2014.
            <p>This page comprises aggregate and segmented abandonment rate statictics for twelve online retail industries and is compiled solely through the Rejoiner cart abandonment email platform.</p>
        </div>
        <div class="license">
            <h3>License</h3>
            <p>You may republish the data on a non-commercial basis. Please cite <strong>http://rejoiner.com</strong> as your resource. You may not charge to include the data in reports or presentations. If you’d like to use this data commercially, please contact us.
            <p>This work is licensed under a Creative Commons-Attribution-NonCommercial-Share-Alike 3.0 Unported License.</p>
        </div>
    </section>


  </section>


			
<?php include("footer.php"); ?>