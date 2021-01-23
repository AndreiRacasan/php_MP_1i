<?php
// Magic constants
echo __DIR__;
echo __FILE__;

echo __LINE__;

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents
scandir('./');
file_put_contents('test.txt', 'content');

// file_get_contents from URL
// file_get_contents('url');

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file