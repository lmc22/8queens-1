<?php
// 8queens - header v0.0.5

namespace Attogram;

if (!isset($title) || !$title || !is_string($title)) {
    $title = '8 Queens'; // $this->siteName;
}

?><!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php print $this->path; ?>/web/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php print $this->path; ?>/web/attogram.css">
<link rel="stylesheet" type="text/css" href="<?php print $this->path; ?>/web/css.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<title><?php print $title; ?></title>
<script src="<?php print $this->path; ?>/web/jquery.min.js"></script>
<script src="<?php print $this->path; ?>/web/bootstrap/js/bootstrap.min.js"></script>
</head><body><noscript><div class="alert alert-danger">Please enable Javascript</div></noscript>
<?php

$navbar = $this->templates['navbar'];

if ($this->isReadableFile($navbar, 'php')) {
    include($navbar);
} else {
    $this->log->error('Missing navbar template: ' . $navbar);
}
