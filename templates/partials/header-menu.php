<?php
/**
 * Displays header menus. The menu in dashboard must be enabled.
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since added by Vincent Zhang
 */
?>

<?php 
$searchIcon = '<svg class="search-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="icon/ic_search" fill-rule="evenodd"><path d="M13,15.9291111 L13,21.5 C13,21.7761424 12.7761424,22 12.5,22 L11.5,22 C11.2238576,22 11,21.7761424 11,21.5 L11,15.9291111 C7.60770586,15.4438815 5,12.5264719 5,9 C5,5.13400675 8.13400675,2 12,2 C15.8659932,2 19,5.13400675 19,9 C19,12.5264719 16.3922941,15.4438815 13,15.9291111 Z M12,4 C9.23857625,4 7,6.23857625 7,9 C7,11.7614237 9.23857625,14 12,14 C14.7614237,14 17,11.7614237 17,9 C17,6.23857625 14.7614237,4 12,4 Z" id="ic_search" fill-rule="nonzero" transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000)"></path></g></svg>';
?>

<?php 
// TODO: the main-navigation class is wrangled with a lot of assumptions. Clean it up later.
if ( has_nav_menu( 'header' ) ) : ?>
  <nav class="main-navigation header__nav" aria-label="<?php esc_attr_e( 'Content Menu', 'twentynineteen' ); ?>">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'header',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      )
    );
    ?>
  </nav>
<?php endif; ?>