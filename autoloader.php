<?php

function __autoload($namespace)
{
    $path = str_replace("\\", DIRECTORY_SEPERATOR, $namespace);
    $possibleFilename = sprintf("%s.php", $path);

    if (file_exists($possibleFilename))
    {
        require_once $possibleFilename;
        return;
    }

    if (is_dir($path))
    {
        $dir = new DirectoryIterator(dirname($path));
        foreach ($dir as $file)
        {
            if (!$file->isDot())
            {
                require_once $file->getFilename();
            }
        }
    }
}
