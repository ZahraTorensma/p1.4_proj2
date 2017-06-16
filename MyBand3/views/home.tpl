<content class="wrapper">
<div class="homeRuimte"></div>
    <br>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="foto_about/whyvegan400.svg" style="width:100%;">
            <div class="text"><a href="?page=blog">Lees en leer hier!</a></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="foto_about/vegan400.svg" style="width:100%; margin-top: -30px">
            <div class="text"><a href="?page=agenda">Wat zijn de aankomende events?<br>Check de agenda!</a> </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="foto_about/vegansite400.svg" style="width:100%">
            <div class="text"><a href="http://www.howtogovegan.org">How To Go Vegan</a></div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>



    <div id="kc-350">

    {*<p style="text-align:center; color: #990000;"><strong>More than 150 Billion</strong>*}
    {*<br>*}
    {*<span style="font-size:12px; color=#000000;">is the number of animals killed in the world per year</span>*}
    {*<br>*}
    {*<span style="font-size: 12px; color: #000000;">by the meat, dairy, egg and fish industries</span></p>*}

    <p style="text-align:center; font-size: 25px; color: #990000; margin-bottom: -15px"><strong>Animals slaughtered</strong>
    <br>
    <span style="font-size: 18px; color: #000000;">since you have opened the website: </span></p>


        <p id="killcounter-l">
            <span id="count0">0</span>&nbsp;marine animals<br />
            <span id="count1">0</span>&nbsp;chickens<br />
            <span id="count2">0</span>&nbsp;ducks<br />
            <span id="count3">0</span>&nbsp;pigs<br />
            <span id="count4">0</span>&nbsp;rabbits<br />
            <span id="count5">0</span>&nbsp;turkeys<br />
            <span id="count6">0</span>&nbsp;geese<br />
            <span id="count7">0</span>&nbsp;sheep<br />
            <span id="count8">0</span>&nbsp;goats
        </p>
        <p id="killcounter-r">
            <span id="count9">0</span>&nbsp;cows and calves<br />
            <span id="count10">0</span>&nbsp;rodents<br />
            <span id="count11">0</span>&nbsp;pigeons and other birds<br />
            <span id="count12">0</span>&nbsp;buffaloes<br />
            <span id="count13">0</span>&nbsp;dogs<br />
            <span id="count14">0</span>&nbsp;cats<br />
            <span id="count15">0</span>&nbsp;horses<br />
            <span id="count16">0</span>&nbsp;donkeys and mules<br />
            <span id="count17">0</span>&nbsp;camels and other camelids
        </p>
        <p id="adv">These are the numbers of animals killed worldwide by the meat, egg, and dairy industries since you opened this webpage. These numbers do <b>NOT</b> include the many millions of animals killed each year in vivisection laboratories. They do <b>NOT</b> include the millions of dogs and cats killed in animal shelters every year. They do <b>NOT</b> include the animals who died while held captive in the animal-slavery enterprises of circuses, rodeos, zoos, and marine parks. They do <b>NOT</b> include the animals killed while pressed into such blood sports as bullfighting, cockfighting, dogfighting, and bear- baiting, nor do they include horses and grey- hounds who were exterminated after they were no longer deemed suitable for racing.
        </p>
        <a href="http://www.adaptt.org/about/the-kill-counter.html" title="Click here to learn much more about the numbers of animals slaughtered worldwide every day">Learn more</a>

        <script type="text/javascript">

            var counts = [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ];
            var rate = [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ];

            function StartKillCounter() {
                var millions = [ 90000, 45895, 2262, 1244, 857, 691, 533, 515, 345, 292, 65, 63, 23, 16, 4, 4, 3, 2 ];
                var perSecond = 8;
                for (var i = 0; i < counts.length; ++i)
                    rate[i] = millions[i] * 1000000 / 365 / 24 / 60 / 60 / perSecond;
                setInterval("NewCounts()", 1000 / perSecond);
            }

            function NewCounts() {
                var num, thous, str;
                for (var i = 0; i < counts.length; ++i) {
                    counts[i] += rate[i];
                    num = Math.round(counts[i]);
                    str = "";
                    while (num > 1000) {
                        thous = num % 1000;
                        if (thous < 10)
                            thous = "00" + thous;
                        else if (thous < 100)
                            thous = "0" + thous;
                        str = "," + thous + str;
                        num = Math.floor(num / 1000);
                    }
                    str = num + str;
                    document.getElementById("count" + i).innerHTML = str;
                }
            }



            StartKillCounter();
        </script>
    </div>

    <div id="veganisme">
        <h4>Veganisme</h4>
        <p>de veganist zelfst.naamw. (m.) Uitspraak:   [vexa'nɪst] Verbuigingen:   veganist|en (meerv.) de veganist|e zelfst.naamw. (v.) Uitspraak:   [vexa'nɪst|ə] Verbuigingen:   veganiste|s (meerv.) iemand die geen vlees eet maar ook geen andere dierlijke producten gebruikt.<br> 1) Iemand die geen vlees, zuivel en honing eet 2) Planteneter 3) Strenge vegetari&#235;r </p>
    </div>


</content>

<script src="js/home.js"> </script>