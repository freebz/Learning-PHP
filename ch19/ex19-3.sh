# 예제 19-3 PHP REPL 실행

% php -a
Interactive shell

php > print strlen("mushrooms");
9
php > $releases = simplexml_load_file("https://secure.php.net/releases/feed.php");
php > print $releases->entry[0]->title;
PHP 7.0.5 released!
php >
