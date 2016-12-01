<?php
	//require("lang.php");
?>
<head>
<meta charset="UTF-8">
<meta description>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="agile_carousel.css" type='text/css'>
<div class="slideshow" id="flavor_2"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.js"></script>
<script src="agile_carousel/agile_carousel.a1.js"></script>
<script src="Agile-Carousel-master/agile_carousel.alpha.js"></script>

[{
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_bike.jpg' alt='Bike'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_paint.jpg' alt='Paint'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_tunnel.jpg' alt='Tunnel'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_bike.jpg' alt='Bike'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_paint.jpg' alt='Paint'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}]
<script>
    $.getJSON("agile_carousel/agile_carousel_data.php", function(data) {
        $(document).ready(function(){
            $("#flavor_2").agile_carousel({
                carousel_data: data,
                carousel_outer_height: 330,
                carousel_height: 230,
                slide_height: 230,
                carousel_outer_width: 480,
                slide_width: 480,
                transition_type: "fade",
                transition_time: 600,
                timer: 3000,
                continuous_scrolling: true,
                control_set_1: "numbered_buttons,previous_button,
                ... (continues on same line) ... pause_button,next_button",
                control_set_2: "content_buttons",
                change_on_hover: "content_buttons"
            });
        });
    });
</script>