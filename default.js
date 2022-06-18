function createElement(elem, appendedElem, beforeExistingElement, afterExistingElement){ 
   //This is my favorite function I think <3 <3 elem is the elemnts to create, appendedElem is the parent of the elements.
    'use strict';
    let i = 0;
    for(i; i < elem.length;i++){
      let appended = elem[i].name;
      elem[i].name = document.createElement(elem[i].element);
      Object.getOwnPropertyNames(elem[i].attributes).forEach(function(property,index){ // Add the attributes to the elements
        /*The data attribute*/
        if(property.toLowerCase().indexOf('data') > -1){
          elem[i].name.setAttribute(`data-${property.toLowerCase().slice(4,property.length)}`,elem[i].attributes[property])
        }else{
          elem[i].name.setAttribute(property,elem[i].attributes[property]);
        }
      })
      elem[i].name.setAttribute('data-name',appended);
      if(elem[i].value != undefined){ //Add values to 
      	let textContent = document.createTextNode(elem[i].value);
      	elem[i].name.appendChild(textContent);
      }
      if(elem[i].children != undefined){
        let j = 0;
        for(j;j<elem[i].children.length;j++){
          let rightIndex = 0;
          elem.every(findIndexChild);
          function findIndexChild(eachElem, eachElemIndex){
            if(eachElem.name.getAttribute('data-name') == elem[i].children[j]){
              rightIndex = eachElemIndex;
              return false;
            }else{
              return true;
            }
          }
          elem[i].name.appendChild(elem[rightIndex].name);
        }
      }
    }
    if(elem[elem.length - 1].bigParent){
      if(beforeExistingElement){
        try{
        document.querySelector('.' + appendedElem).insertBefore(elem[elem.length-1].name, beforeExistingElement.nextSibling); // this code is basically saying the element that has the commenet elemnts will be added to the "appendedElem" as the first child.
        }catch(e){
        console.log('Cannot create the element because: ' + e)
        }
      }else{
        try{
        document.querySelector('.' + appendedElem).insertBefore(elem[elem.length-1].name, beforeExistingElement) // this code is basically saying the element that has the commenet elemnts will be added to the "appendedElem" as the first child.
        }catch(e){
        console.log('Cannot create the element because: ' + e)
        }
      }
   }
}
var pizzaTypes = {
       pizzaPeparoni:{id:'5fa',price:{small:3.99,medium:4.99,large:7.99},title:'Pepparoni Pizza',imgSrc:'homePageAssets/secondImgGal.webp',status:'Best Seller', galAva:{state:true,desc:'The quick, brown for jumpx over DJs flock by wh',img:'homePageAssets/firstImageGallery.jpg'}},
       pizzaCh:{id:'4fa',price:{small:3.99,medium:4.99,large:7.99},title:'pizzaCh',imgSrc:'homePageAssets/thirdGalImg.webp', status:'New'},
       chicagoPizza:{id:'6fa',price:{small:4.35,medium:6.30,large:9.99},title:'Chicago Pizza',imgSrc:'Pizza.webp',status:'Best Seller'},
       greekPizza:{id:'8fa',price:{small:7.35,medium:10.30,large:14.99},title:'Greek Pizza',imgSrc:'Pizza.webp',status:'New', galAva:{state:true,desc:'The quick, brown for jumpx over DJs flock by wh',img:'homePageAssets/secondImgGal.webp'}},
       stLouisPizza:{id:'1fa',price:{small:9.35,medium:12.30,large:16.99},title:'St. Louis Pizza',imgSrc:'Pizza.webp',status:'New', galAva:{state:true,desc:'The quick, brown for jumpx over DJs flock by wh',img:'homePageAssets/thirdGalImg.webp'}}
    }

var activeCustomerBuying = [],
    spanAfter = document.querySelector('.products span');
var assignedId = 0;
    totalSpends = document.querySelector('.priceNumber .numb');
var sizePizzaClickedElement = ""; 

