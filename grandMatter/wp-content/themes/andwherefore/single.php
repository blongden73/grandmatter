<?php
    if(in_category('artist_v2')){ //checks if is new artist
        get_template_part('artist-single');
    }if(in_category('events-and-workshops')){ //checks if is new artist
        get_template_part('news-single');
    }if(in_category('gallery')){ //checks if is new artist
        get_template_part('gallery-single');
    }else{ //if its not it uses the basic page template
        get_template_part('standard-page');
    }
?>
