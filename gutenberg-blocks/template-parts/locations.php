<?php ?>
<div class="mindbody-locations">
<?php if (get_field('map_unique_id', "options")): ?>
<div id='storerocket-widget' style='width:100%;' data-storerocket-env='p' data-storerocket-id='<?= get_field('map_unique_id', "options") ?>'><p style='text-align:center;font-size:13px;padding:10px;'>Load location...</p></div><script>(function(){var a=document.createElement('script');a.type='text/javascript';a.async=!0;a.src='https://cdn.storerocket.io/js/widget-mb.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);}());</script>
    <link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/store-rocket.css" type="text/css" />

<?php endif; ?>
</div>
