<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1798">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h1 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h1>
          <h3 class="post-subtitle">
            Problems look mighty small from 150 miles up
          </h3>
          <p class="post-meta">Posted by Start Bootstrap on September 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
            <h1 class="post-title">
              I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
            </h1>
          <p class="post-meta">Posted by Start Bootstrap on September 18, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
            <h1 class="post-title">
              Science has not yet mastered prophecy
            </h1>
            <h3 class="post-subtitle">
              We predict too much for the next year and yet far too little for the next ten.
            </h3>
          <p class="post-meta">Posted by Start Bootstrap on August 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
            <h1 class="post-title">
              Failure is not an option
            </h1>
            <h3 class="post-subtitle">
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
          <p class="post-meta">Posted by Start Bootstrap on July 8, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts →</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>