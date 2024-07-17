// scripts.js
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

const cards = document.querySelector('.slide_card');
const card = document.querySelectorAll('.card');

const cardWidth = card[0].offsetWidth;
let num_temp = parseInt(getComputedStyle(cards).getPropertyValue('gap'));
let currentIndex = 0;

let width_tot = (cardWidth + num_temp) * card.length ;

console.log(width_tot);
console.log(card.length);
// card[0].style.transform = `translateX(-${cardWidth * 2}px)`;

function translate_cards(index){
    // console.log(`index: ${index}`);
    let i = 0;
    while (i < card.length){
        console.log(card[i]);
        card[i++].style.transform = `translateX(-${(cardWidth + num_temp) * index}px)`;
        // cards.children[i++].style.transform = `translateX(-${(cardWidth + num_temp) * currentIndex}px)`;

    }
}
prevBtn.addEventListener('click', () => {
    if (currentIndex <= 0) {
        currentIndex = card.length - 3;
    }
    // console.log(currentIndex);
    translate_cards(--currentIndex);
});

nextBtn.addEventListener('click', () => {
    if (currentIndex == card.length - currentIndex) {
        currentIndex = -1;
    }
    // console.log(currentIndex); 
    translate_cards(++currentIndex);
});



// console.log(getComputedStyle(cards).getPropertyValue('width'));
// prevBtn.addEventListener('click', () => {
//     if (currentIndex > 0) {
//         currentIndex--;
//         updateSlider();
//     }
// });

// nextBtn.addEventListener('click', () => {
//     if (currentIndex < cards.children.length - 1) {
//         currentIndex++;
//         updateSlider();
//     }
// });

// function updateSlider() {
//     cards.style.transform = `translateX(-${(cardWidth + num_temp) * currentIndex}px)`;
//     updateButtons();
// }

// console.log(`length de las cards: ${cards.children.length}`);
// function updateButtons() {
//     prevBtn.disabled = currentIndex === 0;
// 	console.log(`estadon del boton PREV: ${prevBtn.disabled}\nindex: ${currentIndex}\n`);
//     nextBtn.disabled = currentIndex === cards.children.length - 1;
// 	console.log(`condicion: ${cards.children.length - 1 } \nestadon del boton NEXT: ${nextBtn.disabled}\nindex: ${currentIndex}`);

// }

// // Initialize button states
// updateButtons();