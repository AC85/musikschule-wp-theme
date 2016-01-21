<?php
/**
 * Template Name: Normal
 */
?>
<?php get_header(); ?>

<?php if (is_page("Organisation")) {
    get_template_part('templates/organisation');
} if(is_page("Förderer")) {
    get_template_part('templates/foerderer');
}
else {
    get_template_part('templates/default-page');
} ?>


<?php get_footer(); ?>