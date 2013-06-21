$(document).ready(function() {
    $("#login").click(function() {
        $("#login_section").fadeIn(1000);
    });
     $("#cancel").click(function() {
        $("#login_section").fadeOut(1000);
    });
   
    //Default Starting Page Results
    $("#pagination li:first").css({'color': '#FF0084'}).css({'border': 'none'});

    Display_Load();
         $(".content").load("pagination_data.php?page=1", Hide_Load());
    //Hide Loading Image
    function Hide_Load()
    {
        $("#loading").fadeOut('slow');
    };
    

    //Display Loading Image
    function Display_Load()
    {
        $("#loading").fadeIn(900, 0);
        $("#loading").html("<img src='bigLoader.gif' />");
    }
    //Pagination Click
    $("#pagination li").click(function() {

        Display_Load();

        //CSS Styles
        $("#pagination li")
                .css({'border': 'solid #dddddd 1px'})
                .css({'color': '#0063DC'});

        $(this)
                .css({'color': '#FF0084'})
                .css({'border': 'none'});

        //Loading Data
        var pageNum = this.id;
        $(".content").load("pagination_data.php?page=" + pageNum, Hide_Load());
    });
    
    $('#log_in').click(function() {
        var name = $('#user_name').val();
        var password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: 'session_login.php',
            data: 'name=' + name + '&password=' + password,
            success: function(data) {
                alert(data);
                if (data == 'successfully LoggedIN')
                {
                    window.location.href = "user_home.php";
                }
                else
                {
                    $("#info").html(data);
                }
            }
        }); // end ajax

        return false;
    });
 $('#top').click(function() {
        var search = $('#search').val();
        var dropdown= $(".categorydropdown").val();
       if(search==""&&dropdown=="All CATEGORIES")
           {
           }
           else
               {
     $('#pagination').hide()
         $.ajax({
            type: 'POST',
            url: 'search.php',
            data: 'search=' + search +'&dropdown=' + dropdown,
            success: function(data) {               
              {
                    $(".content").html(data);
              }
            }
        }); // end ajax
               }
        return false;
                    
    });
   $("#productindividually").hover(function(){
      $("#productindividually",this).css("border", "solid 2px black");
   
    });

});  