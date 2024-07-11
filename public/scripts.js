document.addEventListener('DOMContentLoaded', ()=>{
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
    console.log('Dentro')
})
