<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<html xmlns:og="http://opengraphprotocol.org/schema/">
</html>

<!-- <div id="my-search" class ="google-search">
<script>
  (function() {
    var cx = '018344887540803935366:xhzayjk-itm';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search> -->

</div>
<div id="header-wrapper" class="container-fluid">



<div id="electrokate-logo" class="ek-logo">
 <a href="/" title="Home" rel="home">
          <img src="/sites/all/themes/electrokate/images/logo-ek5.png" alt="Home"/>
        </a>



</div>

 <?php 
/*


 if (!$is_front):?>

<div class ="upperbuttons">
<a class="facebook" href="https://www.facebook.com/pages/Electrokate/229385130409949" target="_blank" title="Facebook"></a>
<a class="sm_reverbnation" href="http://www.reverbnation.com/electrokate" target="_blank" title="ReverbNation"></a>
</div>
 <?php endif; 
*/
 ?>

</div>



  
      <?php if (!$is_front):?>
<div id="menu-wrapper" class="container-fluid">
<div class="row-fluid">
<div class="span12">
<div class="electrokate-menu-pages" >

<?php if ($page['navigation']): ?>
      <div id="mobile"></div>
      <div id="navigation-pages">
        <?php print render($page['navigation']); ?>
      </div>
      <?php endif ?>

</div>
</div>
</div>
</div>
       <?php endif; ?>

<div class="container-fluid ">





<div class="row-fluid">


<div class="span12">
  <div id="page-wrapper" class="container-fluid">
<div id="page" class="container-fluid">

  <?php print render($title_prefix); ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
            <?php print render($page['content']); ?>
            

</div>
</div>

</div>

</div>

</div>



<div class="container-fluid electrokate-social">
  <div>
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FElectrokate%2F229385130409949&amp;width&amp;height=62&amp;colorscheme=dark&amp;show_faces=false&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:62px; width: 180px;" allowTransparency="true"></iframe>
  </div>
<a class="reverbnation" href="http://www.reverbnation.com/electrokate" target="_blank" title="ReverbNation"></a>






</div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- My First add -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4716326963308620"
     data-ad-slot="4660711394"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>





  <?php print render($page['footer']); ?>



<?php print render($page['bottom']); ?>
