<form action="/" method="get">
    <label for="search">search</label>
    <!-- <input type="hidden" name="cat" value=""> -->
    <input type="text" id="search" name="s" value="<?php the_search_query() ?>" required>
    <button type="submit">Search</button>
</form>