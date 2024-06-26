    <section class="events">
      <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">日本橋店</a></li>
        <span>›</span>
        <li class="bread-current">イベント情報</li>
      </ol>
      <h2 class="section-title">イベント情報</h2>

      <div class="shop-switch">
        <a href="/event/all" class="item"><span class="text<?php if($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a>
        <?php foreach($groupShopArray AS $key => $value){ ?>
            <a href="/event/<?php echo $key; ?>" class="item"><span class="text<?php if($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
      </div>

    <?php if(!empty($printArray['Event'])){ ?>
      <div class="events-inner">

        <?php foreach($printArray['Event'] AS $key => $value){ ?>
        <article class="events-post">
          <div class="events-text">
            <div class="events-shop"><?php echo $value['Event']['shop_name']; ?></div>
            <?php if(!empty($value['Image'][0]['image_url'])){ ?>
                <img src="<?php echo $value['Image'][0]['image_url']; ?>?<?php echo date('YmdHis'); ?>" class="events-banner">
            <?php } ?>
            <p><?php echo $value['Event']['comment']; ?></p>
          </div>
        </article>
        <?php } ?>

      </div>
    <?php } ?>
</section>