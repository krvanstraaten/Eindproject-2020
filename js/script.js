// var Array = key;
// var key = value;

//de setup
document.addEventListener('DOMContentLoaded', function () {
    let stars = document.querySelectorAll('.star');
    stars.forEach(function (star) {
        star.addEventListener('click', setRating);
    });

    let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
    let target = stars[rating - 0];
    target.dispatchEvent(new MouseEvent('click'));
});

function setRating(ev) {
    let span = ev.currentTarget;
    let stars = document.querySelectorAll('.star');
    let match = false;
    let num = 0;
    stars.forEach(function (star, index) {
        if (match) {
            star.classList.remove('rated');
        } else {
            star.classList.add('rated');
        }
        //kijken naar de span waar op gedrukt was
        if (star === span) {
            match = true;
            num = index + 1;
        }
    });
    // var value = num;

    document.querySelector('.stars').setAttribute('data-rating', num);
    document.getElementById("custId").value = num;
}



