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
<div class="wb-block-instagram-social col-sm-3 col-md-2 col-xs-12 links wrapper hidden-sm-down">
		<h4 class="hidden-sm-down c-info">{l s='Insta Feed' mod='wbinstagram'}<hr></h4>
		<div class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#footer_insta">
			<h4 class="title_block">{l s='Insta Feed' mod='wbinstagram'}</h4>
		</div>
		<div id="footer_insta" class="fthr collapse">
		{if $imagesIns.data && count($imagesIns.data)>0}

		<!-- <a id="next_instagram" class="button-arrow next" href="#"><i class="material-icons">skip_next</i></a>
		<a id="prev_instagram" class="button-arrow prev" href="#"><i class="material-icons">skip_previous</i></a> -->
		<div class="cycleElementsContainer">
			<div class="list_carousel responsive">
					<ul id="owl-insta" class="products">
					{foreach from=$imagesIns.data item=imagesIn name=imagesIn}
						{if $smarty.foreach.imagesIn.iteration <= $nb}
						<li class="item">
							 <a target="_blank" href="{$imagesIn.link|escape:'html':'UTF-8'}">
								<img src="{$imagesIn.images.standard_resolution.url|escape:'html':'UTF-8'}" class="img-responsive center-block" />
							</a>
						</li>
						{/if}
					{/foreach}
					</ul>
			</div>
		</div>
		{/if}
	</div>
</div>
{if $imagesIns.data && count($imagesIns.data)>0}
<script type="text/javascript">

</script>
{/if}