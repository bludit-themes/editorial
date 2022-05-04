<!-- Ugly workaround for the search plugin -->
<?php if (empty($content)): ?>
	<div class="mt-4">
		<?php $language->p('No pages found') ?>
	</div>

<?php else: ?>

<!-- First page -->
<?php $firstPage = array_shift($content) ?>

<section id="banner">
        <div class="content">
            <header>
                <h1><?php echo $firstPage->title() ?></h1>
                <p><?php echo $firstPage->description() ?></p>
            </header>

			<p><?php echo $firstPage->contentBreak() ?></p>

			<!-- Read more button -->
			<?php if($firstPage->readMore()): ?>
			<ul class="actions">
				<li><a href="<?php echo $firstPage->permalink() ?>" class="button"><?php $language->p('More') ?></a></li>
			</ul>
			<?php endif; ?>
        </div>
	<?php if($firstPage->coverImage()){ ?>
        	<span class="image object">
                	<img src="<?php echo $firstPage->coverImage() ?>" alt="" />
        	</span>
	<?php } ?>
</section>

<?php endif ?>

<!-- Section -->
<section>
        <div class="posts">
        <?php foreach ($content as $page): ?>
            <article>
                <a href="<?php echo $page->permalink() ?>" class="image"><img src="<?php echo $page->coverImage() ?>" alt="" /></a>
                <h3><?php echo $page->title() ?></h3>

				<p><?php echo $page->contentBreak() ?></p>

				<!-- Read more button -->
				<?php if($page->readMore()): ?>
				<ul class="actions">
					<li><a href="<?php echo $page->permalink() ?>" class="button"><?php $language->p('More') ?></a></li>
				</ul>
				<?php endif; ?>
            </article>
        <?php endforeach ?>
        </div>
</section>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul class="pagination flex-wrap">

		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
		<li class="page-item mr-2">
			<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9668; <?php echo $L->get('Previous'); ?></a>
		</li>
		<?php endif; ?>

		<!-- Home button -->
		<li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
			<a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a>
		</li>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
		<li class="page-item ml-2">
			<a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
		</li>
		<?php endif; ?>

	</ul>
</nav>
<?php endif ?>
