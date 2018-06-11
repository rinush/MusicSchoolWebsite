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

var count=2;

function slides(){
 var i;
 document.getElementById("a1").style.display="block";
 document.getElementById("p1").style.display="block";
 setInterval(function(){
  for(i=1;i<=3;i++)
  {
   document.getElementById("a"+i).style.display="none";
   document.getElementById("p"+i).style.display="none";
  }
  document.getElementById("a"+count).style.display="block";  
  document.getElementById("p"+count).style.display="block";  
  if(count>=3){
   count=1;
  }
  else{
   count++;
  }
 },5000);
}