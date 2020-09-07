const nextt = document.querySelector('.next1');
const prevv = document.querySelector('.prev1 ');
const slides1 = document.querySelectorAll('.slide1');

let index1 = 0;
display(index1);
function display (index1) {
	slides1.forEach((slide) => {
		slide.style.display = 'none';
	});
	slides1[index1].style.display = 'flex';
}

function nextSlide1 () {
	index1++;
	if (index1 > slides1.length - 1) {
		index1 = 0;
	}
	display(index1);
}
function prevSlide1 () {
	index1--;
	if (index1 < 0) {
		index1 = slides1.length - 1;
	}
	display(index1);
}

nextt.addEventListener('click', nextSlide1);
prevv.addEventListener('click', prevSlide1);