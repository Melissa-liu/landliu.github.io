<?php $sidebar_config = cpotheme_get_sidebar_position(); ?>
<?php if ( 'none' != $sidebar_config ) : ?>

<aside id="sidebar" class="sidebar sidebar-primary">
	<?php dynamic_sidebar( 'primary-widgets' ); ?>
</aside>
<div>Сайт создан на <a href="https://www.wptheme.us/" title="Огромная коллекция тем WordPress">шаблоне WordPress</a></div>
<?php endif; ?>
