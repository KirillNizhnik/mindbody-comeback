<?php ?>
<section id="comp-kmmcplmt" class="comp-kmmcplmt xuzjBY comp-kmmcplmt-container undefined" data-testid="section-container" tabindex="-1"><div id="comp-kmxndj44" class="BaOVQ8 tz5f0K comp-kmxndj44" data-testid="richTextElement"><h2 class="font_2"><span>find <span style="font-family:wfont_d56505_e621d01c7137419fb755b32ac14d44e3,wf_e621d01c7137419fb755b32ac,orig_joyride_outline;">your</span> <span style="color:#94E522;">location</span><span style="color:#231F20;">.</span></span></h2></div><div id="comp-ko31ypy4" class="comp-ko31ypy4 aVng1S"></div></section>
<div class="mindbody-locations">
<?php if (get_field('map_unique_id', "options")): ?>
<div id='storerocket-widget' style='width:100%;' data-storerocket-env='p' data-storerocket-id='<?= get_field('map_unique_id', "options") ?>'><p style='text-align:center;font-size:13px;padding:10px;'>Load location...</p></div><script>(function(){var a=document.createElement('script');a.type='text/javascript';a.async=!0;a.src='https://cdn.storerocket.io/js/widget-mb.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);}());</script>
    <link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/store-rocket.css" type="text/css" />

<?php endif; ?>
</div>
