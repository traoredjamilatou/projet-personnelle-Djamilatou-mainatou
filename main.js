let search = document.querySelector(".search-box");

document.querySelector("#search-icon").onclick = () =>{
    search.classList.toggle('active');
    cart2.classList.remove('active');
    user.classList.remove('active');
}

 let cart2 = document.querySelector('.cart2');

    document.querySelector('#cart2-icon').onclick = () =>{
    cart2.classList.toggle('active');
    search.classList.remove('active');
    user.classList.remove('active');
}

let user = document.querySelector('.user');

document.querySelector('#user-icon').onclick = () =>{
    user.classList.toggle('active');
    search.classList.remove('active');
    cart2.classList.remove('active');
 }

 let navbar = document.querySelector('.navbar');

 document.querySelector('#menu-icon').onclick = () =>{
    navbar.classList.toggle('active');
    search.classList.remove('active');
    cart2.classList.remove('active');
    user.classList.remove('active');
  }
 window.onscroll = () => {
    search.classList.remove('active');
    cart2.classList.remove('active');
    user.classList.remove('active');
    navbar.classList.remove('active');
 }

// navbar
 let header = document.querySelector('header');

 window.addEventListener('scroll', () =>{
     header.classList.toggle('shadow', window.scrollY > 0);
 });
