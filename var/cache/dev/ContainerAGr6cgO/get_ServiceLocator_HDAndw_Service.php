<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HDAndw.' shared service.

return $this->privates['.service_locator.HDAndw.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'visitorLog' => ['privates', 'App\\Model\\VisitorLog', 'getVisitorLogService.php', true],
], [
    'visitorLog' => 'App\\Model\\VisitorLog',
]);
