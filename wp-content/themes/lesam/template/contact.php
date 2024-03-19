<?php

/**
 * Template Name: Liên Hệ
 */
?>
<?php get_header(); ?>
<main style="padding-top: 108.391px;">

    <div class="container">
        <div class="contact-page">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                <?php $contact = get_field('contact'); ?>
                <div class="col">
                    <div class="detail_company">
                        <div class="logo">
                            <img src="<?php echo !empty($contact['logo']['url']) ? $contact['logo']['url'] : get_stylesheet_directory_uri() . '/assets/images/happynut-logo.png' ?>" alt="<?php echo $contact['company'] ?>">
                        </div>
                        <h3><?php echo $contact['company'] ?></h3>
                        <p><?php echo $contact['description'] ?></p>
                        <?php if (!empty($contact['list_contact'])) { ?>
                            <ul class="list-contact">
                                <?php foreach ($contact['list_contact'] as $itemCont) { ?>
                                    <li>
                                        <a href="<?php echo !empty($itemCont['link']['url']) ? $itemCont['link']['url'] : '#' ?>">
                                            <?php echo $itemCont['icon'] . '<span>' . $itemCont['contact'] . '</span>' ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="col">
                    <div class="contact_form">
                        <?php
                        $form = $contact['contact_form'];
                        echo do_shortcode($form);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>