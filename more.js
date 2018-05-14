function showText(el){
	if (el.previousElementSibling.clientHeight === 80){
		el.previousElementSibling.style.height =  "20%"; 
		el.innerHTML = "Приховати...";
	}else{
		el.previousElementSibling.style.height = "80px";
		el.innerHTML = "Читати більше...";
	}
}