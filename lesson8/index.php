<?php

public function catalogs (string $dir, string $marker): void
{
    foreach (new DirectoryIterator($dir) as $item) {
        echo $marker . $item->getFilename() . "\n";
        if ($item->isDir()) {
            $currentDir = $item->getPath();
            $currentMarker = $marker . "-";
            $this->catalogs($currentDir, $currentMarker);
        }
    }
}

$this->catalogs("/", "-");