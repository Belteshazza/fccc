<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.command.user_password_encoder' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

$this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->load(__DIR__.'/getSecurity_EncoderFactory_GenericService.php')), array(0 => 'App\\Entity\\User', 1 => 'App\\Entity\\MdaParticipant'));

$instance->setName('security:encode-password');

return $instance;
