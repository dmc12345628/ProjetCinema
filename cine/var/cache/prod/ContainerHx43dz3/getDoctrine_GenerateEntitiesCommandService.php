<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.generate_entities_command' shared service.

$this->services['doctrine.generate_entities_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand();

$instance->setName('doctrine:generate:entities');

return $instance;
