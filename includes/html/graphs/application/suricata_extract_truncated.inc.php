<?php

$ds = 'truncated';
$unit_text = 'Files';
$descr = 'Truncated';
$filename = Rrd::name($device['hostname'], ['app', 'suricata_extract', $app->app_id]);

if (! Rrd::checkRrdExists($filename)) {
    d_echo('RRD "' . $filename . '" not found');
}

require 'includes/html/graphs/generic_stats.inc.php';
