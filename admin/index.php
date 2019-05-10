<?php
  ob_start();
  require('../admin/sidebar.php');
  require('../dbase/dbfunctions.php');

  $buffer=ob_get_contents();
  ob_end_clean();
  $title = "Admin Panel";
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer); echo $buffer;
 ?>

<body background="/jig/assets/img/bk.png" id = "myimg">

<div class="admin-contentInfo">
  <h3 style="text-align:center;">Nothing to do? Buy some FDs or check the stocks below</h3>
  <!-- Stock live quites -->
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_338b6"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 480,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_338b6"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
</div>

