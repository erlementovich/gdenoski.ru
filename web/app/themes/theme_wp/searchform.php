<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <input type="search" value="<?php echo get_search_query() ?>" name="s" id="s" required/>
    <label class="search__placeholder" for="s">Носки, колготки и чулки</label>
    <input type="submit" id="searchsubmit" value="найти" />
</form>