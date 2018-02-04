let sliderImages = document.querySelectorAll(".slides"),
	arrowLeft = document.querySelector("#arrow-left"),
	arrowRight = document.querySelector("#arrow-right"),
	current = 0;

//Clears all images
function reset() {
	for(let i = 0; i < sliderImages.length; i++){
		sliderImages[i].style.display = 'none';
	}
}

function startSlide() {
	reset();
	sliderImages[0].style.display = 'block';
	}

// Show Prev

function slideLeft() {
	reset();
	sliderImages[current - 1].style.display = 'block';
	current--;
}

// Show Next
function slideRight() {
	reset();
	sliderImages[current+1].style.display = 'block';
	current++;
}

// Left Arrow Click
arrowLeft.addEventListener('click', function() {
	if(current === 0) {
		current = sliderImages.length;
	}
	slideLeft();
});

// Right Arrow Click
arrowRight.addEventListener('click', function() {
	if(current === sliderImages.length - 1) {
		current = -1;
	}
	slideRight();
});


//init
startSlide();

