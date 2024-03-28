<?php
/**
 * Theme Page
 *
 * @package Expert Life Coach
 */

if ( ! defined( 'EXPERT_LIFE_COACH_FREE_THEME_URL' ) ) {
	define( 'EXPERT_LIFE_COACH_FREE_THEME_URL', 'https://www.seothemesexpert.com/wordpress/free-life-coach-wordpress-theme/' );
}
if ( ! defined( 'EXPERT_LIFE_COACH_PRO_THEME_URL' ) ) {
	define( 'EXPERT_LIFE_COACH_PRO_THEME_URL', 'https://www.seothemesexpert.com/wordpress/life-coach-website-template/' );
}
if ( ! defined( 'EXPERT_LIFE_COACH_DEMO_THEME_URL' ) ) {
	define( 'EXPERT_LIFE_COACH_DEMO_THEME_URL', 'https://www.seothemesexpert.com/demo/expert-life-coach/' );
}
if ( ! defined( 'EXPERT_LIFE_COACH_DOCS_THEME_URL' ) ) {
    define( 'EXPERT_LIFE_COACH_DOCS_THEME_URL', 'https://www.seothemesexpert.com/docs/expert-life-coach-website-template-pro/' );
}
if ( ! defined( 'EXPERT_LIFE_COACH_RATE_THEME_URL' ) ) {
    define( 'EXPERT_LIFE_COACH_RATE_THEME_URL', 'https://wordpress.org/support/theme/expert-life-coach/reviews/#new-post' );
}
if ( ! defined( 'EXPERT_LIFE_COACH_SUPPORT_THEME_URL' ) ) {
    define( 'EXPERT_LIFE_COACH_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/expert-life-coach/' );
}

/**
 * Add theme page
 */
function expert_life_coach_menu() {
	add_theme_page( esc_html__( 'About Theme', 'expert-life-coach' ), esc_html__( 'About Theme', 'expert-life-coach' ), 'edit_theme_options', 'expert-life-coach-about', 'expert_life_coach_about_display' );
}
add_action( 'admin_menu', 'expert_life_coach_menu' );

/**
 * Display About page
 */
function expert_life_coach_about_display() { ?>
	<div class="wrap about-wrap full-width-layout">		
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'expert-life-coach' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'expert-life-coach-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'expert-life-coach-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'expert-life-coach' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'expert-life-coach-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'expert-life-coach' ); ?></a>
		</nav>

		<?php
			expert_life_coach_main_screen();

			expert_life_coach_free_vs_pro();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'expert-life-coach' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'expert-life-coach' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'expert-life-coach' ) : esc_html_e( 'Go to Dashboard', 'expert-life-coach' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function expert_life_coach_main_screen() {
	if ( isset( $_GET['page'] ) && 'expert-life-coach-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="main-col-box">
			<div class="feature-section two-col">
				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Upgrade To Pro', 'expert-life-coach' ); ?></h2>
					<p><?php esc_html_e( 'Take a step towards excellence, try our premium theme. Use Code', 'expert-life-coach' ) ?><span class="usecode">" STEPro10 "</span></p>
					<p><a href="<?php echo esc_url( EXPERT_LIFE_COACH_PRO_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Upgrade Pro', 'expert-life-coach' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Info', 'expert-life-coach' ); ?></h2>
					<p><?php esc_html_e( 'Know more about Expert Life Coach.', 'expert-life-coach' ) ?></p>
					<p><a href="<?php echo esc_url( EXPERT_LIFE_COACH_FREE_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Info', 'expert-life-coach' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'expert-life-coach' ); ?></h2>
					<p><?php esc_html_e( 'You can get all theme options in customizer.', 'expert-life-coach' ) ?></p>
					<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'expert-life-coach' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Need Support?', 'expert-life-coach' ); ?></h2>
					<p><?php esc_html_e( 'If you are having some issues with the theme or you want to tweak some thing, you can contact us our expert team will help you.', 'expert-life-coach' ) ?></p>
					<p><a href="<?php echo esc_url( EXPERT_LIFE_COACH_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'expert-life-coach' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Review', 'expert-life-coach' ); ?></h2>
					<p><?php esc_html_e( 'If you have loved our theme please show your support with the review.', 'expert-life-coach' ) ?></p>
					<p><a href="<?php echo esc_url( EXPERT_LIFE_COACH_RATE_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Rate Us', 'expert-life-coach' ); ?></a></p>
				</div>		
			</div>
			<div class="about-theme">
				<?php $expert_life_coach_theme = wp_get_theme(); ?>

				<h1><?php echo esc_html( $expert_life_coach_theme ); ?></h1>
				<p class="version"><?php esc_html_e( 'Version', 'expert-life-coach' ); ?>: <?php echo esc_html($expert_life_coach_theme['Version']);?></p>
				<div class="theme-description">
					<p class="actions">
						<a href="<?php echo esc_url( EXPERT_LIFE_COACH_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'expert-life-coach' ); ?></a>

						<a href="<?php echo esc_url( EXPERT_LIFE_COACH_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'expert-life-coach' ); ?></a>

						<a href="<?php echo esc_url( EXPERT_LIFE_COACH_DOCS_THEME_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'expert-life-coach' ); ?></a>
					</p>
				</div>
				<div class="theme-screenshot">
					<img src="<?php echo esc_url( $expert_life_coach_theme->get_screenshot() ); ?>" />
				</div>
			</div>
		</div>
	<?php
	}
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function expert_life_coach_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<div class="theme-description">
				<p class="actions">
					<a href="<?php echo esc_url( EXPERT_LIFE_COACH_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'expert-life-coach' ); ?></a>

					<a href="<?php echo esc_url( EXPERT_LIFE_COACH_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'expert-life-coach' ); ?></a>

					<a href="<?php echo esc_url( EXPERT_LIFE_COACH_DOCS_THEME_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'expert-life-coach' ); ?></a>
				</p>
			</div>
			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'expert-life-coach' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'expert-life-coach' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'expert-life-coach' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'One click demo import', 'expert-life-coach' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Color pallete and font options', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Demo Content has 8 to 10 sections', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Rearrange sections as per your need', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Internal Pages', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Plugin Integration', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Ultimate technical support', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access our Support Forums', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Get regular updates', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Install theme on unlimited domains', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Mobile Responsive', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Easy Customization', 'expert-life-coach' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn protheme button button-secondary" href="<?php echo esc_url(EXPERT_LIFE_COACH_PRO_THEME_URL);?>"><?php esc_html_e( 'Go for Premium', 'expert-life-coach' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}
