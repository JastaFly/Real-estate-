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
let closer = function(elem) {
    let parent_elem = elem.parentNode.parentNode;
    console.log(parent_elem);
    $('.modal-shadow').slideToggle(400);
    $(parent_elem).slideToggle(400);
}