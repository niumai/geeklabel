<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<?php /* removed by Ning Ning Niumai
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
*/
?>

<?php if ($page['header']): ?>    
    <div id="header" class="header">
        <div class="container">
            <?php print render($page['header']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['design']): ?>    
    <div id="design" class="design">
        <div class="container">
            <?php print render($page['design']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['build']): ?>    
    <div id="build" class="build">
        <div class="container">
            <?php print render($page['build']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['designbuild']): ?>    
    <div id="designbuild" class="designbuild">
        <div class="container">
            <?php print render($page['designbuild']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['services']): ?>    
    <div id="services" class="services">
        <div class="container">
            <?php print render($page['services']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['clients']): ?>    
    <div id="clients" class="clients">
        <div class="container">
            <?php print render($page['clients']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['find']): ?>    
    <div id="find" class="find">
        <div class="">
            <?php print render($page['find']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['contact']): ?>    
    <div id="contact" class="contact">
        <div class="container">
            <?php print render($page['contact']); ?>
        </div>
    </div>
<?php endif; ?>

<?php if (!$is_front): ?>  
<div class="main-container <?php print $container_class; ?>">

  <div class="row">

    <section<?php print $content_column_class; ?>>
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

  </div>
</div>
<?php endif; ?>

<script>
jQuery(document).ready(function(){
    jQuery('[data-toggle="popover"]').popover();   
});
</script>

<script>
jQuery('.multi-item-carousel').carousel({
  interval: false
});
jQuery('.multi-item-carousel .item').each(function(){
  var next = jQuery(this).next();
  if (!next.length) {
    next = jQuery(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo(jQuery(this));
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo(jQuery(this));
  } else {
  	jQuery(this).siblings(':first').children(':first-child').clone().appendTo(jQuery(this));
  }
});
</script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL-DGLtMZtX_pgsXrPTKafMRkEdQfJ6q4"></script>
        
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var mapOptions = {
                    zoom: 14,
                    scrollwheel: false,
                    center: new google.maps.LatLng(51.524110, -0.073897),
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var image = {
                    url: 'sites/all/themes/bootstrap/images/map_marker.png',
                    scaledSize : new google.maps.Size(50, 50),
                };
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.524110, -0.073897),
                    map: map,
                    title: 'Snazzy!',
                    icon: image
                });
                
                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<p id="firstHeading" class="firstHeading">Geek Label<br />4th Floor<br />27 - 33 Bethnal Green Road<br />Shoreditch<br />London<br />E1 6LA</p>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                google.maps.event.addListener(marker, 'click', function() {
                   infowindow.open(map,marker);
                });
                infowindow.open(map,marker);
            }
        </script>
        
<script>
jQuery(document).ready(function(){
  jQuery('body').scrollspy({target: ".front", offset: 50});   
  jQuery("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>

