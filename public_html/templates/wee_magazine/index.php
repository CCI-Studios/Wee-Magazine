<!DOCTYPE html>

<html>
<head lang="en">
	<jdoc:include type="head" />


	<link href="/templates/wee_magazine/css/template.css" rel="stylesheet" />

	<script type="text/javascript" src="http://use.typekit.com/myb8uhi.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>
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
