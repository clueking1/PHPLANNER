//User Clicks User icon to display login/signup modal
$('.fa-user').click(function () {
    $('.modalContainer').css("display", "flex")
})

//User clicks window close in modal view to close login/
//signup modal
$('.fa-window-close').click(function () {
    $('.modalContainer').css("display", "none")
})