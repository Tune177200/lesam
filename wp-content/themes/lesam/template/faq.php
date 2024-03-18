<?php

/**
 * Template Name: FAQ
 */
get_header();
?>
<main style="padding-top: 108.391px;">
    <?php $faq = get_field('faq'); ?>
    <div class="container">
        <div class="faq_page">
            <div class="title">
                <?php echo get_the_title() ?>
            </div>
            <?php if (!empty($faq['list_faq'])) { ?>
                <div class="accordion" id="accordionExample">
                    <?php foreach ($faq['list_faq'] as $keyFaq => $itemFaq) { ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $keyFaq ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left <?php echo $keyFaq != 0 ? 'collapsed' : '' ?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $keyFaq ?>" aria-expanded="<?php echo $keyFaq == 0 ? 'true' : 'false' ?>" aria-controls="collapse<?php echo $keyFaq ?>">
                                        <?php echo $itemFaq['question']; ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse<?php echo $keyFaq ?>" class="collapse <?php echo $keyFaq == 0 ? 'show' : '' ?>" aria-labelledby="heading<?php echo $keyFaq ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $itemFaq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>