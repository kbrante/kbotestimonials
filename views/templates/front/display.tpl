{l s='Welcome to this testimonials!' mod='kbotestimonials'}
<h4>list post </h4>
{foreach from=$posts item=post}
    <a href="{$post.link}">{$post.kbotestimonials_name}</a>
{/foreach}
