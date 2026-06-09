<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-141573679-4"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-141573679-4");
    </script>
    <base href="/" />
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?=$site->author?>" />
    <meta name="generator" content="Divisi Labs Polyphony - 3.0 Alpha" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"
    />
    <meta name="description" content="<?=$page->description?>" />
    <title><?=$page->title?></title>
    <link rel="image_src" href="/assets/resources/ZachHeader.jpg" />
    <link rel="shortcut icon" href="https://divisilabs.com/favicon.ico" />
    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://divisilabs.com/assets/css/divisilabs1.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/js/isotope.pkgd.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="/">
          <img
            src="/assets/pics/DivisiLabsHeader2.jpg"
            width="140"
            height="30"
            class="d-inline-block align-top"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-right ml-auto">
            <?php
            $host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? ''));
            if ($host === '' || preg_match('/(^|\.)divisilabs\.com$/', $host)) {
              $host = 'divisilabs.com';
            }
            $site = new \Polyphony\Website($host);
            $polynav = new \Polyphony\PolyNav();
            $polynav->topMenu_dropLeft($site->id);
            ?>
            <li>
              <a
                class="nav-link"
                href="https://divisilabs.freshdesk.com/support/home"
                >Support</a
              >
            </li>
          </ul>
        </div>
      </nav>
      <div class="card bg-dark text-black" style="padding-top: 50px">
        <img
          class="card-img"
          style="object-fit: cover"
          height="250px"
          src="<?php if ($page->coverphoto =='') { echo 'https://polyphony.app/uploads/0001/Paper-Grunge-Background-8.jpg';} else {echo 'https://polyphony.app/uploads/0001/'.$page->coverphoto;}
  ?>"
          alt="Card image"
        />
        <div class="card-img-overlay container" style="background: transparent">
          <h1 style="padding-top: 100px; font-size: 52px" class="card-title">
            <?=isset($title)?$title:$page->title;?>
          </h1>
          <h3 class="card-text">
            <i><?=$page->subtitle?></i>
          </h3>
        </div>
      </div>
    </header>
  </body>
</html>
