<link rel="stylesheet" type="text/css" href="focuspoint/focuspoint.css">
<script type="text/javascript" src="focuspoint/jquery.min.js.download"></script>
<script type="text/javascript" src="focuspoint/jquery.focuspoint.js.download"></script>
<script type="text/javascript">
	//<![CDATA[	
		(function($) {
			$(document).ready(function() {
				//Activate focus points
				$('.focuspoint').focusPoint();
			});
		}(jQuery));		
	//]]>
</script>
<style>
    // Carousel fade transition
.carousel-fade {
	.carousel-item {
		display: block;
		position: absolute;
		opacity: 0;
		transition: opacity .75s ease-in-out;

		&.active {
			opacity: 1;
		}
	}
}
.imgSlider{

}
</style>

<div data-ride="carousel" class="carousel carousel-fade" id="carousel-example-captions">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carousel-example-captions"></li>
      <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
      <li data-slide-to="2" data-target="#carousel-example-captions" class=""></li>
    </ol>
    <div role="listbox" class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-item focuspoint imgSlider" data-focus-x="-0.03" data-focus-y="-0.24" data-image-w="5678" data-image-h="4016">
          <img  src="..." alt="...">
        </div>
        <div class="carousel-caption">
          <div class="carousel-item focuspoint imgSlider" data-focus-x="-0.03" data-focus-y="-0.24" data-image-w="5678" data-image-h="4016">
            <img  src="..." alt="...">
          </div>
          <h3>First slide label</h3>
          <p>First Slide Text</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-item focuspoint imgSlider" data-focus-x="-0.03" data-focus-y="-0.24" data-image-w="5678" data-image-h="4016">
          <img  src="..." alt="...">
        </div>
        <div class="carousel-caption">
          <h3>Second slide label</h3>
          <p>Second Slide Text</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h3>Third slide label</h3>
          <p>Third Slide Text</p>
        </div>
      </div>
    </div>
    <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control">
      <span aria-hidden="true" class="icon-prev"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control">
      <span aria-hidden="true" class="icon-next"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>