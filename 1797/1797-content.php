<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1797">
  <div class="container">
    <div class="row">
      <div class="site-heading">
      <h1 class='txtelegantshadow'>Clean Blog</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
      </div>
    </div>
  </div>
</div>


