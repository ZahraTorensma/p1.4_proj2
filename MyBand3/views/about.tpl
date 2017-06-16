<content class="wrapper">
    <img src="foto_about/helloimvegan.svg" alt="Hello Im Vegan" class="helloVegan"/>
    {*<h2 style="text-align: center">Over mij</h2>*}
    <div class="aboutPage">

        <section id="aboutLinks">
            {foreach from=$about_list item=about}
                    {*<h2 style="text-align: center">{$about.title}</h2>*}
                <p>{$about.text}</p>
            {/foreach}
        </section>

        {*<section id="aboutRechts">*}
            {*{foreach from=$about_list item=about}*}
                {*<img src=" {$about.img}">*}
            {*{/foreach}*}
        {*</section>*}

    </div>

</content>