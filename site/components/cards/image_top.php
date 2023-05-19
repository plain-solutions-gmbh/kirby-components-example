<div class="flex flex-col max-w-<?= $content->max_width() ?> m-2 border">
		<img src="<?= $content->img()->toFile()->url() ?>" class="object-cover w-full h-52">
		<div class="flex flex-col p-5 grow">
				<h3 class="mb-2 text-2xl font-bold"><?= $content->title() ?></h3>
				<div class="grow"><?= $content->lead() ?></div>
				<a href="<?= $content->link()->toPage()->url() ?>" class="block px-3 py-2 mt-5 text-center text-white bg-blue-700">Read more</a>
		</div>
</div>