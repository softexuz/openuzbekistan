jQuery(function ($) {
    $(document).ready(function() {
        
        $(".uzb_map svg path").click(function() {
        $(".uzb_map svg path").removeClass("color"),
            $(this).addClass("color")
    }),
    $(".uzb_map svg path").click(function() {
        var e = $(this).attr("data-tab");
        $(".uzb_map svg path").removeClass("current"),
            $(".tab-content").removeClass("current"),
            $(this).addClass("current"),
            $("#" + e).addClass("current")
    })
});
});