    <section class="mailmagazine">
      <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">メールマガジン</li>
      </ol>
      <h2 class="section-title">メールマガジン</h2>

      <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">メルマガ会員募集中</h3>
        <p class="process">
          登録は簡単！下のボタンを押して、空メールを送信するだけです！<br>
          携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願い致します。<br>
          メールが受信されない場合があります。
        </p>
        <a href="mailto:<?php echo ACMAILER_REG; ?>" class="button-more">メールマガジンに登録する</a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
          <a href="mailto:mm-reg-<?php echo $value['id']; ?>@<?php echo $value['domain']; ?>" class="button-more"><?php echo $value['name']; ?>のメールマガジンに登録する</a>
        <?php } ?>

        <p class="process">
          登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>
          またのご利用をお待ちしております。
        </p>
        <a href="mailto:<?php echo ACMAILER_DEL; ?>" class="button-more">メールマガジンを解除する</a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
          <a href="mailto:mm-del-<?php echo $value['id']; ?>@<?php echo $value['domain']; ?>" class="button-more"><?php echo $value['name']; ?>のメールマガジンを解除する</a>
        <?php } ?>
      </div>

      <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">出勤メルマガ</h3>
        <p class="process">
          お気に入りのあの子の出勤をガッチリおさえる！<br>
          あらかじめ指定した女の子が出勤すると、あなたの元にメールを配信！<br>
          お店で出勤を確認する手間が省けます！<br>お気に入りの女の子がいれば、何人でも登録OK！<br>
          携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願いします。<br>
          メールが受信されない場合があります。
        </p>
        <?php foreach ($groupShopArray as $key => $value) { ?>
          <a href="<?php echo $value['url']; ?>mailmagazine/" class="button-more"><?php echo $value['name']; ?>の出勤メルマガに登録する</a>
        <?php } ?>
      </div>
    </section>