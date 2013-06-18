var flag =0;


$(document).ready(function(){
    if (flag===0) {
    $('#wish_list').click(function(){
        $('#wish_list').attr("disabled","disabled");
   var productid = $('#productid').val();
   var customerid = $('#customerid').val();
      flag=1;
    $.ajax({ 
        type: 'POST',
            url: 'wishlist.php',
            data: 'productid=' + productid + '&customerid=' + customerid,
            success: function(data) {
     alert(data);
    
                          }
        }); // end ajax
if(flag===1)
    {
        $('#wish_list').hide();
       $('#wish_list1').html('added to <a href="user_home.php">wish list</a>'); 
    }
        return false;  
});
}
});