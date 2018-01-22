<style>
    .bodymodal{

    }
    .footermodal{

    }
    .imgwrap{

    }
    .galleryImg{

    }
</style>
//Modal 
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="imgwrap">
            <img class="img-fluid galleryImg" id="galleryImg" src="..." alt="galleryImage" >
            <a class="previous" onClick="prevImg()"><i class="<type>" ></i></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
//Script to control 
<script>
    var $current = 0;
    function showModal(src){
        $current = src;
        $('modalImg').attr("src",src);
        $('#galleryModal').modal('show');
    }
    function hideModal(){
        $('#galleryModal').modal('hide');
    }
    function nextImg(){
        if($current< <number>-1){
            showModal($current+1);
        }
        else{
            showModal(0);
        }
    }
    function prevImg(){
        if($current>0){
            showModal($current-1);
        }
        else{
            showModal(<number>);
        }
    }
</script>