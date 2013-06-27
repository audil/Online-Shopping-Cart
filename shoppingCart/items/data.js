var flag = 0;
$(document).ready(function() {
    $('.deletewish').click(function() {
        var productid = $(this).parent().find('.productid').attr('value');
        var customerid = $('.customerid').val();
        var slide = $(this).parent();
        $.ajax({
            type: 'POST',
            url: 'deletewish.php',
            data: 'productid=' + productid + '&customerid=' + customerid,
            success: function(data) {
                if (data =='\nok')
                {
                    slide.slideUp(500);
                }
            }
        }); // end ajax
        return false;
    });
function load()
{
    var productid = $('#productid').val();
    var customerid = $('#customerid').val();
    $.ajax({
            type: 'POST',
            url: 'wishlist.php',
            data: 'productid=' + productid + '&customerid=' + customerid,
            success: function(data) {
           if(data=="\n")
               {
               $('#wish_list1').html('<a href="">add to wish list</a>');
                    
               }
              else
                  {
                $('#wish_list').html(data);
            }
            }
            });        
}
load();
$("#wish_list1").click(function() {
 var productid = $('#productid').val();
    var customerid = $('#customerid').val();
    $.ajax({
            type: 'POST',
            url: 'addwishlist.php',
            data: 'productid=' + productid + '&customerid=' + customerid,
            success: function(data) {
           if(data=="\nok")
               {
                    $('#wish_list1').hide();
                    $('#wish_list').html('added to <a href="user_home.php">wish list</a>');  
               }
}
    
});
return false;
});
});