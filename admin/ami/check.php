<?php


if(!empty($_POST['ami_check_post_checks'])):
    foreach ($items as $key => $item) {
        if(!empty($_POST[$item->name])){
            $wpdb->update($wpdb->prefix.SHARE_SOCIALE_NETWORKS_TABLE_NAME, array('status'=>TRUE), array('name' => $item->name));
        }else $wpdb->update($wpdb->prefix.SHARE_SOCIALE_NETWORKS_TABLE_NAME, array('status'=>FALSE), array('name' => $item->name));
    }
    $items = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix.SHARE_SOCIALE_NETWORKS_TABLE_NAME);
endif;