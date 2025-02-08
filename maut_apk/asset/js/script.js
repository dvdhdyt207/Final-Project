$('.sidebar-toggle').click(function() {
    $('.sidebar').toggleClass('collapsed')

})

$('.sidebar-overlay').click(function() {
    $('.sidebar').addClass('collapsed')

    $('.sidebar-dropdown-menu').slideUp('fast')
    $('.sidebar-menu-item.has-dropdown, .sidebar-dropdown-menu-item.has-dropdown').removeClass('focused')
})

$('#lihatpw').click(function() {
    var pwinput = document.getElementById("pw");
    if (pwinput.type === "password") {
        pwinput.type = "text";
    } else{
        pwinput.type = "password";
    }
});

document.getElementById("cetak").addEventListener("click", function() {
    window.open("cetak.php", "_blank");
});

