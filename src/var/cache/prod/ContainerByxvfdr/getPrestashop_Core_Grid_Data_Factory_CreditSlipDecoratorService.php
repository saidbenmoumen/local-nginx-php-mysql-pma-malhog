<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.credit_slip_decorator' shared service.

return $this->services['prestashop.core.grid.data.factory.credit_slip_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CreditSlipGridDataFactory(${($_ = isset($this->services['prestashop.core.grid.data.factory.credit_slip']) ? $this->services['prestashop.core.grid.data.factory.credit_slip'] : $this->load('getPrestashop_Core_Grid_Data_Factory_CreditSlipService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
