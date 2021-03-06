<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 4/26/2019
 * Time: 9:23 PM
 *
 * @package Masjid/Components
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$short_datetime = isset( $short_datetime ) ? '<p class="card-text">' . esc_html( $short_datetime ) . '</p>' : '';
?>

<div class="col-lg-4 col-md-6 d-flex lecture-item-list">
	<div class="card mb-3 style2 flex-fill">
		<img class="card-img-top" src="<?php echo $image_url; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_html( $title ); ?>">
		<div class="card-body">
			<a href="<?php echo $permalink; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" class="permalink">
				<h5 class="card-title"><?php echo esc_html( $title ); ?></h5>
			</a>
			<?php echo $short_datetime; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<div class="action">
				<div class="py-3">
					<div class="row">
						<div class="col-6 text-left">
							<small class="text-muted">
								<i class="fa fa-clock"></i> <?php echo __( 'Time Start', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
						<div class="col-6 text-right">
							<small class="text-muted">
								<?php echo '<span>' . $time . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-left">
							<small class="text-muted">
								<i class="fa fa-sync-alt"></i> <?php echo __( 'Type', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
						<div class="col-6 text-right">
							<small class="text-muted">
								<?php echo '<span>' . $type . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-left">
							<small class="text-muted">
								<i class="fa fa-user"></i> <?php echo __( 'Lecturer', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
						<div class="col-6 text-right">
							<small class="text-muted">
								<?php echo '<span>' . $lecturer . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</small>
						</div>
					</div>
				</div>
				<a href="<?php echo $permalink; ?>" class="btn btn-primary btn-block"><?php echo __( 'See more', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
			</div>
		</div>
	</div>
</div>
