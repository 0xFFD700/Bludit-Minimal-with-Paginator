<?php if ($WHERE_AM_I == 'home') : ?>

<?php endif; ?>
<div class="container-fluid mt-2">
	<div class="row">
		<div class="col-sm-14 pt-2 pb-2">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<?php foreach ($content as $page) : ?>
					<div class="col-xl-4 col-sm-6 col-12">
						<a class="text-dark" href="<?php echo $page->permalink(); ?>" style="text-decoration: none">
							<div class="card m-3 h-100">
								<img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="">
								<div class="card-body text-center text-uppercase border-top">
									<small>&nbsp;<?php echo $page->date(); ?> &nbsp; &nbsp;<?php echo $page->category(); ?>&nbsp; </small>
									<h5 class="card-title"><?php echo $page->title(); ?></h5>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<!-- numberOfPages kann in den Einstellungen oder direkt hier im Code geändert werden -->
    <?php if (Paginator::numberOfPages()>1): ?>
    <div class="container pb-3 text-center">
    <div class="btn-group rounded-pill" role="group" aria-label="Basic example">
      <?php if (Paginator::showPrev()): ?>
      <a class="btn text-secondary" href="<?php echo Paginator::previousPageUrl() ?>" role="button"><i class="fas fa-arrow-left"></i></a>
      <?php endif ?>
      <?php if (Paginator::showNext()): ?>
      <a class="btn text-secondary" href="<?php echo Paginator::nextPageUrl() ?>" role="button"><i class="fas fa-arrow-right"></i></a>
      <?php endif ?>
    </div>
    </div>
    <?php endif ?>
</div>