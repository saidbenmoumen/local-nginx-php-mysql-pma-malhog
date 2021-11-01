{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<section class="home-tabs featured-products clearfix view-product mt-3">
	    <h1 class="heading text-xs-center"><span>{l s='Viewed products' d='Modules.Viewedproduct.Shop'}<hr></span></h1>
	    <div class="row rless">
		  <div  id="owl-view" class="owl-carousel owl-theme">
		    {foreach from=$products item="product"}
		      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
		    {/foreach}
		  </div>
		</div>
</section>
