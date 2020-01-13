<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// head内にカスタム用のコードを追加する
function meta_headcustomtags() {
$headcustomtag = <<<EOM

<div id="google_translate_element"></div>
​
<!-- Dropdown Display -->
<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'jp', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script> -->
​
​
<!-- Vertical Display -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
​
<!-- Horizontal Display -->
<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>-->
​
<script type="text/javascript" src="./f.txt"></script>

EOM;
echo $headcustomtag;
}
add_action( 'wp_head', 'meta_headcustomtags', 99);