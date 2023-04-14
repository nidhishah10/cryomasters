    <footer id="footer">
        <div class="wrap">
            <div class="footer-row">
                <div class="comp-info">
                    <?php $logo = get_field('footer_logo', 'option'); ?>
                    <?php if (isset($logo) && !empty($logo)) : ?>
                        <a href="<?php bloginfo('url'); ?>" id="footer-logo" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo $logo; ?>" alt="CryoMasters">
                        </a>
                    <?php endif; ?>
                    <?php $footer_info = get_field('footer_info', 'option'); ?>
                    <?php if (isset($footer_info) && !empty($footer_info)) : ?>
                        <p><?php echo $footer_info; ?></p>
                    <?php endif; ?>
                </div>
                <div class="post-info">
                    <?php $recent_post_title = get_field('recent_post_title', 'option'); ?>
                    <?php if (isset($recent_post_title) && !empty($recent_post_title)) : ?>
                        <h6><?php echo $recent_post_title; ?></h6>
                    <?php endif; ?>
                    <ul>
                        <?php $post_info = get_field('post_info', 'option'); ?>
                        <?php foreach ($post_info as $key => $post) { ?>
                            <li><a href="<?php echo $post['post_url']; ?>"><?php echo $post['post_title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="contact-info">
                    <?php $contact_title = get_field('contact_title', 'option'); ?>
                    <?php if (isset($contact_title) && !empty($contact_title)) : ?>
                        <h6><?php echo $contact_title; ?></h6>
                    <?php endif; ?>
                    <?php $comp_title = get_field('comp_title', 'option'); ?>
                    <?php if (isset($comp_title) && !empty($comp_title)) : ?>
                        <p class="comp-title"><?php echo $comp_title; ?></p>
                    <?php endif; ?>
                    <ul>
                        <?php $address = get_field('address', 'option'); ?>
                        <?php if (isset($address) && !empty($address)) : ?>
                            <li>
                                <address><?php echo $address; ?></address>
                            </li>
                        <?php endif; ?>

                        <?php $number = get_field('number', 'option'); ?>
                        <?php if (isset($number) && !empty($number)) : ?>
                            <li>
                                <a href="tel:+491735724638" target="_blank"><?php echo $number; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php $email = get_field('email', 'option'); ?>
                        <?php if (isset($email) && !empty($email)) : ?>
                            <li>
                                <a href="mailto:info@cryomasters.de" target="_blank"><?php echo $email; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="director-info">
                        <?php $director_info_title = get_field('director_info_title', 'option'); ?>
                        <?php if (isset($director_info_title) && !empty($director_info_title)) : ?>
                            <p class="title"><?php echo $director_info_title; ?></p>
                        <?php endif; ?>

                        <?php $director_info = get_field('director_info', 'option'); ?>
                        <?php if (isset($director_info) && !empty($director_info)) : ?>
                            <p class="dir-name"><?php echo $director_info; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php $created_by_title = get_field('created_by_title', 'option'); ?>
            <?php if (isset($created_by_title) && !empty($created_by_title)) : ?>
                <?php echo $created_by_title; ?>
            <?php endif; ?>
        </div>
        <!--/.wrap -->
    </footer>
    <!--/#footer -->
    </div>
    <!--/#wrapper-->

    <?php wp_footer(); ?>
    </body>

    </html>