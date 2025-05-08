let check_amd=document.getElementById('check_amd')
let card_amd=document.getElementsByClassName('amd')

check_amd.addEventListener('change', ocultar_amd)

function ocultar_amd(){
    for(let i = 0; i < card_amd.length; i++){
        let tarjeta = card_amd[i];

        if(check_amd.checked){
            tarjeta.classList.remove('hidden');
        }else{
            tarjeta.classList.add('hidden');
        }
    }
    
}

let check_msi=document.getElementById('check_msi')
let card_msi=document.getElementsByClassName('msi')

check_msi.addEventListener('change', ocultar_msi)

function ocultar_msi(){
    for(let i = 0; i < card_msi.length; i++){
        let tarjeta = card_msi[i];

        if(check_msi.checked){
            tarjeta.classList.remove('hidden');
        }else{
            tarjeta.classList.add('hidden');
        }
    }
}

let check_intel=document.getElementById('check_intel')
let card_intel=document.getElementsByClassName('intel')

check_intel.addEventListener('change', ocultar_intel)

function ocultar_intel(){
    for(let i = 0; i < card_intel.length; i++){
        let tarjeta = card_intel[i];

        if(check_intel.checked){
            tarjeta.classList.remove('hidden');
        }else{
            tarjeta.classList.add('hidden');
        }
    }
    
}