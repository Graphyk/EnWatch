const modal = getElementById('modal');
const bg = getElementById('blur');
const closeBtn = getElementById('closeModal')

function close(){
    modal.classList.add('hidden');
    bg.classList.add('hidden');
}

closeBtn.addEventListener('click',()=>{close();})