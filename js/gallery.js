const article_img = document.querySelector('.contain_gallery').querySelectorAll('article');
const container_elements = document.getElementById('container_elements');

let obj_aside = { 
    'title': container_elements.children[0].children[0].children[0].children[0],
};

console.log(obj_aside.title);
const file_arr = [...article_img];

for (const box of file_arr) {
    box.addEventListener('click', (event) => {
        const id_item = event.target.parentElement;
        console.log(id_item)
    });
}

obj_aside.title.innerText = 'hola';
console.log(file_arr);
// -------------------quit_windows img_gallery----------------
const btn_exit = document.querySelector('.box_quit');
btn_exit.addEventListener('click', () => {
    console.log(container_elements);
    container_elements.classList.add('no_visible');
});