let sliderImages4 = document.querySelectorAll(".slides4"),
	arrowLeft4 = document.querySelector("#arrow-left4"),
	arrowRight4 = document.querySelector("#arrow-right4"),
	current4 = 0;

//Clears all images
function reset4() {
	for(let i = 0; i < sliderImages4.length; i++){
		sliderImages4[i].style.display = 'none';
	}
}

function startSlide4() {
	reset4();
	sliderImages4[0].style.display = 'block';
	}

// Show Prev

function slideLeft4() {
	reset4();
	sliderImages4[current4 - 1].style.display = 'block';
	current4--;
}

// Show Next
function slideRight4() {
	reset4();
	sliderImages4[current4 +1].style.display = 'block';
	current4++;
}

// Left Arrow Click
arrowLeft4.addEventListener('click', function() {
	if(current4 === 0) {
		current4 = sliderImages4.length;
	}
	slideLeft4();
});

// Right Arrow Click
arrowRight4.addEventListener('click', function() {
	if(current4 === sliderImages4.length - 1) {
		current4 = -1;
	}
	slideRight4();
});


//init
startSlide4();

