var cmpDate = new Date();
var  odod = document.getElementById("dataOd");
document.write(dataOd);

var przyKlik = document.getElementById('przycisk');
//przyKlik.onClick = alert("dsaddf");

var  dodo = document.getElementById("dataDo");
document.write("dataDo");

przyKlik.addEventListener('click',sprawdzDate, false);

Function sprawdzDate (){

if(cmpDate > odod ){

if(dataOd < dataDo ){
		document.writeln("data zostałą prawidłowo wpisana");
		
	}
	else{
		document.writeln("asdsfgdstg   ");
		
	}
	
	
	
}
else{
	
	document.write("niepoprawna data w polu od");
	
}

}