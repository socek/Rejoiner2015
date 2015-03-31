<?php
$active = "index";
$pagestyles = "index";
$pageTitle = "Shopping Cart Abandonment Rates & Statistics | Rejoiner";
$meta_keywords = "shopping cart abandonment rate statistics";
$metaDescription = "Rejoiner's index of eCommerce shopping cart abandonment rates & statistics. The data is analyzed on aggregate and by vertical industry.";
include("header.php");
?>
    <div style="margin-top:70px;margin-bottom:20px;text-align:center;">
        <section class="headsection rate-statistic clearfix">
            <h1>Shopping Cart Abandonment Rates &amp; Statistics</h1>
            <h3>Abandonment rate index segmented by vertical industry &amp; updated monthly</h3>
        </section>
    </div>

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

    <section class="composite-chart">
        <div class="rate">
            <h4>Aggregate Shopping Cart<br>
            Abandonment Rate (last 6 months)</h4>
            <div class="current-rate">
                <p class="percent">57.49%</p>
            </div>
        </div>
        <div class="chart">
            <div id="compositeline"></div>
        </div>
    </section>

    <section class="section-cta">
       <a iclass="btn-freetrial"  href="/index.php#optimize">Track Your Abandonment Rate</a>
    </section>

    <section class="industry">
        <h3>Cart Abandonment Rates & Statistics by Vertical Industry</h3>
        <p>Datapoints calculated using 969,561 orders tracked by Rejoiner in July 2014</p>
        <ul style="margin-top:80px;">
            <li class="number">#1</li>
            <li class="ind">Consumer Electronics</li>
            <li><div id="chart_5"></div></li>
            <li class="percent">74.26%</li>
            <li class="minus">-1.39%</li>
        </ul>
           <ul>
            <li class="number">#2</li>
            <li class="ind">Medical</li>
            <li><div id="chart_10"></div></li>
            <li class="percent">66.25%</li>
            <li class="plus">+3.82%</li>
        </ul>
        <ul>
            <li class="number">#3</li>
            <li class="ind">Accessories &amp; Eyewear</li>
            <li><div id="chart_11"></div></li>
            <li class="percent">65.11%</li>
            <li class="minus">-0.39%</li>
        </ul>
         <ul>
            <li class="number">#4</li>
            <li class="ind">Beauty</li>
            <li ><div id="chart_3"></div></li>
            <li class="percent">62.00%</li>
            <li class="plus">+2.73%</li>
        </ul>
        <ul>
            <li class="number">#5</li>
            <li class="ind">Apparel</li>
            <li><div id="chart_1"></div></li>
            <li class="percent">60.75%</li>
            <li class="minus">-2.18%</li>
        </ul>
        <ul>
            <li class="number">#6</li>
            <li class="ind">Grocery &amp; Gourmet</li>
            <li><div id="chart_6"></div></li>
            <li class="percent">57.53%</li>
            <li class="minus">-2.73%</li>
        </ul>    
        <ul>
            <li class="number">#7</li>
            <li class="ind">Automotive</li>
            <li><div id="chart_2"></div></li>
            <li class="percent">56.92%</li>
            <li class="plus">+3.0%</li>
        </ul>
        </ul>
            <ul>
            <li class="number">#8</li>
            <li class="ind">Jewelry</li>
            <li><div id="chart_9"></div></li>
            <li class="percent">54.22%</li>
            <li class="plus">+0.22%</li>
        </ul>
        <ul>
            <li class="number">#9</li>
            <li class="ind">Home &amp; Garden</li>
            <li><div id="chart_7"></div></li>
            <li class="percent">53.12%</li>
            <li class="plus">+1.99%</li>
        </ul>
        <ul>
            <li class="number">#10</li>
            <li class="ind">Industrial Supply</li>
            <li><div id="chart_8"></div></li>
            <li class="percent">52.11%</li>
            <li class="plus">+1.55%</li>
        </ul>
    
      
        <ul>
            <li class="number">#11</li>
            <li class="ind">Collectibles</li>
            <li><div id="chart_4"></div></li>
            <li class="percent">49.27%</li>
            <li class="minus">-0.20%</li>
        </ul>
          
         <ul>
            <li class="number">#12</li>
            <li class="ind">Sporting Goods</li>
            <li><div id="chart_12"></div></li>
            <li class="percent">45.00%</li>
            <li class="minus">-0.69%</li>
        </ul>
    </section>

     <section class="section-cta" style="text-align:center;">
        <a class="btn-freetrial" href="/request-a-demo">Request A Demo</a>
    </section>

    <section class="info" style="margin: 40px auto 80px auto; text-align:center;">
        <div class="statistics">
            <h3 style="letter-spacing:2px; color:#609736; font-family:'museo-sans'; font-size:17px; font-weight:700;">About</h3>
            <p>Shopping cart abandonment rates, collected from 969,561  eCommerce transactions in July 2014.
            <p>This page comprises aggregate and segmented abandonment rate statictics for twelve online retail industries and is compiled solely through the Rejoiner cart abandonment email platform.</p>
        </div>
        <div class="license">
            <h3 style="letter-spacing:2px; color:#609736; font-family:'museo-sans'; font-size:17px; font-weight:700;">License</h3>
            <p>You may republish the data on a non-commercial basis. Please cite <strong>http://rejoiner.com</strong> as your resource. You may not charge to include the data in reports or presentations. If you’d like to use this data commercially, please contact us.
            <p>This work is licensed under a Creative Commons-Attribution-NonCommercial-Share-Alike 3.0 Unported License.</p>
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