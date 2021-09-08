{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
{if isset($formAtts.lib_has_error) && $formAtts.lib_has_error}
    {if isset($formAtts.lib_error) && $formAtts.lib_error}
        <div class="alert alert-warning leo-lib-error">{$formAtts.lib_error}</div>
    {/if}
{else}
<div id="slideshow-{$formAtts.form_id|escape:'html':'UTF-8'}" class="ApSlideShow">
	{if isset($content_slider)}
		{$content_slider nofilter}{* HTML form , no escape necessary *}
	{/if}
</div>
{/if}