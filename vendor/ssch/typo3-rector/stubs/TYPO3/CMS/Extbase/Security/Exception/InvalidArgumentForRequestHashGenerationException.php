<?php

namespace RectorPrefix20210601\TYPO3\CMS\Extbase\Security\Exception;

if (\class_exists('TYPO3\\CMS\\Extbase\\Security\\Exception\\InvalidArgumentForRequestHashGenerationException')) {
    return;
}
class InvalidArgumentForRequestHashGenerationException
{
}