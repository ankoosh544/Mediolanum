jQuery(document).ready(function($) {
    // Code using $ as usual goes here.
    $("body").on('click', '.burgerMenu', function() {
        $(".menulist").toggle();

    });

});






function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";

    $(".menulist").toggle();
}



$(document).click((event) => {
    if (!$(event.target).closest('#menuRight').length) {
        // the click occured outside '#element'
    }
});