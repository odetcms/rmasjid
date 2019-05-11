<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 4/28/2019
 * Time: 12:45 PM
 *
 * @package Masjid/Components
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="mt-4">
	<h1><i class="fa fa-check-circle text-primary"></i></h1>
	<h2><?php echo __( 'Thank you for your payment', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
	<p class="lead"><?php echo __( 'We are validating your payment, once it`s done will let you notified. Once again thank you so much and jazakumullahu khoiron.', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
	<a href="<?php echo home_url(); ?>" class="btn  btn-outline-primary"><?php echo __( 'Back to Homepage', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
</div>
