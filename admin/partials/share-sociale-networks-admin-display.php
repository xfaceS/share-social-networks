<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/admin/partials
 */

global $wpdb; 
$items = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix.SHARE_SOCIALE_NETWORKS_TABLE_NAME);

include(sprintf("%s/../ami/check.php", dirname(__FILE__)));


?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col">
            <div class="card" style="width: 100%;max-width:100%;">
                <div class="card-body">
                    <h3 class="card-title"><?php esc_html_e(SHARE_SOCIALE_NETWORKS_PLUGIN_SETTINGS_NAME);?></h3>
                    <h5 class="card-subtitle mb-2 text-muted">
                        Her you can disable or enable social network !
                    </h5>
                </div>
                <hr>
                <p class="card-text"><Strong>Select box to show social,unselect box for hide social:</Strong></p>
                <hr>
                <form action="" method="POST">
                    <?php wp_nonce_field( 'AMI_plugin', 'ami_check_post_checks' ); ?>
                    <table>
                        <?php foreach ($items as $key => $item):?>  
                        <tr>
                            <td>
                                <label class="form-check-label" for="<?php esc_attr_e($item->name);?>"><?php esc_html_e($item->name);?></label>
                            </td>
                            <td>
                                <input class="form-check-input" type="checkbox" name="<?php esc_attr_e($item->name);?>" id="<?php esc_attr_e($item->name);?>" value="1" <?php  if($item->status != null && $item->status==true): esc_attr_e("checked"); endif;?>>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <hr>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text mb-2 text-muted mt-3">
                        We are a web agency that offers website design, mobile development, digital internet marketing and <strong>Make Wordpress Plugins</strong>.
                    </p>
                    <a class="btn btn-success btn-block" href="https://www.almisbah.ma/contacter-nous" target="_blank" rel="noopener noreferrer">
                        Contact Us
                    </a>

                    <a class="btn btn-primary btn-block" href="https://www.paypal.me/mrcoder8" target="_blank" rel="noopener noreferrer">
                        Donate
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>