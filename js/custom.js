$(document).ready(function() {
    $(".dropbtn").click(function() {
        $(".dropdown-content").toggleClass("open");
    });
    $(".navbar-toggle").click(function() {
        $(".dropdown-content.open").removeClass("open");
    });
    $(document).mouseup(function(e) {
        var container = $(".navbar-collapse");

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".dropdown-content.open").removeClass("open");
        }
    });
});