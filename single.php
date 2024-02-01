<?php
get_header();
$terms = get_the_terms($post->ID, 'category');
$author_id = get_post_field('post_author', $post->ID);
$first_name = get_the_author_meta('first_name', $author_id);
$last_name = get_the_author_meta('last_name', $author_id);
$url = get_author_posts_url($author_id);
?>
<section class="entry-page single-page-post">
  <div class="container">
    <div class="single-page-post__wrapper">
      <h1 class="single-page-post__title"><?php the_title(); ?></h1>
      <div class="single-page-post__meta">
        <div class="author">by <a href="<?php echo $url; ?>"><?php echo $first_name . ' ' . $last_name; ?></a></div>
        <?php
        $postDay = get_the_date('M d');
        $postYear = get_the_date('Y');
        ?>
        <div class="single-page-post__meta-date"><?php echo $postDay; ?> <?php echo $postYear; ?>
        </div>
        <ul>
          <?php
          $i = 1;
          if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) : ?>
              <?php $catName = $term->name;  ?>
              <li><a href="<?php echo get_category_link($term->term_taxonomy_id) ?>"><?php echo $i >= count($terms) ? $catName . '' : $catName . ' ,'; ?></a></li>
          <?php $i++;
            endforeach;
          }
          ?>
        </ul>
      </div>
      <div class="single-page-post__featured">
        <?php
        if (wp_get_attachment_image(get_post_thumbnail_id())) {
          imageShowPost(get_post_thumbnail_id(), 'full');
        } else {
        ?>
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/thumbnail-default.jpg'; ?>" />
        <?php
        }
        ?>
      </div>
      <div class="single-page-post__content default-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>