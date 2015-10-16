<style id="jsbin-css">
.morris-hover {display: block; margin: 2% auto; background-color: #EFEFEF;padding: 5px 0px 0px;max-width: 290px;}
.morris-hover-row-label {display:block;padding: 10px; max-width: 30px;font-family: 'museo-sans', Helvetica, Arial, sans-serif; font-size: 13px; text-align: right; float: left;}
.morris-hover-point{display:block;padding: 10px 0px; color: #999 !important; font-family: 'museo-sans', Helvetica, Arial, sans-serif;font-size: 13px; text-align: left;float: left; max-width: 250px;}
#line-example {width: 100%; margin: 4% auto 2%; overflow: scroll;}
path {stroke: rgb(96, 175, 56);}
circle {fill: rgb(96, 175, 56);}
</style>

<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script src="//use.typekit.net/bon1cvx.js"></script>


<div id="line-example"></div>

<script id="baymard-graph">
Morris.Line({
  element: 'line-example',
  data: [
    { y: '2006', a: 59.8 },
    { y: '2007', a: 61.4 },
    { y: '2008', a: 62.0 },
    { y: '2009', a: 52.9 },
    { y: '2010', a: 51.8 },
    { y: '2011', a: 51.6 },
    { y: '2012', a: 59.9 },
    { y: '2013', a: 62.3 },
    { y: '2014', a: 50.7 },
    { y: '2015', a: 75.3 }
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Cart Abandonment Average'],
  units: '%',
  resize: true
});
</script>