function selectPizzaSize(sizeBtns, event, allChildren){

	for(let buttonIndex in sizeBtns.children){
		sizeBtns.children[buttonIndex].className = "";
	}
	event.target.classList.add('clickedBtn');
	sizePizzaClickedElement = event.target;
  if(allChildren){
    var arrayToCheckErrorExistance = Array.prototype.slice.call(allChildren.children);//this will change the children array to js array
    arrayToCheckErrorExistance.forEach(function(item, index){
    if(item.id.indexOf('error') > -1){
      item.remove();
    }
   })
  }
}
function addProduct(CATNumPizza, errorParent, elementAfterError, event){
        //checkIf the id of clicked is foun,d and if the name of the product has that code.
       let classNames = CATNumPizza.className.slice(' ');
       for(let key in pizzaTypes){
       	if(classNames.indexOf(pizzaTypes[key].id) > -1){ // if the pizza is in the database
       		if(CATNumPizza.querySelector('.sizes .clickedBtn')){ //if the size is selected
       			let sizePizza = CATNumPizza.querySelector('.sizes .clickedBtn').getAttribute('data-size'),
       			    calculatePizzaPrice = parseFloat((pizzaTypes[key].price[sizePizza] * parseInt(CATNumPizza.querySelector('.output').value)).toFixed(2)),
       			    clonedCATNumPizza = CATNumPizza.cloneNode(true),
       			    assignedIds = [];
       			    // RANDOM ID BEGINNING
       			    do{
       			    	assignedId = Math.floor(Math.random() * 10000);
       			    }while(
       			    	assignedIds.forEach(function(idItem,idIndex){
       			    		return assignedId == idItem;
       			    	})
       			    	)
       			    // RANDOM ID ENDING
       			    assignedIds.push(assignedId);
                    let elements = [
                     {name:'deleteProductBtn',attributes:{class:'deleteBtnProduct ' + pizzaTypes[key].id, onclick:"deleteProduct(event)", id:assignedId},element:'button',value:'delete'},
                     {name:'productPrice',attributes:{class:'price'},element:'p',value: calculatePizzaPrice + '$'},
                     {name:'imgProduct',attributes:{width:135,height:135,src:pizzaTypes[key].imgSrc},element:'img'},
                     {name:'pizzaTitle',attributes:{class:'pizzaType'},element:'h2',value:pizzaTypes[key].title},
                     {name:'priceQuantity',attributes:{class:'priceQuantity'}, element:'div', children:['productPrice','deleteProductBtn']},
                     {name:'imgSection',attributes:{class:'imgSection'},element:'div',children:['imgProduct','priceQuantity']},
                     {name: 'element', attributes:{class:'element'}, element: 'div', children: ['pizzaTitle','imgSection'], bigParent: true}
                   ];
                   createElement(elements,'products',spanAfter);
                   document.querySelector('.priceQuantity').insertBefore(clonedCATNumPizza, document.querySelector('.deleteBtnProduct'));
                   	totalSpends.textContent = parseFloat((parseFloat(totalSpends.textContent) + calculatePizzaPrice).toFixed(2));
                    let sizeBtnsInsideBacket = document.querySelectorAll('.priceQuantity .CATNumPizza .sizes button'),
                        sizesNames = ['S','M','L'];

                    for(let j = 0; j < sizesNames.length;j++){
                      sizeBtnsInsideBacket[j].textContent = sizesNames[j];
                    }
                   	//The success notif
                   	/*if(document.querySelector('.notif').className.indexOf('successAddedToBacket') > -1){
                   		document.querySelector('.notif').classList.remove('successAddedToBacket');
                   	}
                   	document.querySelector('.notif').classList.add('successAddedToBacket');*/

                activeCustomerBuying.push({
                	pizzaId:pizzaTypes[key].id,
                	uniqueProductId:assignedId,
                	pizzaName:pizzaTypes[key].title,
                	pizzaSize:sizePizza,
                	pizzaNumber:document.querySelector('.output').value,
                	pizzaPrice:calculatePizzaPrice,
                  pizzaImgSrc:pizzaTypes[key].imgSrc
                })
                localStorage.setItem('activeCustomerBuyingPage',JSON.stringify(activeCustomerBuying));
                document.querySelectorAll('.backet .numberOfPizzas button').forEach(function(btnItem,btnIndex){
                	btnItem.setAttribute('onclick','addRemovePizzaInBacket(event, this.parentElement.parentElement.querySelector(".sizes .clickedBtn"))')
                })
                document.querySelectorAll('.backet .sizes button').forEach(function(btnSizeItem,btnSizeIndex){
                	btnSizeItem.setAttribute('onclick','changePrice(event, event.target.parentElement.parentElement.nextElementSibling.id)')
                })
       		   }else{
       	 	      //This script is for popping an error if no size is specified
       	 	      var errorId = 'error';
       	 	         if(elementAfterError.previousElementSibling.id != errorId){
       	 	         	var errorText = document.createTextNode('please select a size'),
       	 	            errorElement = document.createElement('p');
       	 	            errorElement.id = errorId;
       	 	            errorElement.appendChild(errorText);
       	 	            errorParent.insertBefore(errorElement,elementAfterError); // add the error parameter and specifiy the argument when calling the function
       	 	         }
       	          }
       	   }
       }
}
function deleteProduct(event){
        let id = event.target.id,
            itemIndex = 0;
        let dataFromProductToDelete = activeCustomerBuying.filter(function(productMatchedAssignedIDS, idIndex){itemIndex = idIndex; return productMatchedAssignedIDS.uniqueProductId == id});
        totalSpends.textContent = (totalSpends.textContent - dataFromProductToDelete[0].pizzaPrice).toFixed(2);
        event.target.parentElement.parentElement.parentElement.remove();
        activeCustomerBuying.splice(itemIndex,1);
        localStorage.setItem('activeCustomerBuyingPage',JSON.stringify(activeCustomerBuying));
}
function addRemovePizzaInBacket(event, currentSelectedSize){
	if(event.target.parentElement.children[0].value < 2){
    event.preventDefault();
    
  }else{
    if(event.target.textContent == "-"){
    event.target.parentElement.children[0].value--;
     }
  }
  if(event.target.textContent == '+'){
    event.target.parentElement.children[0].value++;
  }
	let selectedSize = currentSelectedSize.getAttribute('data-size'),
	    id = event.target.parentElement.parentElement.nextElementSibling.id,
      dataFromProductToIncrease = activeCustomerBuying.filter(function(productMatchedAssignedIDS, idIndex){
		return productMatchedAssignedIDS.uniqueProductId == id
	})
	let newPrice = 0;
	for(let unkownPizzaTitle in pizzaTypes){
		if(dataFromProductToIncrease[0].pizzaId == pizzaTypes[unkownPizzaTitle].id){
			newPrice = event.target.parentElement.children[0].value * pizzaTypes[unkownPizzaTitle].price[selectedSize];
		}
	}
	totalSpends.textContent -= dataFromProductToIncrease[0].pizzaPrice;
	dataFromProductToIncrease[0].pizzaPrice  = newPrice;
	event.target.parentElement.parentElement.parentElement.querySelector('.price').textContent = parseFloat(newPrice).toFixed(2) + "$";
	dataFromProductToIncrease[0].pizzaNumber = event.target.parentElement.querySelector('.output').value;
	totalSpends.textContent = (parseFloat(totalSpends.textContent) + dataFromProductToIncrease[0].pizzaPrice).toFixed(2);
  localStorage.setItem('activeCustomerBuyingPage',JSON.stringify(activeCustomerBuying));
}

