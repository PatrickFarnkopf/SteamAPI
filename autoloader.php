<?php

function __autoload($namespace)
{
    $namespace = str_replace("Steam\\", "", $namespace);
    $path = sprintf("%s/src/%s", __DIR__, str_replace("\\", DIRECTORY_SEPARATOR, $namespace));
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
