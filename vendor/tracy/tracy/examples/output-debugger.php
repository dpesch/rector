<?php

declare (strict_types=1);
namespace RectorPrefix20211001;

require __DIR__ . '/../src/tracy.php';
\RectorPrefix20211001\Tracy\OutputDebugger::enable();
function head()
{
    echo '<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">';
}
\RectorPrefix20211001\head();
echo '<h1>Output Debugger demo</h1>';
