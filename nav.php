<nav>
		<h1><a href="index.php">Foodo</a></h1>
		<div class="overlayMenu" onclick="document.querySelector('nav ul').classList.remove('openMobileMenu');document.querySelector('.overlayMenu').classList.remove('openOverlayMenu');"></div>
		<ul class="navBar">
			<li data-page="index"><a href="index.php" target="_blank">Home</a><button class="closeMobileMenu" onclick="document.querySelector('nav ul').classList.remove('openMobileMenu');document.querySelector('.overlayMenu').classList.remove('openOverlayMenu');"><i class="fas fa-xmark"></i></button>
			</li>
			<li data-page="pizzaTypes"><a href="pizzaTypes.php" target="_blank">Pizza Types</a></li>
			<li data-page="cookers"><a href="" target="_blank">Cookers</a></li>
			<li data-page="services"><a href="" target="_blank">Services</a></li>
		</ul>
		<div class="registerNavSide">
			<button class="doorToMobileMenu" onclick="document.querySelector('nav ul').classList.add('openMobileMenu');document.querySelector('.overlayMenu').classList.add('openOverlayMenu');"><i class="fas fa-bars"></i></button>
			<!-- <button class="regBtn">Register</button> -->
			<div class="backet">
				<i class="fas fa-xmark closingBtnBacket" onclick="document.querySelector('.backet').style.display='none';"></i>
				<div class="products">
					<span></span>
				</div>
				<hr class="firstLine">
				<div class="totalPrice">
					<p>total:</p>
					<div class="priceNumber">
					    <p class="numb">0</p>
					    <span class="currency">$</span>
				    </div>
				</div>
				<hr>
				<button class="proceedBtn">check out</button>
			</div>
			<i class="fas fa-heart"></i>
			<i class="fas fa-cart-shopping shopBtnMenu" onclick="
		    if(getComputedStyle(document.querySelector('.backet')).display == 'block'){
		    	document.querySelector('.backet').style.display ='none';
		    }else{
		    	document.querySelector('.backet').style.display ='block';
		    }
			
			"></i>
		</div>
	</nav>
	<div class="ads">
		<p class="adsContent">Three FREE paparaoni pizzas for every check out</p>
	</div>
<script type="text/javascript">
	var menu = document.querySelectorAll('nav ul li');
	menu.forEach(function(elem,elemIndex){
		if(window.location.pathname.search(elem.getAttribute('data-page')) > -1){
			elem.classList.add('active');
		}else{
			if(elem.className.indexOf("active") > -1){
				elem.classList.remove('active');
			}
		}
	})
</script>