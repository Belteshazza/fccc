<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.4C9qqux' shared service.

return $this->privates['service_locator.4C9qqux'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('encoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load(__DIR__.'/getSecurity_PasswordEncoderService.php'));
}, 'visitorLog' => function (): ?\App\Model\VisitorLog {
    return ($this->privates['App\Model\VisitorLog'] ?? $this->load(__DIR__.'/getVisitorLogService.php'));
}));
