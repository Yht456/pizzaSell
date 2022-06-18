<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="notif">
		<i class="fa-solid fa-circle-check"></i>
		<p class="">added to backet</p>
	</div>
	<?php include("nav.php") ?>
	<section class="topContainer">
		<div class="leftContent">
			        <div class="line topLine"></div>
			        <h5>total food sustainability</h5>
			        <h1 class="bigIntoTitle">satisfy your hunger</h1>
			        <p>The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick quartz.</p>
			        <button class="CATPizzaTypes">discover our cooks</button>
		</div>

		<div class="rightContent gallery">
			<div class="topTop">
				<!-- I wanted to create a gallery, put the three images next to each other and hide the other two with overflow hidden in the .topTop div
                However, with the necessary styling properties in the other images and the other elements I cannot put position relative in theTop because it will mess up my design a little.[Details: position relative in the topTop means that the psoition absolute elements will be part of that topTop positioning so those arrowing circles will be half hidden. SOLUTION: create a specific positioning relative div for the specific elements which are the photos]
				 -->
				<button class="previous" onclick="slideCurrentIndexPrevious(-1)"><</button>
				<div class="insideGal" style="position: relative;">
			    </div>
		        <button class="next" onclick="slideCurrentIndexNext(1)">></button>
			<div class="buyingContent">
				<h1 class="gallPrice">5.49$</h1>
				<div class="line"></div>
				<p class="gallDesc">The quick, brown for jumpx over DJs flock by wh</p>
				<button class="buyGallBtn" onclick="sendData(this.parentElement.parentElement.querySelector('.insideGal .currentImg'))">Buy</button>
			</div>
		</div>
		<div class="circlesGallContainer">
		</div>
		</div>

		<div class="socialMediaContainer">
			<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
			<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
		</div>
	</section>
	<section class="middle">
		<div class="pizzaTypesTitle">
			<div class="titleDesign">		
				<h1>best sellers</h1>
			</div>
			<div class="line"></div>
		</div>
		<div class="firstChef chef">
			<div class="pizzaChefAbout">
				<div class="avatar"></div>
				<h1 class="name">John Doe</h1>
				<a href="mailto:JohnDoe@foodo.com" class="chefEmail">JohnDoe@foodo.com</a>
				<p class="aboutChef">The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick</p>
				<button class="discBtnChef">Discover</button>
				<div class="sizeMoneyIngre">
					<div class="size">
						<p>Small: <span class="price">3.99$</span></p>
						<p>medium: <span class="price">4.99$</span></p>
						<p>large: <span class="price">7.99$</span></p>
					</div>
					<div class="line vertical smallLine brownishBG"></div>
					<div class="ingredients">
						<p><span class="title">Ingredients: </span> Cheese, pepperoni, olive, tuna, creme.</p>
					</div>
				</div>
				<div class="catPizza">
					<div class="CATNumPizza 5fa">
					    <div class="numberOfPizzas">
					        <input type="text" class="output" value="1" min="0" readonly>
					        <button onclick="this.parentElement.children[0].value++;">+</button>
					        <button onclick="this.parentElement.children[0].value--;">-</button>
					    </div>
					    <div class="sizes">
					        <button data-size="small" onclick='selectPizzaSize(this.parentElement, event, this.parentElement.parentElement.parentElement.parentElement)'>S</button>
	                        <button data-size="medium" onclick='selectPizzaSize(this.parentElement, event, this.parentElement.parentElement.parentElement.parentElement)'>M</button>
	                        <button data-size="large" onclick='selectPizzaSize(this.parentElement, event, this.parentElement.parentElement.parentElement.parentElement)'>L</button>
	                    </div>
					</div>
					
					<div class="CATFavBuy">
					    <button><i class="fas fa-heart"></i></button>
					    <button onclick="addProduct(this.parentElement.previousElementSibling,this.parentElement.parentElement.parentElement,this.parentElement.parentElement.parentElement.lastElementChild)"><i class="fas fa-cart-shopping"></i></button>
					</div>
			</div>
			<div class="blankBoxes">
				<div class="boxOne"></div>
				<div class="boxTwo"></div>
			</div>
			</div>
			<img src="homePageAssets/Pizza-Image-1-min.png" class="pizzaImg pizzaOne">
			<img src="homePageAssets/firstDashedLine.svg" class="dashedLine" style="position: absolute;left: 40vw;width: 30vw;top: 34vw;">
		</div>
		<div class="parentTrans">
		   <div class="transitionBg">
			    <h1 class="transitionText"><i class="fas fa-quote-left"></i>love at<br>first bite<i class="fas fa-quote-right"></i></h1>
		    </div>
	    </div>
	
	    <div class="mobileTransitionBg">
	    	<h1 class="mobileTranTitle"><i class="fas fa-quote-left"></i>love at<br>first bite<i class="fas fa-quote-right"></i></h1>
	    	<div class="middleCircle"></div>
	    </div>
	    <div class="secondChef chef">
			<div class="pizzaChefAbout pizzaChefAboutTwo">
				<div class="avatar avatarChefTwo"></div>
				<h1 class="name">John Doe</h1>
				<a href="mailto:JohnDoe@foodo.com" class="chefEmail">JohnDoe@foodo.com</a>
				<p class="aboutChef">The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick</p>
				<button class="discBtnChef">Discover</button>
				<div class="sizeMoneyIngre">
					<div class="size">
						<p>Small: <span class="price">3.99$</span></p>
						<p>medium: <span class="price">4.99$</span></p>
						<p>large: <span class="price">7.99$</span></p>
					</div>
					<div class="line vertical smallLine brownishBG"></div>
					<div class="ingredients">
						<p><span class="title">Ingredients: </span> Cheese, pepperoni, olive, tuna, creme.</p>
					</div>
				</div>
				<div class="catPizza">
					<div class="CATNumPizza 4fa">
					         <div class="numberOfPizzas">
					            <input type="text" class="output" value="1" min="0" readonly onchange="min(this.value)">
					            <button onclick="this.parentElement.children[0].value++;">+</button>
					            <button onclick="this.parentElement.children[0].value--;">-</button>
					         </div>
					         <div class="sizes">
					           <button data-size="small" onclick='selectPizzaSize(this.parentElement, event)'>S</button>
	                           <button data-size="medium" onclick='selectPizzaSize(this.parentElement, event)'>M</button>
	                           <button data-size="large" onclick='selectPizzaSize(this.parentElement, event)'>L</button>
	                         </div>
					</div>
					<div class="CATFavBuy">
					    <button><i class="fas fa-heart"></i></button>
					    <button onclick="addProduct(this.parentElement.previousElementSibling,this.parentElement.parentElement.parentElement,this.parentElement.parentElement.parentElement.lastElementChild)"><i class="fas fa-cart-shopping"></i></button>
					</div>
			</div>
			<div class="blankBoxes">
				<div class="boxOne"></div>
				<div class="boxTwo"></div>
			</div>
			</div>
			<img src="homePageAssets/pizzaSecond.png" class="pizzaImg pizzaTwo">
		</div>
		<div class="parentTrans2">
			<div class="transitionBg2">
				
			</div>
			<div class="descTransitionTwo">
			    <h1 class="titleTransition2"><span class="whiteText bold">disco</span><br>ver<br>more</h1>
			    <div class="recContent">
			    	<p>
			    		<i class="whiteText fas fa-quote-left"></i><span class="whiteText">The quick,brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz</span><i class="fas fa-quote-left whiteText"></i>
			    		<button>More Pizza</button>
			    	</p>
			    </div>
			</div>
		</div>
		<div class="moreOptions">
			<div class="topMoreOptions">
			<div class="restoDesc">
				<h1 class="title">foodo</h1>
				<p class="desc">The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick quartz.</p>
			</div>
			<div class="iconsOptions">
				<a href="#" target="_blank" class="chefRegis">
					<img src="data:image/png;base64,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" width="64" height="64">
					<p>be a chef</p>
				</a>
				<a class="menu" href="pizzaTypes.php" target="_blank">
				    <img src="data:image/png;base64,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">
					<p>our menu</p>
				</a>
				<a href="#" target="_blank" class="locations">
					<img src="data:image/png;base64,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" width="64" height="64">
					<p>our locations</p>
				</a>
			</div>
		     </div>
			<div class="reviews">
				<div class="reviewTitle">
					<hr>
					<h1>what people<br>say about<br><span>us</span></h1>
				</div>
				<div class="reviewComments">
					<div class="comment commentOne">
						<i class="fas fa-quote-left"></i>
						<p class="content">The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick quartz.</p>
						<i class="fas fa-quote-right"></i>
                        <p class="commentWriter">jane medrok</p>
					</div>
					<hr>
					<div class="comment commentTwo">
						<i class="fas fa-quote-left"></i>
						<p class="content">The quick, brown for jumpx over a lazy dog. DJs flock by when MTV ax quiz prog . JunkMTV quiz graced by fox whelps. Bawds jog, flick quartz.</p>
						<i class="fas fa-quote-right"></i>
                        <p class="commentWriter">jane medrok</p>
					</div>
				</div>
			</div>
		</div>
			</section>
	<script type="text/javascript" src="homeScript.js" async></script>
	<script type="text/javascript" src="default.js" async></script>
	<script type="text/javascript" src="numberScript.js"></script>
	<script src="https://kit.fontawesome.com/6dfcd7f70b.js" crossorigin="anonymous"></script>
</body>
</html>