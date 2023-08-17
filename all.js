const mini = document.querySelector(".mini")
const hide = document.querySelector(".hide")
const plus = document.querySelector(".fa-plus")
const minus = document.querySelector(".fa-minus")

mini.addEventListener('click', () =>{
    // hide.style.display = 'block'
    hide.classList.toggle('hide')
    minus.classList.toggle('hidden')
    plus.classList.toggle('hidden')

})

const mini1 = document.querySelector(".mini.one")
const hide1 = document.querySelector(".meet.hide")
const plus1 = document.querySelector(".plus")
const minus1 = document.querySelector(".minus")

mini1.addEventListener('click', () =>{
    hide1.classList.toggle('hide')
    minus1.classList.toggle('hidden')
    plus1.classList.toggle('hidden')

})

const mini2 = document.querySelector(".mini.two")
const hide2 = document.querySelector(".giwa.hide")
const plus2 = document.querySelector(".pluss")
const minus2 = document.querySelector(".minuss")

mini2.addEventListener('click', () =>{
    hide2.classList.toggle('hide')
    minus2.classList.toggle('hidden')
    plus2.classList.toggle('hidden')

})