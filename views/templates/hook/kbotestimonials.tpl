<!-- Block kbotestimonials -->
<div id="kbotestimonials_block_left" class="block">
  <h4>{l s='kbotestimonials!' mod='kbotestimonials'}</h4>
  <div class="block_content">
    <p>
      {if !isset($kbotestimonials_name) || !$kbotestimonials_name}
        {capture name='kbotestimonials_tempvar'}{l s='World' mod='kbotestimonials'}{/capture}
        {assign var='kbotestimonials_name' value=$smarty.capture.kbotestimonials_tempvar}
      {/if}
      {l s='Hello %1$s!' sprintf=$kbotestimonials_name mod='kbotestimonials'}
    </p>
    <ul>
      <li><a href="{$kbotestimonials_link}"  title="{l s='Click this link' mod='kbotestimonials'}">{l s='Click me!' mod='kbotestimonials'}</a></li>
    </ul>
</div>
<!-- /Block kbotestimonials -->
