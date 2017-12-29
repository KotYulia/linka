<?php
$website_name = str_replace('™', '<sup class="logo-small-text">™</sup>', $website_name);
?>

<a class="dima-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"
   title="<?php echo esc_attr( $website_description ); ?>">
    <?php if ( dima_is_transparent_navigation() && $logo_two != '' ) {
        ?>
        <span class="no-fixed-logo">
			<?php echo ( $logo_two == '' ) ? $website_name : $website_logo_two; ?>
            <?php echo $website_logo_two_retina; ?>
		</span>
        <span class="fixed-logo">
			<?php echo ( $logo == '' ) ? $website_name : $website_logo; ?>
            <?php echo $website_logo_retina; ?>
		</span>
    <?php } else {
        echo ( $logo == '' ) ? $website_name : $website_logo;
        echo $website_logo_retina;
    } ?>

</a>

//Mobile
<?php
/*$website_name = str_replace('™', '<sup class="logo-small-text">™</sup>', $website_name);*/
?>

<a class="dima-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"
   title="<?php echo esc_attr( $website_description ); ?>">
    <?php
    if ( $logo_mobile == '' ) {
        echo ( $logo == '' ) ? esc_attr( $website_name ) : $website_logo;
        echo $website_logo_retina;
    } else {
        echo $website_logo_mobile;
        echo $website_logo_mobile_retina;
    }
    ?>
</a>
<?php
