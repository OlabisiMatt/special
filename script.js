





let menu = document.querySelector('.header .nav .menu');

document.querySelector('#menu-btn').onclick = () =>{
    menu.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('active');
}

document.querySelectorAll('.view-property .details .thumb .small-images img');
forEach(images =>{
    images.onclick = () =>{
        src = images.getAttribute('scr');
        document.querySelector('.view-property .details .thumb .big-image .small-images img');
        src = src;
    }
})

