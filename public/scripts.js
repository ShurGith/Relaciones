document.addEventListener('DOMContentLoaded', ()=>{
    const header = document.querySelector('header')

    //# En post/index -- post/show

     funcBtnDescartar = function(ele) {
        ele.parentElement.previousElementSibling.classList.toggle('hidden')
        ele.parentElement.classList.toggle('hidden')
    }

     funcBtnBorrar = (ele)=> {
        const divForms = document.querySelectorAll('.formulario')
        const btnsBorrar = document.querySelectorAll('.btnBorrar')
        for (div of divForms)
            div.classList.add('hidden')
        for (btn of btnsBorrar)
            btn.classList.remove('hidden')
        ele.nextElementSibling.classList.toggle('hidden')
        ele.classList.toggle('hidden')
    }

window.addEventListener('scroll', ()=>{
    winScrollY = window.scrollY
    if(winScrollY > 200)
        header.classList.add('sticky', 'top-0')
        else
            header.classList.remove('sticky')
})
})

