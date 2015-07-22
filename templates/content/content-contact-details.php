<?php if( get_field('contacts') ): ?>
<ul class="contact-links-ul contact-us-list unstyled">
  <?php while( has_sub_field('contacts') ) : ?>
    <li>
      <a class="contact-us-info <?php the_sub_field('info_type_contact'); ?> icon-<?php the_sub_field('info_type_contact'); ?>" href="<?php the_sub_field('contact_link'); ?>" target="_blank"><?php the_sub_field('texte_lien_de_contact'); ?></a>
    </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
