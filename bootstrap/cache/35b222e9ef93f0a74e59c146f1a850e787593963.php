<!DOCTYPE html>

<html lang="">
<head>
	<meta charsets="utf-8">
	<meta http-equiv="X-UA-Compatile" content="IE=edge">
	<title>Acme Store - <?php echo $__env->yieldContent('title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/all.css">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://use.fontawesome.com/ba3bdb747b.js"></script>
</head>
<body data-page-id="<?php echo $__env->yieldContent('data-page-id'); ?>">

<?php echo $__env->yieldContent('body'); ?>
  	
<script async src="/js/all.js"></script>
<?php echo $__env->yieldContent('stripe-checkout'); ?>
</body>
</html>