function changePrice(event,uniqueAssignedId){
	selectPizzaSize(event.target.parentElement, event); // to add the clickedBtn class.
	let newPrice = 0,
	    id = event.target.parentElement.parentElement.classList[1],
	    dataFromProductToChangeSize = activeCustomerBuying.filter(function(productMatchedAssignedIDS, idIndex){
             return uniqueAssignedId == productMatchedAssignedIDS.uniqueProductId;
			});
	let numberOfPizza = parseInt(dataFromProductToChangeSize[0].pizzaNumber);
	for(let unkownPizzaTitle in pizzaTypes){
          if(pizzaTypes[unkownPizzaTitle].id == id){
          	newPrice = pizzaTypes[unkownPizzaTitle].price[event.target.getAttribute('data-size')] * numberOfPizza;
           }
		}
  //The following code is repeated in the addRemovePizzaInBacket function so you can past this into a function and just include it in these two functions.
	totalSpends.textContent -= dataFromProductToChangeSize[0].pizzaPrice;
	dataFromProductToChangeSize[0].pizzaPrice = newPrice;
	event.target.parentElement.parentElement.parentElement.querySelector('.price').textContent = newPrice + '$';
  totalSpends.textContent = (parseFloat(totalSpends.textContent) + dataFromProductToChangeSize[0].pizzaPrice).toFixed(2)
  localStorage.setItem('activeCustomerBuyingPage',JSON.stringify(activeCustomerBuying));
}

let ads = ['Three FREE paparaoni pizzas for every check out','#FridayPizza','Discount of 50% per two pizzas bought on Friday'],
    i = 0,
    leftValue = 0;
    elemText = document.querySelector('.adsContent');
