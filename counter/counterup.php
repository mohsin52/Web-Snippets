<style>
    .counting{
        background-color: #00000;
        font-family: serif;
    }
    .iconWrap{
        background: something;
        border-radius:50%;

    }
    .countIcon{
        font-size: 100px;
    }
    .paraCount{
        font-size: 100px;
        font
    }
</style>
<div class="counting">
    <div class="row">
        <div class="col">
            <i class="iconWrap">
                <i class="countIcon icontype"></i>
            </i>
            <span class="counter">#1000</span>
            <p class="paraCount"></p>
        </div>
    </div>
</div>
<script src="jquery.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script src="waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>