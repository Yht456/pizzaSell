let score = 0,
    insideGal = document.querySelector('.insideGal'),
    insideGalImages = insideGal.children,
    priceGal = document.querySelector('.gallPrice'),
    insideGalImgContent = document.querySelector('.buyingContent'),
    circlesGallContainer = document.querySelector('.circlesGallContainer'),
    descGal = document.querySelector('.gallDesc');
    //The following function is for auto creating imgGalleries from the database.
window.onload = function(){
	Object.keys(pizzaTypes).forEach(function(singlePizza){
		Object.keys(pizzaTypes[singlePizza]).forEach(function(singlePizzaProperties, singlePizzaPropertiesIndex){
			if(singlePizzaProperties == 'galAva'){
				score++;
					let elements = [
                  {name:`img${singlePizzaPropertiesIndex}`,attributes:{class:`img${score} imgGal`, dataId:pizzaTypes[singlePizza].id, dataPrice:`${pizzaTypes[singlePizza].price['medium']}$`,dataDesc:pizzaTypes[singlePizza].galAva.desc}, element:'div', bigParent:true},
	            ];
	            createElement(elements,'insideGal');
	            let i = document.createElement('i');
			    i.className = 'far fa-circle';
			    circlesGallContainer.appendChild(i);
			};
		})
	});
	score = 0;
	insideGal.querySelector('.img1').classList.add('currentImg');
	circlesGallContainer.children[0].className = 'fas fa-circle';
}
let slideCurrentIndex = 0;
function slideCurrentIndexPrevious(n){
	turnSlides(n)
}
function slideCurrentIndexNext(n){
	turnSlides(n);
}
function turnSlides(ind){
	'use strict';
	insideGalImages[slideCurrentIndex].classList.remove('currentImg');
	circlesGallContainer.children[slideCurrentIndex].setAttribute('class','far fa-circle');
	slideCurrentIndex += ind;
	if(slideCurrentIndex < 0){
		slideCurrentIndex = insideGalImages.length - 1;
	} else if(slideCurrentIndex > insideGalImages.length - 1){
		slideCurrentIndex = 0;
	}
	insideGalImages[slideCurrentIndex].classList.add('currentImg');
	circlesGallContainer.children[slideCurrentIndex].setAttribute('class','fas fa-circle');
	insideGalImgContent.querySelector('.gallPrice').textContent = insideGalImages[slideCurrentIndex].getAttribute('data-price');
	insideGalImgContent.querySelector('.gallDesc').textContent = insideGalImages[slideCurrentIndex].getAttribute('data-desc');
}



function sendData(imgSelected){
	'use strict';
	let selectedId = imgSelected.getAttribute('data-id'),
	    form = document.createElement('form'),
	    input = document.createElement('input');
	form.style.visibility = 'hidden';
	form.appendChild(input);
	form.method = 'POST';
	form.action = 'pizzaTypes.php';
	input.setAttribute('hidden','true');
	input.name = 'imgId';
	input.value = selectedId;
	document.body.appendChild(form)
	form.submit();}
document.querySelector('.buyGallBtn').addEventListener('click',function(){sendData(document.querySelector('.insideGalChildren .currentImgGal'))})