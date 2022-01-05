<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		CakePHP Shopping Cart
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
    body {
	  padding-top: 20px;
	  padding-bottom: 20px;
	}
	
	.navbar {
	  margin-bottom: 20px;
	}
    </style>
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>

	

<div class="container">
	
	<nav class="navbar navbar-default" role="navigation">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <?php echo $this->Html->link('CakePHP Shopping Cart','/',array('class'=>'navbar-brand'));?>
	  </div>
	
	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
	      <li>
	      	<?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">'.$count.'</span>',
	      								array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>
	      </li>
	    </ul>
	  </div><!-- /.navbar-collapse -->
	</nav>
	
	<?php echo $this->fetch('content'); ?>
	
</div>
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
