<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pizza Types</title>
	<script src="https://kit.fontawesome.com/6dfcd7f70b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="default.css">
	<style type="text/css">
		.mainSelectedPizza{
			display: flex;
            margin: 0 10%;
            margin-top: 7vw;
		}
		.imgSelectedPizza img{
			width: 45vw;
			transform: rotate(-15deg);
			position: relative;
			margin-top: 3vw;
		}
		.mainImg{
			height: 20vw;
		}
		div.thumbnails{
			margin-top: 3vw;
		}
		.thumbnails .thumbSpace{
			display: inline-block;
            background: white;
            box-shadow: 0 0 7px #ccc;
            width: 120px;
            height: 99px;
            border-radius: 10px;
            position: relative;
            margin-right: 2vw;
            cursor: pointer;
		}
		.thumbnails .thumbSpace img{
			position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 100px;
            margin-top: 0;
		}
		.price{
			font-size: 2vw;
		}
		.CATFavBuy{
			margin-bottom: 1vw;
		}
		.CATNumPizza .sizes{
			margin-bottom: 2vw;
			display:flex;
		}
		.CATNumPizza button, .CATFavBuy button{
			transition: .2s;
               font-size: 1.1vw;
               border-radius: 5px;
               font-weight: 500;
               padding: 0.4vw 0.8vw;
               border: 1px solid #ddd;
               background: white;
			/*transition: .2s;
			border: none;
			box-shadow: 0px 0px 5px #ccc;
            font-size: 1.1vw;
            background: white;
            border-radius: 5px;
            margin-right: 0.5vw;
            font-weight: 300;
            padding: 0.7vw 1.5vw;*/

		}
		.CATNumPizza  button:hover{
			background: #ddd;
		}
		.CATFavBuy button{
            padding: 0.7vw 0.9vw; 
            margin-right: 0.5vw;
            margin-right: 20px;
		}
		.CATFavBuy button:hover{
		  background: #ddd;
		}
		.numberOfPizzas{
			margin-bottom: 1vw;
		}
		.numberOfPizzas .output{
		  font-size: 1vw;
            padding: 0.4vw 0.8vw;
            border: 1px solid #ddd;
            margin: 0;
            max-width: 1vw;
            text-align: center;
            margin-right: 5px;
		}
		.numberOfPizzas button{
            background: white;
            border-radius: 5px;
            margin-right: 0.5vw;
            font-weight: 500;
            font-size: 1vw;
            border: 1px solid #ddd;
            /*width: 3vw;*/
		}
		.checkOutBtn{
			background: #0d1114;
            border: none;
            box-shadow: 0 0 3px #bbb;
            text-transform: capitalize;
            padding: 12px 30px;
            border-radius: 4px;
            font-size: 1.2vw;
            color: white;
            transition: .2s;
		}
		.checkOutBtn:hover{
			color: var(--blackTheme);
            background-color: white;
		}
		.aboutPizzaContainer p{
			color: var(--brownishThemeHover);
		}
		.noteSpace{
			color: var(--yellowTheme);
            text-transform: uppercase;
            font-weight: bold;
		}
		.noteSpace i{
			color: var(--yellowTheme);
			font-size: 1vw;
		}
		h1.transition{
			text-transform: uppercase;
            margin-top: 8vw;
            background: var(--yellowTheme);
            color: white;
            text-align: center;
            padding: 2vw;
            font-size: 3vw;
            font-weight: 600;
		}
		#error{
			text-align: inherit;
		}
		.morePizzaGallery{
            display: flex;
            margin-top: 4vw;
            margin-bottom: 1.5vw;
            padding-top: 1vw;
            margin-right: 10%;
            margin-left: 10%;
            justify-content: space-evenly;
            flex-wrap: wrap;
		}
		.gal{
		  display: flex;
            background: white;
            box-shadow: 0px 0px 5px #ccc;
            padding: 1vw;
/*            padding-left: 4vw;*/
            margin-top: 3vw;
            border-radius: 0.5vw;
            flex-direction: column;
            align-items: center;
            min-width: 22vw;
            margin-right: 1vw;
		}
		.gal img{
			width: 250px;
			margin-bottom: 1vw;
		}
		.gal .gallText{
			display: inline-flex;
		}
		.smallInfoPizza .statusContainer{
			position: relative;
		}
		.statusContainer i{
			position: absolute;
			top: 45%;
			transform: translateY(-50%);
			font-size: 1vw;
			left: -1.5vw;
			color: var(--brownishThemeHover);
		}
		.statusContainer .statusText{
			color: var(--brownishThemeHover);
		}
		.smallInfoPizza .price{
			font-size: 1.5vw;
		}
		.gallText .CATButtons{
			display: flex;
            flex-direction: column;
            align-items: end;
            justify-content: center;
            margin-left: 2vw;
		}
		.gallText .sizes{
			margin-bottom: 1vw;
		}
		.gallText .CATFavBuy button{
			margin-right: 0;
		}
		.gallText .CATFavBuy button:first-child{
			margin-right: 0.5vw;
		}
		.gallText .sizes button:last-child{
			margin-right: 0;
		}
		.morePizzaGallery .CATNumPizza {
			display: flex;
            flex-direction: column;
            align-items: end;
		}
		.morePizzaGallery .numberOfPizzas{
			margin-bottom: 1vw;
		}
		.morePizzaGallery .numberOfPizzas .output{
			text-align: center;
			width: 1vw;
			padding: 0.5vw;
			font-size: 1vw;
			margin-right: 0;
		}
		.morePizzaGallery .CATNumPizza button{
			font-size: 1vw;
			margin-right: 0;
			margin-left: 0.5vw;
			padding: 0.5vw;
		}
		.showMoreBtn{
			text-align: center;
            border: none;
            text-transform: capitalize;
            font-size: 1.5vw;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            background: var(--blackTheme);
            color: white;
            padding: 1vw 4vw;
            transition: .2s;
            box-shadow: 0px 0px 5px #ccc;
		}
		.showMoreBtn:hover{
			background: white;
			color: var(--blackTheme);
		}
		@media screen and (max-width: 700px){
			section.mainSelectedPizza{
				flex-direction: column;
				margin-left: 5%;
				margin-right: 5%;
			}
			.imgSelectedPizza{
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			.imgSelectedPizza img{
				width: 85vw;
				height: auto;
			}
			div.thumbnails{
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				align-items: center;
			}
			.thumbnails .thumbSpace{
				margin-right: 4vw;
				margin-left: 4vw;
				margin-bottom: 8vw;
			}
			.mainSelectedPizza .rightSide{
				margin-top: 5vw;
				align-self: center;
			}
			.rightSide .noteSpace{
				font-weight: 400;
				font-size: 3vw;
			}
			
			.noteSpace i{
				font-size: 2.5vw;
			}
			.CATNumPizza .sizes{
				margin-bottom: 1vw;
			}
			.CATNumPizza .sizes button{
				margin-right: 0.5vw;
                font-weight: 300;
                font-size: 3vw;
                padding: 2vw 5vw;
			}
			.numberOfPizzas .output{
				font-size: 3vw;
				padding: 2vw 5vw;
			}
			.numberOfPizzas button{
				font-size: 3vw;
                padding: 2vw 5vw;
                font-weight: 300;
			}
			.price{
				font-size: 6vw;
			}
			.CATFavBuy{
				margin-bottom: 5vw;
			}
			.CATFavBuy button{
				margin-right: 10px;
                font-size: 3vw;
                padding: 3vw;
			}
			.checkOutBtn{
				padding: 12px 30px;
				font-size: 3.2vw;
			}
			h1.transition{
				font-size: 7vw;
				padding: 5vw;
			}}
			.rightSide .CATNumPizza button{
				box-shadow: 0px 0px 5px #ccc;
				border: none;
				padding: 0.7vw 1.5vw;
				font-weight: 300;
				border-radius: 5px;
                    margin-right: 0.5vw;
			}
			.rightSide .numberOfPizzas .output{
				padding: 0.7vw 0.8vw;
				border: none;
				box-shadow: 0px 0px 5px #ccc;
			}
			.commentSection{
				margin-top: 5vw;
				margin-left: 10%;
				margin-right: 10%;
			}
			.commentSection form{
				display: flex;
                    flex-direction: column;
                    width: 100%;
                    margin-bottom: 3vw;
			}
			.commentSection form select{
				width: 10vw;
                    text-transform: capitalize;
                    border: none;
                    background: #c69140;
                    color: white;
                    padding: 0.4vw;
                    border-radius: .2vw;
                    cursor: pointer;
			}
			.commentSection form .inputLabel{
				display: flex;
				justify-content: space-between;
				align-items: center;
			}
			.inputLabel .inputTitle{
				text-transform: capitalize;
			}
			.commentSection form textarea{
				border-radius: 0.5vw;
				border: 1px solid #939393;
			}
			.commentSection form input[type="submit"]{
				width: 7vw;
                    border: none;
                    background-color: var(--blackTheme);
                    color: white;
                    cursor: pointer;
                    align-self: end;
                    margin-top: 1vw;
                    padding: 0.5vw;
                    border-radius: 0.2vw;
                    box-shadow: 0px 0px 5px #ccc;
                    transition: .2s;
			}
			.commentSection form input[type="submit"]:hover{
				background-color: white;
				color: var(--blackTheme);
			}
			.commentContent .name{
				margin: 0;
			}
			.commentContent .date{
				margin-top: 0;
				font-size:0.9vw;
			}
			.avatar{
				width: 50px;
                    height: 50px;
                    border-radius: 100%;
                    margin-right: 1vw;
                    object-fit: cover;
			}
			.stars{
				display: flex;
			}
			@media screen and (max-width: 700px){
				.CATNumPizza .sizes{
					margin-bottom: 3vw;
				}
				.rightSide .CATNumPizza button{
					padding: 2vw 5vw;
				}
				.rightSide .numberOfPizzas .output{
					max-width: 6vw;
                         padding: 2vw;
				}
				.gal{
					padding: 9vw;
				}
				.gal img{
					width: 50vw;
				}
				.statusContainer i{
					top: 51%;
					left: -3.5vw;
					font-size: 2.1vw;
				}
				.CATFavBuy{
					margin-top: 2vw;
				}
				.CATFavBuy button{
					padding: 2vw;
				}
				.morePizzaGallery .numberOfPizzas .output{
					width: 6vw;
					padding: 2vw;
					font-size: 3vw;
				}
				.morePizzaGallery .CATNumPizza button{
					padding: 2vw;
					font-size: 3vw;
				}
				.CATNumPizza .sizes button{
					padding: 2vw;
				}
				.commentSection form{
					flex-wrap: wrap;
				}
				.commentSection form input[type="submit"]{
					width: 18vw;
					padding: 1.5vw;
					border-radius: 0.5vw;
				}
				.commentSection form select{
					width: 20vw;
				}
				.commentContent .date{
					font-size: 2.7vw;
				}
			}
	</style>
	
</head>
<body>
<?php include("nav.php") ?>
<?php if(isset($_POST['imgId'])){?>
<section class="mainSelectedPizza">
	<div class="leftSide imgSelectedPizza">
		<img src="homePageAssets/pizzaSecond.png" class="mainImg" alt="A view of the pizza." data-width="">
		<div class="thumbnails">
			<div class="thumbSpace">
			    <img src="homePageAssets/pepperoni-pizza-png-transparent-image.png" style="width:120px;" data-width="120">
		    </div>
		    <div class="thumbSpace">
			    <img src="homePageAssets/whole-pepperoni.png" data-width="">
			</div>
			<div class="thumbSpace">
			    <img src="homePageAssets/PMC-2.png" style="width:130px;" data-width="130">
			</div>
			<div class="thumbSpace">
			    <img src="homePageAssets/png_pizza_15268.png" style="width:125px;" data-width="125">
			</div>
		</div>
	</div>
	<div class="rightSide infoSelectedPizza">
		<h1 class="pizzaTitle"></h1>
		<p class="noteSpace"></p>
		<div class="CATNumPizza">
	        <div class="sizes">
		        <button data-size="small" onclick='changePricePizzaWhenSize(event, this.parentElement,this.parentElement.parentElement.nextElementSibling.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement)'>Small</button>

	            <button data-size="medium" onclick='changePricePizzaWhenSize(event, this.parentElement,this.parentElement.parentElement.nextElementSibling.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement)'>Medium</button>

	            <button data-size="large" onclick='changePricePizzaWhenSize(event, this.parentElement,this.parentElement.parentElement.nextElementSibling.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement)'>Large</button>
	        </div>
	        <div class="numberOfPizzas">
	        	<input type="text" class="output" value="1" min="0" readonly onchange='min(this.value)'>
	            <button onclick="changePricePizzaWhenNumber(event, this.parentElement.parentElement.querySelector('.sizes'), this.parentElement.parentElement.nextElementSibling.querySelector('.priceNumb'))">+</button>
	            <button onclick="changePricePizzaWhenNumber(event, this.parentElement.parentElement.querySelector('.sizes'), this.parentElement.parentElement.nextElementSibling.querySelector('.priceNumb'))">-</button>
	    </div>
		</div>
		<p class="price" data-name="productPrice">Price: 5.69$</p>
		<div class="CATFavBuy">
		    <button><i class="fas fa-heart"></i></button>
		    <button onclick="addProduct(this.parentElement.previousElementSibling.previousElementSibling, this.parentElement.parentElement,this.parentElement.parentElement.querySelector('.checkOutBtn'))"><i class="fas fa-cart-shopping"></i></button>
		</div>
		<button class="checkOutBtn">check out</button>
		<p><a href="#">Find a store</a></p>
		<div class="aboutPizzaContainer">
			<p>About This Pizza</p>
		</div>
	</div>
</section>
<h1 class="transition">you might also like</h1>
<section class="morePizzaGallery">
	<!-- php loop lenna mel database -->
	<span></span>
	<!-- SPACE FOR THE GAL -->
</section>
<section class="commentSection">
	<form id="commentForm">
		<div class="inputLabel">
			<p class="inputTitle">type a comment</p>
			<div class="stars">
				<i class="far fa-star" data-id="1"></i>
                    <i class="far fa-star" data-id="2"></i>
                    <i class="far fa-star" data-id="3"></i>
                    <i class="far fa-star" data-id="4"></i>
                    <i class="far fa-star" data-id="5"></i>
                    <i class="far fa-star" data-id="6"></i>
			</div>
		</div>
		<textarea required placeholder="Write something here..."></textarea>
		<input type="submit" name="postBtn" value="Post">
		<select name="arrangeBtn" form='commentForm'>
		     <option value="newest">newest</option>
		     <option value="topComments">top comments</option>
	     </select>
	</form>
	<div class="loadedComments">
		<div class="comment">
			<img src="homePageAssets/avatarOne.webp" class="avatar">
			<div class="commentContent">
				<p class="name">John Doe</p>
				<p class="date">29-04-2022</p>
				<p class="text">I really loved the pizza. It had a really special flavor</p>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="default.js"></script>
<script type="text/javascript">
	let selectedPizza = {};
	Object.keys(pizzaTypes).forEach(function(key,keyIndex){
		if(pizzaTypes[key].id == '<?php echo $_POST['imgId']; ?>'){
			selectedPizza = key;
		}
	})
	document.querySelector('.mainSelectedPizza .price').innerHTML = `Price: <span class="priceNumb">_____</span>`;
	document.querySelector('.pizzaTitle').innerHTML = pizzaTypes[selectedPizza].title;
	if(pizzaTypes[selectedPizza].status != ''){
		document.querySelector('.noteSpace').innerHTML = `<i class="fas fa-circle"></i> ${pizzaTypes[selectedPizza].status}`
	}
	document.querySelector('.infoSelectedPizza .CATNumPizza').classList.add(pizzaTypes[selectedPizza].id);

 function changePriceCalc(allSizes, priceSpace, currentPizza=selectedPizza){
	let arrr = Array.prototype.slice.call(allSizes.children) //allSizes.children;
	arrr.forEach(function(sizeItem,sizeIndex){
		if(sizeItem.className.indexOf('clickedBtn') > -1){
			selectedSize = sizeItem.getAttribute('data-size');
		}
	})
	priceSpace.innerHTML = (parseInt(allSizes.parentElement.querySelector('.output').value) * pizzaTypes[currentPizza].price[selectedSize]).toFixed(2) + '$';
	//priceSpace
 }

 function changePricePizzaWhenSize(event, allSizes, priceSpace, allChildren, currentPizza=selectedPizza){

	selectPizzaSize(allSizes, event, allChildren);
	changePriceCalc(allSizes, priceSpace, currentPizza);
 }

 function changePricePizzaWhenNumber(event, allSizes, priceSpace){
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
	

	try{
	    console.log('hello')
	   changePriceCalc(allSizes, priceSpace)
	}catch(e){
		console.log("You need to specifiy the size to get the number");
	}
 }

 let thumbnails = Array.prototype.slice.call(document.querySelector('.thumbnails').children);
 document.querySelector('.thumbnails').onmouseover = function(){
	thumbnails.forEach(function(thumbImg){
	thumbImg.querySelector('img').onmouseover = function(){
		let bigImg = document.querySelector('.imgSelectedPizza .mainImg'),
		    bigImgSrc = bigImg.src,
	        bigImgWidth = bigImg.getAttribute('data-width'),
		    hoveredImgSrcWidth = this.getAttribute('data-width'),
		    hoveredImgSrc = this.src;
		bigImg.src = hoveredImgSrc;
		bigImg.setAttribute('data-width',hoveredImgSrcWidth);
		this.setAttribute('data-width',bigImgWidth);
		if(bigImgWidth != ''){
			this.style.width = bigImgWidth + 'px';
		}else{
			this.style.width = '100px';
		}
		this.src = bigImgSrc;
		
	}
  })
 }

 /*Gallery Creation*/
 window.onload = function(){
 	Object.keys(pizzaTypes).forEach(function(singlePizza){
 	let elements = [
 	 {name:'elementAfterError',attributes:{class:'elementAfterError'},element:'span'},
 	 {name:'loveIcon',attributes:{class:'fas fa-heart'},element:'i'},
 	 {name:'backetIcon',attributes:{class:'fas fa-cart-shopping'},element:'i'},
 	 {name:'imgGal',attributes:{src:pizzaTypes[singlePizza].imgSrc,alt:''}, element:'img'},
 	 {name:'title',attributes:{class:'title'},element:'p',value:pizzaTypes[singlePizza].title},
 	 {name:'circleI',attributes:{class:'fas fa-circle'},element:'i'},
 	 {name:'statusTextSpan',attributes:{class:'statusText'},element:'span',value:pizzaTypes[singlePizza].status},
 	 {name:'outputPizzaNumber',attributes:{class:'output', value:'1', type:"text",min:'0',readonly:''},element:'input'},
      {name:'plusBtn',attributes:{onclick:'changePricePizzaWhenNumber(event, this.parentElement.parentElement.querySelector(".sizes"), this.parentElement.parentElement.parentElement.parentElement.querySelector(".priceNumb"))'},element:'button', value:'+'},
      {name:'minusBtn',attributes:{onclick:'changePricePizzaWhenNumber(event, this.parentElement.parentElement.querySelector(".sizes"), this.parentElement.parentElement.parentElement.parentElement.querySelector(".priceNumb"))'},element:'button', value:'-'},
      {name:'smallSizeBtn',attributes:{onclick:`changePricePizzaWhenSize(event, this.parentElement, this.parentElement.parentElement.parentElement.parentElement.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement.parentElement.parentElement, "${singlePizza}")`,dataSize:'small'},element:'button', value:'S'},
      {name:'mediumSizeBtn',attributes:{onclick:`changePricePizzaWhenSize(event, this.parentElement, this.parentElement.parentElement.parentElement.parentElement.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement.parentElement.parentElement, "${singlePizza}")`,dataSize:'medium'},element:'button', value:'M'},
      {name:'largeSizeBtn',attributes:{onclick:`changePricePizzaWhenSize(event, this.parentElement, this.parentElement.parentElement.parentElement.parentElement.querySelector(".priceNumb"), this.parentElement.parentElement.parentElement.parentElement.parentElement, "${singlePizza}")`,dataSize:'large'},element:'button', value:'L'},
      {name:'circleI',attributes:{class:'fas fa-circle'},element:'i'},
      {name:'price',attributes:{class:'priceNumb'},element:'p', value:'_____$'},
      {name:'loveBtn',attributes:{class:''},element:'button',children:['loveIcon']},
      {name:'backetBtn',attributes:{onclick:'addProduct(this.parentElement.nextElementSibling, this.parentElement.parentElement.parentElement.parentElement,this.parentElement.parentElement.parentElement.parentElement.querySelector(".elementAfterError"), event)'},element:'button',children:['backetIcon']},
      {name:'numberOfPizzasDiv',attributes:{class:'numberOfPizzas'},element:'div',children:['outputPizzaNumber','plusBtn','minusBtn']},
      {name:'sizesDiv',attributes:{class:'sizes'},element:'div',children:['smallSizeBtn','mediumSizeBtn','largeSizeBtn']},
      {name:'CATNumPizza',attributes:{class:`CATNumPizza ${pizzaTypes[singlePizza].id}`}, element:'div', children:['numberOfPizzasDiv','sizesDiv']},
      {name:'CATFavBuy',attributes:{class:'CATFavBuy'},element:'div',children:['loveBtn','backetBtn']},
      {name:'statusContainerText',attributes:{class:'statusContainer'}, element:'p', children:['circleI','statusTextSpan']},
      {name:'smallInfoPizzaDiv',attributes:{class:'smallInfoPizza'}, element:'div', children:['statusContainerText','title','price']},
      {name:'CATButtonsDiv',attributes:{class:'CATButtons'}, element:'div',children:['CATFavBuy','CATNumPizza']},
      {name:'gallTextDiv',attributes:{class:'gallText'},element:'div',children:['smallInfoPizzaDiv','CATButtonsDiv']},
      {name: 'galDiv', attributes:{class:'gal', id:pizzaTypes[singlePizza].id}, element: 'div', children: ['imgGal','gallTextDiv','elementAfterError'], bigParent: true}
    ];
    createElement(elements,'morePizzaGallery',document.querySelector('.morePizzaGallery').children[0]);
    })
 };


 /*Comment Section*/
 let addCommentSection = document.querySelector('.commentSection'),
     starsParent = addCommentSection.querySelector('.stars'),
     stars = addCommentSection.querySelectorAll('.stars .fa-star'),
     length = stars.length;
 function startsHover(){
          for(let i = 0; i < length;i++){
              stars[i].addEventListener('mouseover',function(){
              let dataId = this.getAttribute('data-id');
              for(let j = 0; j < dataId; j++){
                stars[j].classList.remove('far');
                stars[j].classList.add('fas');
              }
              /*sessionStorage.setItem('blackStarsLength',dataId);*/
              for(let k = dataId;k<length;k++){
                stars[k].classList.remove('fas');
                stars[k].classList.add('far');
              }
            });
          }
 }
starsParent.addEventListener('mouseover',startsHover);
let comments = [
     {name:'John Doe',dateAdded:'29-04-2022',comment:'I really loved the pizza. It had a really special flavor',imgAvatar:''},
     {name:'John Doe',dateAdded:'29-04-2022',comment:'I really loved the pizza. It had a really special flavor',imgAvatar:''},
];

</script>	
<script type="text/javascript" src="numberScript.js"></script>
<?php }else{
   echo "<p id='error' style='margin-top:3vw;margin-left:10%'>Please go back to the home page and select the buy button for one pizza in the gallery.</p>";
} ?>
</body>
</html>