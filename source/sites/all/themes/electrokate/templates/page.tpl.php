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

<div id="header-wrapper" class="container-fluid">

<div id="electrokate-logo" class="ek-logo">
 <a href="/" title="Home" rel="home">
          <img src="/sites/all/themes/electrokate/images/logo-ek5.png" alt="Home"/>
        </a>

</div>
 <?php if (!$is_front):?>
  <div class="fb-like-box">
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FElectrokate%2F229385130409949&amp;width&amp;height=62&amp;colorscheme=dark&amp;show_faces=false&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:62px;" allowTransparency="true"></iframe>
  </div>

 <?php endif; ?>

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

<a class="facebook" href="//www.facebook.com/pages/Electrokate/229385130409949" target="_blank" title="Facebook"></a>

<a class="email" href="mailto:katy441@gmail.com?subject=Contact Catherine" target="_blank" title="Email"></a>



</div>




  <?php print render($page['footer']); ?>



<?php print render($page['bottom']); ?>
