<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/public/partials
 */
global $wpdb,$wp; 
$items = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix.AMI_TABLE_NAME." WHERE status = TRUE");

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="ami-share-settings">
    <?php foreach ($items as $key => $item):?>
        <input class="ami-input-parames" type="hidden"  value="<?php echo $item->name;?>">
    <?php endforeach;?>
    <input class="ami-url" type="hidden"  value="<?php echo home_url( $wp->request );?>">
</div>

