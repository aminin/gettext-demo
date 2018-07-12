<?php
// I18N support information here
$language = 'ru';

putenv('LANG=ru_RU.utf-8');
setlocale(LC_ALL, 'ru_RU.utf-8');

// Set the text domain as 'messages'
$domain = 'messages';
$localedir = dirname(__FILE__) . '/locale';
echo $localedir . ': ';
bindtextdomain($domain, $localedir);
textdomain($domain);

echo gettext('hello-world') . '<br/>';

