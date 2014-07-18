<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<div id="header-wrapper" class="container-fluid">

<div id="electrokate-logo" class="ek-logo">
 <a href="/" title="Home" rel="home">
          <img src="/sites/all/themes/electrokate/images/ek-logo.png" alt="Home"/>
        </a>

</div>




</div>


<div id="menu-wrapper" class="container-fluid ">


<div class="row-fluid top-row">

<div class="span6 dark-top">
  


<div class="electrokate-menu" >

<?php if ($page['navigation']): ?>
      <div id="mobile"></div>
      <div id="navigation">
        <?php print render($page['navigation']); ?>
      </div>
      <?php endif ?>

</div>
</div>

<div class="span6 pic-top">
  
<div id="window" class="container-fluid electrokate-window">

</div>



</div>

</div>

<div class="row-fluid">
<div class="span12">
<div class="drupal">
<h1>Drupal</h1><br> 
<h3>developer</h3><h4>&amp;&nbsp;themer</h4><img src="/sites/all/themes/electrokate/images/druplicon-bw.png" width="40px" height="40px"/><br>

</div>
</div>


</div>

</div>

<div class="homepage-line container-fluid">
</div>

<div class="container-fluid electrokate-social">

<a class="facebook" href="//www.facebook.com/pages/Electrokate/229385130409949" target="_blank" title="Facebook"></a>

<a class="twitter" href="//www.twitter.com/DrupalKate" target="_blank" title="Twitter"></a>

<a class="email" href="mailto:katy441@gmail.com?subject=Contact Catherine" target="_blank" title="Email"></a>



</div>




  <?php print render($page['footer']); ?>



<?php print render($page['bottom']); ?>
