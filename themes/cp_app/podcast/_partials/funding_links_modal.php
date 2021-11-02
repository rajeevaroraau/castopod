<div id="funding-links" class="fixed top-0 left-0 z-50 flex items-center justify-center hidden w-screen h-screen">
    <div
    class="absolute w-full h-full bg-pine-800/75"
    role="button"
    data-toggle="funding-links"
    data-toggle-class="hidden"
    aria-label="<?= lang('Common.close') ?>"></div>
    <div class="z-10 w-full max-w-xl bg-white rounded-lg shadow-2xl">
        <div class="flex justify-between px-4 py-2 border-b">
            <h3 class="self-center text-lg"><?= lang('Podcast.funding_links', [
                'podcastTitle' => $podcast->title,
            ]) ?></h3>
            <button
            data-toggle="funding-links"
            data-toggle-class="hidden"
            aria-label="<?= lang('Common.close') ?>"
            class="self-start p-1 text-2xl"><?= icon('close') ?></button>
        </div>
        <div class="flex flex-col items-start p-4 space-y-4">
            <?php foreach ($podcast->fundingPlatforms as $fundingPlatform): ?>
                <?php if ($fundingPlatform->is_visible): ?>
                    <a
                    href="<?= $fundingPlatform->link_url ?>"
                    title="<?= $fundingPlatform->link_content ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center font-semibold text-pine-900">
                    <?= icon(
                $fundingPlatform->type .
                            '/' .
                            $fundingPlatform->slug,
                'mr-2',
            ) . $fundingPlatform->link_url ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>