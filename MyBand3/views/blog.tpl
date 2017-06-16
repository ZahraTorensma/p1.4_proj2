<content class="wrapper">
    <h2 style="text-align: center">Blog</h2>

    <section class="blog">
            {foreach from=$blog_list item=blog}
                <p>{$blog.timestamp}</p>
                <p>Bron: {$blog.author}</p>
                <h3>{$blog.title}</h3>
                <img src=" {$blog.image}">
                <content>{$blog.text}</content>
                <div class="blogRuimte"></div>
            {/foreach}
        </section>

    {*<p id="pagenumber">Pagina {$page}</p>*}
    {*<table id="pagechanger">*}
        {*<tr>*}
            {*<td id="left">*}
                {*{if $page gt 1}*}
                {*<a href="?url=blog&page={$page - 1}">Vorige</a>*}
                {*{/if}*}
            {*</td>*}
        {*</tr>*}
        {*<tr>*}
            {*<td id="right">*}
                {*{if $page lt $number_pages}*}
                {*<a href="?url=blog&page={$page + 1}">Volgende</a>*}
                {*{/if}*}
            {*</td>*}
        {*</tr>*}
    {*</table>*}
{*</content>*}