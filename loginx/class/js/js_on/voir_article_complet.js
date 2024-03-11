
function voir_article_complet(_this){

	console.log(_this.title) ; 
console.log(window.location.href) ; 


 
let position1 = window.location.href.search("localhost");

let position2 = window.location.href.search("localhost");

let total  =position1+position2 ; 
 

	window.location.href = "apparence/article_2.php/"+_this.title;
}