function showmenu(){
    for(i=0;i<5;i++){
     var x=document.getElementsByClassName("header")[0];
	 var y=  x.getElementsByTagName("li")[i];
	 y.getElementsByTagName("a")[0].style.display="block";
	}
document.getElementsByClassName("menu")[0].style.display = "none";
document.getElementsByClassName("close")[0].style.display = "block";
 setInterval(function(){
 if(document.body.clientWidth>1200){
	 document.getElementsByClassName("menu")[0].style.display = "none";
     document.getElementsByClassName("close")[0].style.display = "none";	 
  }
  else{
  if( (y.getElementsByTagName("a")[0].style.display)=="block"){
	 document.getElementsByClassName("close")[0].style.display = "block"; 
  }
  else{
	document.getElementsByClassName("close")[0].style.display = "none";  
   }
  }
 },100);	
}

function closemenu(){
   for(i=0;i<5;i++){
     var x=document.getElementsByClassName("header")[0];
	 var y=  x.getElementsByTagName("li")[i];
	 y.getElementsByTagName("a")[0].style.display="none";
	}
document.getElementsByClassName("menu")[0].style.display = "block";
document.getElementsByClassName("close")[0].style.display = "none";	
setInterval(function(){if(document.body.clientWidth>1200){
 for(i=0;i<5;i++){
     var x=document.getElementsByClassName("header")[0];
	 var y=  x.getElementsByTagName("li")[i];
	 y.getElementsByTagName("a")[0].style.display="block";
	}
}},100);	
}