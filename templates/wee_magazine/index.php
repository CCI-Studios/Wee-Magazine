<!DOCTYPE html>
<?php
// get current menu name
$menu = JSite::getMenu();
if ($menu && $menu->getActive()) {
    $menu = $menu->getActive()->alias;
} else {
  $menu = "";
}
?>
<html>
<head lang="en">
  <jdoc:include type="head" />


  <link href="/templates/wee_magazine/css/template.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

  <script type="text/javascript" src="http://use.typekit.com/myb8uhi.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26049015-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="<?php echo $menu ?>">
  <div id="wrapper">
    <div id="mainheader"><div class="container">
      <jdoc:include type="modules" name="header" style="xhtml" />
    </div></div>

    <div class="floral"></div>

    <div id="body"><div class="container">
      <div id="component" <?php echo (!$this->countModules('sidebar'))? 'class="wide"':'' ?>>
        <jdoc:include type="component" />
      </div>

      <?php if ($this->countModules('sidebar')): ?>
      <div id="sidebar">
        <jdoc:include type="modules" name="sidebar" style="xhtml" />
      </div>
      <?php endif; ?>
    
      <div id="bottom">
        <jdoc:include type="modules" name="bottom" style="xhtml" />
      </div>

      <div id="copyright">
        <div class="right">
          Site by <a href="http://www.ccistudios.com">CCI Studios.com</a>
        </div>
        <div class="left">
          &copy; <?php echo date('Y') ?> Wee Magazine. All Rights Reserved.
        </div>

        <div class="clear"></div>
      </div>
    </div></div>
  
    <div class="floral dummy"></div>
    <div class="floral last"></div>
  </div>
</body>
</html>
