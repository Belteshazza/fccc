<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';

return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('qy5NTgduZd', NULL, '58a7LCM6AJi2YZ82QIsS+h', ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
