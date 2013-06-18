$(document).ready(function() {
    $("#login").click(function() {
        $("#login_section").fadeIn(1000);
    });
     $("#cancel").click(function() {
        $("#login_section").fadeOut(1000);
    });
    $(".categories li").click(function() {
        var i = $(this).index();
        i = i / 2;
        switch (i) {
            case 0:
                $("li:eq(0)").css("background-color", "orange");
                $("li:eq(1)").css("background-color", "#FFD700");
                $("li:eq(2)").css("background-color", "#FFD700");
                $("li:eq(3)").css("background-color", "#FFD700");
                $("li:eq(4)").css("background-color", "#FFD700");
                break;
            case 1:
                $("li:eq(0)").css("background-color", "#FFD700");
                $("li:eq(1)").css("background-color", "orange");
                $("li:eq(2)").css("background-color", "#FFD700");
                $("li:eq(3)").css("background-color", "#FFD700");
                $("li:eq(4)").css("background-color", "#FFD700");
                break;
            case 2:
                $("li:eq(0)").css("background-color", "#FFD700");
                $("li:eq(1)").css("background-color", "#FFD700");
                $("li:eq(2)").css("background-color", "orange");
                $("li:eq(3)").css("background-color", "#FFD700");
                $("li:eq(4)").css("background-color", "#FFD700");
                break;
            case 3:
                $("li:eq(0)").css("background-color", "#FFD700");
                $("li:eq(1)").css("background-color", "#FFD700");
                $("li:eq(2)").css("background-color", "#FFD700");
                $("li:eq(3)").css("background-color", "orange");
                $("li:eq(4)").css("background-color", "#FFD700");
                break;
            case 4:
                $("li:eq(0)").css("background-color", "#FFD700");
                $("li:eq(1)").css("background-color", "#FFD700");
                $("li:eq(2)").css("background-color", "#FFD700");
                $("li:eq(3)").css("background-color", "#FFD700");
                $("li:eq(4)").css("background-color", "orange");
                break;
        }

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
});  