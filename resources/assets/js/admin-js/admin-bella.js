$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url;
    });

    if (element) {
        element.addClass('active').parents('#side-menu ul').addClass('in');
        element.parents('#side-menu a').addClass('active');
    }
});

if(window.location.pathname == '/admin/customers'){
    $(document).ready(function () {
        $("#searchBox").on("keyup", function() {

            var value = $(this).val().toLowerCase();

            $("table").find("tbody").find("tr").each(function(index) {

                if (index > -1) {

                    $row = $(this);

                    var first_name = $row.find("td[name='first_name']").text().toLowerCase();
                    var last_name = $row.find("td[name='last_name']").text().toLowerCase();
                    var email = $row.find("td[name='email']").text().toLowerCase();

                    if (first_name.indexOf(value) === -1 && last_name.indexOf(value) === -1 && email.indexOf(value) === -1) {
                        $row.hide();
                    }

                    else{

                        $row.show();
                    }
                }

            });
        });
    });
}
