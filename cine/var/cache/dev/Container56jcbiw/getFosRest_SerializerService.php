<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.serializer' shared service.

return $this->services['fos_rest.serializer'] = new \FOS\RestBundle\Serializer\SymfonySerializerAdapter(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->load(__DIR__.'/getSerializerService.php')) && false ?: '_'});
