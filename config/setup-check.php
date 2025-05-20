<?php
echo "=== PHP Environment Check ===\n";
echo "PHP Version: " . phpversion() . "\n";
echo "Zip Extension: " . (extension_loaded('zip') ? "Enabled" : "Disabled") . "\n";
echo "Composer Version: " . shell_exec('composer -V') . "\n";
echo "PHP Extensions:\n";
$required_extensions = ['zip', 'json', 'mbstring', 'openssl'];
foreach ($required_extensions as $ext) {
    echo "- $ext: " . (extension_loaded($ext) ? "✓" : "✗") . "\n";
}
echo "\n=== Directory Permissions ===\n";
$directories = [
    'api',
    'public',
    'vendor',
    'node_modules'
];
foreach ($directories as $dir) {
    echo "- $dir: " . (is_writable($dir) ? "Writable" : "Not Writable") . "\n";
}
echo "\n=== XAMPP Configuration ===\n";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n"; 