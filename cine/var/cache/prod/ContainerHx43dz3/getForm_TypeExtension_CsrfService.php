<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.csrf' shared service.

return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->load(__DIR__.'/getSecurity_Csrf_TokenManagerService.php')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->load(__DIR__.'/getTranslatorService.php')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->load(__DIR__.'/getForm_ServerParamsService.php')) && false ?: '_'});
