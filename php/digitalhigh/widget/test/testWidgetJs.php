<?php

require_once(dirname(__FILE__) . "/../src/widget.php");

use digitalhigh\widget\widget;
echo '<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>';
echo "<pre class='prettyprint'>";
echo widget::getMarkup('JS');
echo "</pre>";