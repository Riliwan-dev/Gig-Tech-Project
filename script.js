const menubtn = document.getElementById('menu');
const closebtn = document.getElementById('close');
const rightsec =  document.querySelector('.right-section')

const screenwidth = window.innerWidth

menubtn.addEventListener('click', () => {
   rightsec.classList.remove('active');
})

closebtn.addEventListener('click', () => {
   rightsec.classList.add('active');
 })


const slider = document.querySelector(".slider");
const prevButton = document.querySelector(".prev-btn");
const nextButton = document.querySelector(".next-btn");
let slideIndex = 0;

 // Event listeners for previous and next buttons
 prevButton.addEventListener("click", () => {
   slideIndex = (slideIndex - 1 + slider.children.length) % slider.children.length;
   updateSlider();
 });

 nextButton.addEventListener("click", () => {
   slideIndex = (slideIndex + 1) % slider.children.length;
   updateSlider();
 });

 // Function to update the slider position
 function updateSlider() {
   const slideWidth = slider.children[0].clientWidth;
   slider.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
 }