<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Service\Blog\CategoryService' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Service/Blog/CategoryService.php';

return $this->services['AppBundle\Service\Blog\CategoryService'] = new \AppBundle\Service\Blog\CategoryService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});
