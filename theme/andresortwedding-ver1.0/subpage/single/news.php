<main>
  <section class="sgNews">
    <div class="sgNews__container">
      <div class="sgNews__block">
        <div class="title">
          <p class="title__d ft-blu-1"><?php the_date(); ?></p>
          <h1 class="title__m"><?php the_title(); ?></h1>
        </div>
        <div class="contents">
          <?php the_content() ; ?>
        </div>
      </div>
    </div>
  </section>
</main>