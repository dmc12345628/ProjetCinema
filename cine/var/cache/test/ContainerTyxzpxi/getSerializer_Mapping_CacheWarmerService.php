<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.mapping.cache_warmer' shared service.

return $this->services['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'/src/AppBundle/Resources/config/serialization.yml'))), ($this->targetDirs[0].'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
