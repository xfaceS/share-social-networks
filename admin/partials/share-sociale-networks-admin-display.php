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
$items = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix.AMI_TABLE_NAME);

include(sprintf("%s/../ami/check.php", dirname(__FILE__)));


?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 100%;max-width:100%;">
                <div class="card-body">
                    <h3 class="card-title"><?php echo AMI_PLUGIN_SETTINGS_NAME;?></h3>
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
                                <label class="form-check-label" for="<?php echo $item->name;?>"><?php echo $item->name;?></label>
                            </td>
                            <td>
                                <input class="form-check-input" type="checkbox" name="<?php echo $item->name;?>" id="<?php echo $item->name;?>" value="1" <?php  if($item->status != null && $item->status==true): echo "checked"; endif;?>>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <hr>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <div class="w-100 bg-ami">
                        <a href="https://www.almisbah.ma" target="_blank" rel="noopener noreferrer">
                            <img class="ami-logo" src="<?php echo plugins_url("/".AMI_PLUGIN_FOLDER_NAME."/admin/images/logo.png");?>" alt="logo-AMI">
                        </a>
                    </div>
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