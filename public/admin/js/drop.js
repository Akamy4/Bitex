$(document).ready(function () {
    var url = window.location.href.split("/"),
        menu = $('.treeview-menu'),
        as = menu.find("a");

    for (let i = 0; i < menu.length; i++){
        var menu_link = menu.eq(i).find("a"),
            menu_href = menu_link.attr("href");

        for (let j = 0; j < menu_link.length; j++){
            var menu_href_1 = menu_link.eq(j).attr("href"),
                menu_href_2 = menu_href_1.split('/');
            console.log(menu_href_2[2], url[4]);

            if (menu_href_2[2] == url[4]) {
                menu.eq(i).parent().addClass('active');
                menu_href_1.parent().addClass('active')
            }
        }

    }
});
