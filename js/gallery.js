//TODO: leer el json para cargar las imagenes de forma dinamica 

const article_img = document.querySelector('.contain_gallery').querySelectorAll('article');
const container_elements = document.getElementById('container_elements');
let obj_aside = { 
    'title': container_elements.children[0].children[0].children[0].children[0],
    'num_img': 0,

};
let jsonData = null;

// console.log(obj_aside.title);
const file_arr = [...article_img];
// -----------------------function gallery content img---------------
function aside_modification(item){
    console.log('modificar contenido');
    obj_aside.title.innerText = item.children[1].children[0].innerText;
}

// -----------------------function validate clase, remove class visible
function validate_class(arr){
    for (const clase of arr) {
        if (clase === 'no_visible'){
            console.log(container_elements.previousElementSibling.children[0]);
            setTimeout(() => {
                container_elements.previousElementSibling.children[0].style.filter = 'blur(5px)';
            }, 500);
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
            for (const box_hide of file_arr)
                box_hide.classList.add('hide');
            aside_modification(id_item);
        }
        loadImages(id_item.id);

    });
}
// -------------------quit_windows img_gallery----------------
const btn_exit = document.querySelector('.box_quit');
if (btn_exit != null){
    btn_exit.addEventListener('click', () => {
        console.log(container_elements);
        container_elements.classList.add('no_visible');
        for (const box_hide of file_arr){
            // console.log(box_hide);
            box_hide.classList.remove('hide');
            box_hide.classList.toggle('show');
            container_elements.previousElementSibling.children[0].style.filter = 'blur(0px)';
            setTimeout(() => {
                box_hide.classList.remove('show');
            }, 500);
        }
        const selector = document.querySelector('.tot_selector');
        const img = document.querySelector('.cont_img');
        selector.innerHTML = '';
        img.innerHTML = '';
    });
}
// -------------------Generate with json img_gallery----------------


document.addEventListener("DOMContentLoaded", function() {
    fetch('./js/img_gallery.json')
        .then(response => response.json())
        .then(data => {
            jsonData = data;
        })
        .catch(error => console.error('Error loading the JSON:', error));
});

function loadImages(section) {
    if (!jsonData) {
        console.error('JSON data not loaded yet');
        return;
    }
    const sectionDiv = document.querySelector('.cont_img');
    const sectionSelect = document.querySelector('.tot_selector');

    if (sectionDiv && jsonData.hasOwnProperty(section)) {
        // Limpiar las imágenes previas en la sección (si es necesario)
        let i = 0;
        jsonData[section].forEach(image => {
            const img = document.createElement('img');
            img.src = image.url;
            img.id = image.id;
            img.alt = `${section} image ${image.id}`;
            sectionDiv.appendChild(img);

            const selector = document.createElement('div');
            const cont = document.createElement('div');
            selector.classList.add('selector_img');
            selector.id = `selector_${image.id}`;
            selector.appendChild(cont);
            if (i == 0){
                console.log(img);
                selector.classList.add('true');
                img.classList.add('true');
            }
            selector.addEventListener('click', (e) => {
                console.log(e.target.className);
                const selector = document.querySelector('.tot_selector');
                const img = document.querySelector('.cont_img');
                const all_selector = selector.children;
                const all_img = img.children;
                for (const sel of all_selector) {
                    sel.classList.remove('true');
                }
                for (const im of all_img) {
                    im.classList.remove('true');
                }
                selector.classList.add('true');
                img.classList.add('true');
            });
            sectionSelect.appendChild(selector);
            i++;
        });
    } else {
        console.error(`No data or container found for section: ${section}`);
    }
}
function select_img(){
    const sectionSelect = document.querySelector('.tot_selector');
    const sectionImg = document.querySelector('.cont_img');

    console.log(sectionSelect);
    console.log(sectionImg);
}
select_img();