let images = document.querySelectorAll('.gallery-img');
let popup = document.querySelector('#popup');
let img = document.querySelector('#popup-img');
let button = document.querySelector('#popup-button');

for(let i = 0; i < images.length ; i ++) {
  images[i].addEventListener('click', function(e) {
    popup.classList.toggle("popup-open");
    let src = e.target.src;
    img.setAttribute("src", src);
  });
}
button.addEventListener('click', function() {
  popup.classList.toggle("popup-open");
})
// alert('hello');

// let imagenes = document.querySelectorAll('.gallery__img');
// let modal = document.querySelector('#modal');
// let img = document.querySelector('#modal__img');
// let boton = document.querySelector('#modal__boton');

// for(let i = 0; i < imagenes.length ; i ++) {
//   imagenes[i].addEventListener('click', function(e) {
//     modal.classList.toggle("modal--open");
//     let src = e.target.src;
//     img.setAttribute("src", src);
//   });
// }
// boton.addEventListener('click', function() {
//   modal.classList.toggle("modal--open");
// })