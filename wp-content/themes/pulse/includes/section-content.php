
<div class="container-fluid">

<div class="row">
    <div class="col-md-12">
    <?php if ( have_posts() ) : while( have_posts() ): the_post();?>

<h3><?php the_title() ?></h3>

<?php the_content();?>

<?php endwhile; else:endif;?>
    </div>
</div>

</div>





