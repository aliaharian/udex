$('.close-btn').click(function (e) {
    $('.modal-website').removeClass('show-modal');
});

var bodyTag = document.getElementsByTagName('body');
``
function clickedOrNot(e) {
    if (e.target.classList.contains('modal-website')) {
        $('.modal-website').removeClass('show-modal');
    }
}

bodyTag[0].addEventListener('click', clickedOrNot, true);


/* Modal */
function show_modal($class) {
    $('.' + $class).addClass('show-modal');
}
