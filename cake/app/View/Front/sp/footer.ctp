<footer class="footer">
  <div class="navigation-banner">
    <a href="/ranking/" class="banner-link"><img src="/assets/sp/img/common/banner-ranking.jpg" alt="" class="banner-image"></a>
    <a href="/mailmagazine/" class="banner-link"><img src="/assets/sp/img/common/banner-mailmagazine.jpg" alt="" class="banner-image"></a>
    <a href="/access/" class="banner-link"><img src="/assets/sp/img/common/banner-access.jpg" alt="" class="banner-image"></a>
    <a href="/story/" class="banner-link"><img src="/assets/sp/img/common/banner-stories.jpg" alt="バナー ストーリーズ" class="banner-image"></a>
  </div>
  <div class="groupshop-banner" id="group-list">
    <a href="<?php echo $groupShopArray[1]['url']; ?>top/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-umeda.jpg" alt="SPEED梅田" class="banner-image"></a>
    <a href="<?php echo $groupShopArray[2]['url']; ?>top/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-nippon.jpg" alt="SPEED日本橋" class="banner-image"></a>
    <a href="<?php echo $groupShopArray[3]['url']; ?>top/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-nanba.jpg" alt="SPEED難波" class="banner-image"></a>
    <a href="<?php echo $groupShopArray[4]['url']; ?>top/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-kyobashi.jpg" alt="SPEED京橋" class="banner-image"></a>
    <a href="https://esthetique-osaka.com/top/"" class=" banner-link"><img src="/assets/sp/img/common/banner-shop-esthetique.jpg" alt="エステティーク" class="banner-image"></a>
    <a href="http://www.speed-eco.net/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-eco.jpg" alt="エコ" class="banner-image"></a>
    <a href="https://www.gekiyasu-club.com/" class="banner-link"><img src="/assets/sp/img/common/banner-shop-clubsakura.jpg" alt="club さくら" class="banner-image"></a>
  </div>
</footer>


<script>
  const nv_button = document.querySelector('.navigation-button'),
    footernav = document.querySelector('.bottom-nav'),
    nv_gplink = document.querySelector('.menu a[href*="#"]');
  const icons = document.querySelector('.top-stories-list');
  const icons_wrap = document.querySelector('.top-stories');
  let rem = (window.innerWidth / 750);
  let scroll_offset = 0;

  // MENU BUTTON TOGGLE
  nv_button.addEventListener('click', () => {
    if (nv_button.classList.contains('open')) {
      nv_button.classList.remove('open');
      document.removeEventListener('touchmove', handleTouchmove, {
        passive: false
      });
    } else {
      nv_button.classList.add('open');
      document.addEventListener('touchmove', handleTouchmove, {
        passive: false
      });
    }
  });

  // SCROLL TO GROUP SHOP LIST TWEAK
  nv_gplink.addEventListener('click', (e) => {
    e.preventDefault();
    nv_button.classList.remove('open');
    document.removeEventListener('touchmove', handleTouchmove, {
      passive: false
    });
    const gplist_p = document.querySelector('.groupshop-banner').getBoundingClientRect().top + pageYOffset;
    if (icons) {
      scroll_offset = 169 * rem;
    }
    window.scrollTo({
      top: gplist_p - scroll_offset,
      behavior: "smooth",
    })
  });

  // SCROLL DELAY
  let timeout;
  window.addEventListener('scroll', () => {
    if (timeout) return;
    timeout = setTimeout(function() {
      timeout = false;

      // MENU BUTTON FIXED ON TOP OR BOTTOM
      scroll = document.documentElement.scrollTop || document.body.scrollTop;
      if (scroll > nv_button.getBoundingClientRect().height) {
        nv_button.classList.add('bottom');
        nv_button.classList.remove('top');
        footernav.classList.add('show');
        footernav.classList.remove('hide');
      } else {
        nv_button.classList.remove('bottom');
        nv_button.classList.add('top');
        footernav.classList.add('hide');
        footernav.classList.remove('show');
      }

      // STORIES FIXED ON TOP
      if (icons_wrap) {
        if (scroll > icons_wrap.getBoundingClientRect().bottom + pageYOffset) {
          icons_wrap.classList.add('fixed');
        } else {
          icons_wrap.classList.remove('fixed');
        }
      }
    }, 250);
  });

  function handleTouchmove(e) {
    e.preventDefault();
  }
</script>