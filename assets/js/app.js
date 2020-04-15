/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../scss/app.scss';
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.js';



// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';
import 'bootstrap';
console.log('Hello Webpack Encore! Edit me in assets/js/app.js');


function init() {
    window.requestAnimationFrame(draw);
}

function draw() {
    var ctx = document.getElementById('canvas').getContext('2d');

    ctx.clearRect(0, 0, 50, 50);
    // effacer le canvas

    ctx.lineWidth = 2;
    ctx.save();
    ctx.translate(20, 20);

    // carreBleu
    var time = new Date();
    ctx.strokeStyle = '#008acc';
    ctx.rotate(time.getMilliseconds() / 600);
    ctx.rect(-8, -8, 16, 16);
    ctx.stroke();
    ctx.restore();

    // CarreOrange
    ctx.save();
    ctx.strokeStyle = '#ff5f14';
    ctx.translate(20, 20);
    ctx.rotate(-1 * time.getMilliseconds() / 600);
    ctx.beginPath();
    ctx.moveTo(13, 0);
    ctx.lineTo(0, 13);
    ctx.lineTo(-13, 0);
    ctx.lineTo(0, -13);
    ctx.lineTo(13, 0);
    ctx.stroke();
    ctx.restore();

    // cercle
    ctx.save();
    ctx.strokeStyle = '#c9c9c9';
    ctx.translate(20, 20);
    ctx.beginPath();
    ctx.arc(0, 0, 14, 0, Math.PI * 2, false);
    ctx.stroke();
    ctx.restore();



    window.requestAnimationFrame(draw);
}

init();

$('.collapser').each(function () {
    $(this).on('click', function () {
        $(this).children('div').children('div').children('img').toggleClass('down').toggleClass('up');
    })
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$('.toast').slideUp('fast');

$('#reglagesIcon').on('click', function () {
    $('.toast').toast('show');
    $('.toast').slideDown('fast');
});

/*
$('#reglagesIcon').rotate({
    bind: {
        mouseenter: function () {
            $(this).rotate({
                duration: 600,
                angle: 0,
                animateTo: 1000
            })
        },
        mouseleave: function () {
            $(this).rotate({
                duration: 600,
                angle: 1000,
                animateTo: 0
            })
        }
    }
});
*/

