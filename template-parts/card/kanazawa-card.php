

<?php $date = get_the_date('M j'); ?>

<div class="card kanazawa-card">
  <div class="card__content">
    <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>   
    <span class="date">Published <?php echo $date; ?></span>
  </div>
</div>