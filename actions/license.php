<?php
// 8queens - LICENSE page v0.0.4

namespace Attogram;

$f = __DIR__.'/../LICENSE.md';

if (!is_readable($f)) {
    $this->log->error('license.php: file not found: '.$f);
    $this->error404('LICENSE file lost in the wind');
}

$this->doMarkdown($f, 'LICENSE');
