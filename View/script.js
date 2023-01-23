var search = document.getElementById('search');
var products = document.querySelectorAll('.prod');
var btn = document.getElementById('done');
btn.addEventListener('click',e=>{
    console.log(1)
    for(var i in products){
        if(search.value == products[i].classList[0]){
            products[i].classList.remove('hidden');
        }else if(search.value != products[i].classList[0] && search.value !=''){
            products[i].classList.add('hidden');
        }else products[i].classList.remove('hidden');
    }
})