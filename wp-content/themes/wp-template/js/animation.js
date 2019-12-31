localStorage.setItem('count', '0');
localStorage.setItem('count_2', '0');
localStorage.setItem('count_3', '0');
let slider = function(value, element, count_name) {
    let parent = element.parentNode;
    let child = parent.children;
    let minus_arrow = child.length - 2;
    if (value == 'left') {
        let count = parseInt(localStorage.getItem(count_name)) + 1;
        localStorage.setItem(count_name, count);
        console.log(count);
        let margin_shift = 287 * count;
        if (count == 0) {
            child[0].style.display = 'none';
        }
        if (count != -6) {
            child[11].style.display = 'block';
        }
        $(child[1]).animate({
            marginLeft: margin_shift
        }, 500);
    }
    else if (value == 'right') {
        let count = parseInt(localStorage.getItem(count_name)) - 1;
        let margin_shift = 287 * count;
        localStorage.setItem(count_name, count);
        console.log(count);
        if (count != 0) {
            child[0].style.display = 'block';
        }
        if (count == -6) {
            child[11].style.display = 'none';
        }
        $(child[1]).animate({
           marginLeft: margin_shift
        }, 500);
    }
}
let closer = function() {
    $('.modal-shadow').slideToggle(400);
    $('.modal-window').slideToggle(400);
   /* let modal_shadow = document.getElementsByClassName('modal-shadow');
    modal_shadow[0].style.display = 'none';
    
    let modal_window = document.getElementsByClassName('modal-window');
    modal_window[0].style.display = 'none';
    console.log(modal_window[0]); */
}