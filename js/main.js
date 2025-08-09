const track = document.querySelector('.track');
const arrowBack = document.querySelector('.arrowBack')
const arrowNext = document.querySelector('.arrowNext')
let position = 0;

arrowNext.addEventListener('click', function(){
    if(position <= -700) position = 370;
    position -= 370;
    track.style.left = position + 'px';
    console.log(position)
})
arrowBack.addEventListener('click', function(){
    if(position >= 0) position = -1110;
    position += 370;
    track.style.left = position + 'px';
})
