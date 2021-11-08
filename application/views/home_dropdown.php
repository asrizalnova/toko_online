<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.livequery.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('#loading').ajaxStart(function(){
        $(this).fadeIn();
    }).ajaxStop(function(){
        $(this).fadeOut();
    });
 
    $('.jumlah').livequery('change', function() {
        $(this).nextAll('.jumlah').remove();
        
        $.post("<?php echo base_url(); ?>index.php/dropdown_controller", {code_parent: $(this).val(),
        }, function(response){
        });
        return false;
    });
});
 

function selesaiMuatData(code, response){

  $('#'+code).append(unescape(response));
}
</script>