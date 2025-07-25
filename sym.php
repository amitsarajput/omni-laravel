<?php
// $target = '/home/identity2000/Parked-Domains/radartyres.com/staging/laravel-core/storage/app/public';
// $shortcut = 'storage';
// symlink($target, $shortcut);

// $target = '/opt/1panel/apps/openresty/openresty/www/sites/staging.radartyres.com/index/laravel-core/storage/app/public';
// $shortcut = 'storage';
// symlink($target, $shortcut);

$target = '/laravel-core/storage/app/public';
$shortcut = 'storage';
symlink($target, $shortcut);
?>