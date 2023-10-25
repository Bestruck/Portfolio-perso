const imageToClick = document.getElementById('logoaccueilblanc');
imageToClick.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
});

const video = document.querySelector('video');

window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    const maxScroll = 1000;
    const maxOpacity = 1;
    const minOpacity = 0.2;
    let opacity = maxOpacity - (scrollPosition / maxScroll ) * (
        maxOpacity - minOpacity
    );
    opacity = Math.max(minOpacity, Math.min(maxOpacity, opacity));
    video.style.opacity = opacity;
});


const image = document.getElementById('logoaccueilblanc');

window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    const maxScroll = 1000;
    const currentScroll = Math.min(scrollPosition, maxScroll);
    const brightness = 1 - (currentScroll / maxScroll);

    image.style.filter = `brightness(${brightness})`;
});


const nav = document.getElementById('menu');
const backdropbase = document.getElementById('backdropb');

const button = document.getElementById('bouton');
button.addEventListener('click', () => {
backdropbase.classList.toggle('backdrop');
nav.classList.toggle('visible');
 
});


backdropbase.addEventListener('click', () => {
  backdropbase.classList.toggle('backdrop');
  nav.classList.toggle('visible');
});


const toggleScrollButton = document.getElementById('bouton');
const content = document.getElementById('backdropb');
let isScrollDisabled = false;

toggleScrollButton.addEventListener('click', function() {
    if (isScrollDisabled) {
        document.body.style.overflow = 'auto';
    } 
    else  {
        document.body.style.overflow = 'hidden';
    }
    isScrollDisabled = !isScrollDisabled;
});
content.addEventListener('click', function() {
    if (isScrollDisabled) {
        document.body.style.overflow = 'auto';
        isScrollDisabled = false;
    }
});