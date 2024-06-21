//TODO: leer el json para cargar las imagenes de forma dinamica 

const article_img = document.querySelector('.contain_gallery').querySelectorAll('article');
const container_elements = document.getElementById('container_elements');
let obj_aside = { 
    'title': container_elements.children[0].children[0].children[0].children[0],
    'num_img': 0,

};

console.log(obj_aside.title);
const file_arr = [...article_img];
// -----------------------function gallery content img---------------
function aside_modification(item){
    console.log(item);
    obj_aside.title.innerText = item.children[1].children[0].innerText;
}
// -----------------------function validate clase, remove class visible
function validate_class(arr){
    for (const clase of arr) {
        if (clase === 'no_visible'){
            container_elements.classList.remove('no_visible');
            return true;
        }
    }
    return false;
}

// --------------------------events for articles alls
for (const box of file_arr) {
    box.addEventListener('click', (event) => {
        const id_item = event.target.parentElement;
        let arr_class = container_elements.className.split(' ');
        let open_gallery = validate_class(arr_class);
        if (open_gallery == true){
            aside_modification(id_item);
            console.log('ventana abierta');
        }

    });
}

// -------------------quit_windows img_gallery----------------
const btn_exit = document.querySelector('.box_quit');
if (btn_exit != null){

    btn_exit.addEventListener('click', () => {
        console.log(container_elements);
        container_elements.classList.add('no_visible');
    });
}
    
