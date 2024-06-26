<header class="global-header">
  <h1 hidden><?php echo SITE_NAME; ?></h1>
  <a href="/group/"><img src="/assets/sp/img/top/group/header.jpg" alt="ヘッダーバナー" class="header-banner"></a>
  <button class="navigation-button">
    <span class="rect"></span>
    <span class="label">メニュー</span>
  </button>
  <nav class="navigation">
    <ul class="menu">
      <li class="item"><a href="/girls/">女の子一覧</a></li>
      <li class="item"><a href="/schedule/">出勤情報</a></li>
      <li class="item"><a href="/realtime/">即ヒメ</a></li>
      <li class="item"><a href="/newface/">新人情報</a></li>
      <li class="item"><a href="/story/">ストーリーズ</a></li>
      <li class="item"><a href="/event/">イベント情報</a></li>
      <li class="item"><a href="/access/">アクセス</a></li>
      <li class="item"><a href="/mailmagazine/">メールマガジン</a></li>
      <li class="item"><a href="/ranking/">ランキング</a></li>
      <li class="item"><a href="http://mens.speed-recruit.net/">男子求人</a></li>
      <li class="item"><a href="http://speed-recruit.net/">女の子求人情報</a></li>
      <li class="item"><a href="/group/">グループトップ</a></li>
      <li class="item"><a href="#group-list">グループ店舗一覧</a></li>
    </ul>
  </nav>
</header>

<div class="shop-nav bottom-nav">
  <?php foreach ($groupShopArray as $key => $value) { ?>
    <a href="<?php echo $value['url']; ?>top/" class="shop-nav-item"><?php echo $value['name']; ?></a>
  <?php } ?>
</div>