<div class="menuDESK" id="nav">
    {*<a href="#">X</a>*}
    <a href="?page=blog">Blog</a>
    <a href="?page=about">Over mij</a>
    <a href="?page=agenda">Agenda</a>
    <a href="?page=search">Zoeken</a>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    $("#nav").addClass("js").before('<div class="menuDESK">&#9776;</div>');
    $(".menuDESK").click(function(){
        $("#nav").toggle();
    });
    $(window).resize(function(){
        if(window.innerWidth > 650) {
            $("#nav").removeAttr("style");
        }
    });
</script>