const scrollTextAnimation = setInterval(function(){
        let leftValueString = window.getComputedStyle(elemText).getPropertyValue('left');
        leftValue = leftValueString.replace('px', "");
        if(leftValue < -0.57 * window.innerWidth ){
              i++;
              elemText.innerHTML = ads[i];
        }
        if(i == ads.length){
          i = 0;
          elemText.innerHTML = ads[0];
        }
     },300);
    
 function min(value){
  if(value < 1){
    value = 1;
  }
 }
/*Array.prototype.slice.call(document.querySelectorAll('.output')).forEach(function(singleOutput){
  console.log(singleOutput)
  singleOutput.addEventListener('change',() => {
    console.log('changing')
    if(this.value < 1){
      this.value = 1;
    }
  })
})*/

/* what i basically wrote here: so i want to store the activeCustomerBuying array to pass it between pages
so I wanted to check if it exists or not in localStorage so it does not get overwritten. If it does not exist
then create a new array and put it in localStorage(and when its modified modify its value in the localStorage).
If it does exist, then start creating the element of the backet. I got the array from the localStorage and i
will use the data inside to create the backet elements. Now, I need to think on the CATNumPizza div. I thought
of creating it from scratch in the script.
*/
if(!localStorage.activeCustomerBuyingPage){
  localStorage.setItem('activeCustomerBuyingPage',JSON.stringify(activeCustomerBuying));
}else{
  activeCustomerBuying = JSON.parse(localStorage.getItem('activeCustomerBuyingPage'));
  let totalPrice = 0;
  activeCustomerBuying.forEach(function(objProduct,objProductIndex){
    let elements = [
      {name:'deleteProductBtn',attributes:{class:`deleteBtnProduct ${objProduct.pizzaId}`, onclick:"deleteProduct(event)", id:objProduct.uniqueProductId},element:'button',value:'delete'},
      {name:'productPrice',attributes:{class:'price'},element:'p',value: `${objProduct.pizzaPrice}$`},
      {name:'imgProduct',attributes:{width:135,height:135,src:objProduct.pizzaImgSrc},element:'img'},
      {name:'pizzaTitle',attributes:{class:'pizzaType'},element:'h2',value:objProduct.pizzaName},
      {name:'outputPizzaNumber',attributes:{class:'output', value:objProduct.pizzaNumber, type:"text",min:'0',readonly:''},element:'input'},
      {name:'plusBtn',attributes:{onclick:'addRemovePizzaInBacket(event, this.parentElement.parentElement.querySelector(".sizes .clickedBtn"))'},element:'button', value:'+'},
      {name:'minusBtn',attributes:{onclick:'addRemovePizzaInBacket(event, this.parentElement.parentElement.querySelector(".sizes .clickedBtn"))'},element:'button', value:'-'},
      {name:'smallSizeBtn',attributes:{onclick:'changePrice(event, this.parentElement.parentElement.nextElementSibling.id)',dataSize:'small'},element:'button', value:'S'},
      {name:'mediumSizeBtn',attributes:{onclick:'changePrice(event, this.parentElement.parentElement.nextElementSibling.id)',dataSize:'medium'},element:'button', value:'M'},
      {name:'largeSizeBtn',attributes:{onclick:'changePrice(event, this.parentElement.parentElement.nextElementSibling.id)',dataSize:'large'},element:'button', value:'L'},
      {name:'numberOfPizzasDiv',attributes:{class:'numberOfPizzas'},element:'div',children:['outputPizzaNumber','plusBtn','minusBtn']},
      {name:'sizesDiv',attributes:{class:'sizes'},element:'div',children:['smallSizeBtn','mediumSizeBtn','largeSizeBtn']},
      {name:'CATNumPizza',attributes:{class:`CATNumPizza ${objProduct.pizzaId}`},element:'div',children:['numberOfPizzasDiv','sizesDiv']},
      {name:'priceQuantity',attributes:{class:'priceQuantity'}, element:'div', children:['productPrice','CATNumPizza','deleteProductBtn']},
      {name:'imgSection',attributes:{class:'imgSection'},element:'div',children:['imgProduct','priceQuantity']},
      {name: 'element', attributes:{class:'element'}, element: 'div', children: ['pizzaTitle','imgSection'], bigParent: true}
    ]
    createElement(elements,'products',spanAfter);
    document.querySelector(`.CATNumPizza .sizes [data-size="${objProduct.pizzaSize}"]`).classList.add('clickedBtn');
    totalPrice += objProduct.pizzaPrice;
  })
  try{document.querySelector('.priceNumber .numb').textContent = totalPrice}catch(e){}
  
}