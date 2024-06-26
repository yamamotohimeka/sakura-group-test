<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php if (!empty($description)) echo $description; ?>" />
	<title><?php if (!empty($title)) echo $title; ?></title>
	<link rel="stylesheet" href="/assets/css/reset.css" />
	<link rel="stylesheet" href="/assets/css/jquery.bxslider.css" />
	<link rel="stylesheet" href="/assets/css/swiper.min.css" />
	<link rel="stylesheet" href="/assets/css/remodal.css" />
	<link rel="stylesheet" href="/assets/css/remodal-default-theme.css" />
	<link rel="stylesheet" href="/assets/css/base.css" />
	<link rel="icon" href="/assets/img/common/favicon.ico" />
	<!-- ogp -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php if (!empty($title)) echo $title; ?>" />
	<meta property="og:description" content="<?php echo SHOP_AREA_NAME; ?>で風俗をお探しなら在籍女の子数、女の子の可愛さ、料金全てにおいてお客様に満足いただけること間違いなしの当店へ是非一度ご来店下さい。" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/assets/img/common/ogp-group.jpg">
	<meta property="og:image:alt" content="ホテヘルグループ<?php echo SITE_NAME; ?>">
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:site_name" content="ホテヘルグループ<?php echo SITE_NAME; ?>" />

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<!-- ////////////////アナリティクス//////////////// -->

	<!-- ////////////////アナリティクス//////////////// -->
</head>

<body class="top group">

	<?php echo $this->element('../Front/pc/header', array('mes' => 'ヘッダー')); ?>

	<?php echo $content_for_layout; ?>

	<?php echo $this->element('../Front/pc/footer', array('mes' => 'フッター')); ?>

</body>

</html>