<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$args = ! empty( $args ) ? $args : array();
$style_string = ! empty( $args[0] ) ? $args[0] : '';
?>
<svg style="<?php echo esc_attr( $style_string ); ?>" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 512 512" width="24" height="24">
	<path d="m409 290c-5 24-43 50-85 56-86 11-137-6-137-6 3 13-4 54 70 52 31 0 58-7 58-7l2 27c-51 24-107 15-140 6-67-17-79-90-81-162v-59c0-74 49-96 49-96 50-24 180-22 222 0 0 0 49 22 49 96 0 0 1 55-7 93"/>
	<path d="m358 202v91h-35v-88c0-18-8-27-23-27-18 0-27 11-27 33v47h-34v-47c0-22-9-33-27-33-15 0-23 9-23 27v88h-35v-91c0-18 5-60 52-60 39 0 50 37 50 37s10-37 50-37c45 0 52 42 52 60"/>
</svg>