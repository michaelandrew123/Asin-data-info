$(document).ready(function(){ 
  
 
  $url = './ajax/ajax-home.php'; 
  $('#asin_').keyup(function(e){
    e.preventDefault(); 
    $.post( $url, { name: $(this).val() })
    .done(function( data ) {
      $('#alert-message').html(data);
    }); 
  });  


  $('#clear_').on('click', function(){ 
    $('#form_')[0].reset();
    //$('#asin_').val(''); 
  });
});