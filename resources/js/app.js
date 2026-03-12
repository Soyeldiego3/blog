import './bootstrap';

const pupue = new Audio('/sounds/pupue.mp3');

document.querySelectorAll('.pupue').forEach(el => {
    el.addEventListener('click', () => {
        pupue.currentTime = 0;
        pupue.play();
    });
});

const mikudayo = new Audio('/sounds/mikudayo.mp3');

document.querySelectorAll('.mikudayo').forEach(el => {
    el.addEventListener('click', () => {
        mikudayo.currentTime = 0;
        mikudayo.play();
    });
});