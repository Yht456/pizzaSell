Array.prototype.slice.call(document.querySelectorAll('.CATNumPizza  .numberOfPizzas button')).forEach(function(singleBtn){
  singleBtn.onclick = function(event){
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
  }
})