let sliderImages2 = document.querySelectorAll(".slides2"),
	arrowLeft2 = document.querySelector("#arrow-left2"),
	arrowRight2 = document.querySelector("#arrow-right2"),
	current2 = 0;

//Clears all images
function reset2() {
	for(let i = 0; i < sliderImages2.length; i++){
		sliderImages2[i].style.display = 'none';
	}
}

function startSlide2() {
	reset2();
	sliderImages2[0].style.display = 'block';
	}

// Show Prev

function slideLeft2() {
	reset2();
	sliderImages2[current2 - 1].style.display = 'block';
	current2--;
}

// Show Next
function slideRight2() {
	reset2();
	sliderImages2[current2 +1].style.display = 'block';
	current2++;

// Left Arrow Click
arrowLeft2.addEventListener('click', function() {
	if(current2 === 0) {
		current2 = sliderImages2.length;
	}
	slideLeft2();
});

// Right Arrow Click
arrowRight2.addEventListener('click', function() {
	if(current2 === sliderImages2.length - 1) {
		current2 = -1;
	}
	slideRight2();
});


//init
startSlide2();

