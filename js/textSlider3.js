let sliderImages3 = document.querySelectorAll(".slides3"),
	arrowLeft3 = document.querySelector("#arrow-left3"),
	arrowRight3 = document.querySelector("#arrow-right3"),
	current3 = 0;

//Clears all images
function reset3() {
	for(let i = 0; i < sliderImages3.length; i++){
		sliderImages3[i].style.display = 'none';
	}
}

function startSlide3() {
	reset3();
	sliderImages3[0].style.display = 'block';
	}

// Show Prev

function slideLeft3() {
	reset3();
	sliderImages3[current3 - 1].style.display = 'block';
	current3--;
}

// Show Next
function slideRight3() {
	reset3();
	sliderImages3[current3 +1].style.display = 'block';
	current3++;
}

// Left Arrow Click
arrowLeft3.addEventListener('click', function() {
	if(current3 === 0) {
		current3 = sliderImages3.length;
	}
	slideLeft3();
});

// Right Arrow Click
arrowRight3.addEventListener('click', function() {
	if(current3 === sliderImages3.length - 1) {
		current3 = -1;
	}
	slideRight3();
});


//init
startSlide3();

