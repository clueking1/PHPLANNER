//User Clicks User icon to display login/signup modal
$('.fa-user').click(function () {
    $('.modalContainer').css("display", "flex")
    $('.modalContainerS').css("display", "none")
})

//User clicks window close in modal view to close login/
//signup modal
$('.log').click(function () {
    $('.modalContainer').css("display", "none")
})

//User clicks window close on sign up goes back to the log 
//in modal
$('.sign').click(function () {
    $('.modalContainerS').css("display", "none")
    $('.modalContainer').css("display", "flex")
})

//User clicks sign up and is displayed the sign up modal
$('.signButLog').click(function () {
    $('.modalContainerS').css("display", "flex")
    $('.modalContainer').css("display", "none")
})

//User clicks login button on sign up modal and is brought
//back into the login modal
$('.logButSig').click(function () {
    $('.modalContainerS').css("display", "none")
    $('.modalContainer').css("display", "flex")
})