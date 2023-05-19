<div class="relative max-w-<?= $content->max_width() ?> m-2 border min-h-[30em]">
	<img src="<?= $content->img()->toFile()->url() ?>" class="object-cover h-full">
	<div class="absolute bg-white-300 bg-white/[.6] bottom-0 inset-y p-5">
		<h3 class="mb-2 text-2xl font-bold"><?= $content->title() ?></h3>
		<div class="grow"><?= $content->lead() ?></div>
		<a href="<?= $content->link()->toPage()->url() ?>" class="block px-3 py-2 mt-5 text-center text-white bg-blue-700 w-52">Read more</a>
	</div>
</div>