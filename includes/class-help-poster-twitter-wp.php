<?php
/**
 * Created by PhpStorm.
 * User: smp
 * Date: 8/06/18
 * Time: 09:18 PM
 */

class Help_Poster_Twitter_WP_PTWP
{
    public function content()
    {
        ?>
        <div class="wrap about-wrap">
            <div class="about-text">
                <h2><?php echo __('Configuración', poster_twitter_wp_ptwp()->nameClean(true)); ?></h2>
                <p>1.<?php echo __('Crear una app', poster_twitter_wp_ptwp()->nameClean(true)); ?> <a href="https://apps.twitter.com/">https://apps.twitter.com/</a></p>
                <p>1.<?php echo __('Para las urls callback use, inserte las siguientes:', poster_twitter_wp_ptwp()->nameClean(true)); ?></p>
                <strong><?php echo admin_url().'admin.php?page=config-' . poster_twitter_wp_ptwp()->nameClean(); ?></strong>
                <strong><?php echo admin_url().'admin.php?page=role-' . poster_twitter_wp_ptwp()->nameClean(); ?></strong>
                <p>2.<?php echo __('Cree un cron job en su servidor, establezca el intervalo de 5 minutos y use el siguiente comando:', poster_twitter_wp_ptwp()->nameClean(true)); ?></p>
                <strong><?php echo site_url()."/wp-cron.php?doing_wp_cron > /dev/null 2>&1"; ?></strong>
            </div>
        </div>
        <?php
    }
}