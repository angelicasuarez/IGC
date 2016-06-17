function  validarform()
{


	var verificar=true;
	


	var formulario= document.getElementById("formulario_frm");
	var nombre= document.getElementById("nombre");
	var edad= document.getElementById("edad");
	var peso= document.getElementById("peso");
	var masculino= document.getElementById("M");
	var femenino= document.getElementById("F");
	var altura= document.getElementById("altura");
	var cintura= document.getElementById("cintura");
	var cuello= document.getElementById("cuello");
	var caderas= document.getElementById("caderas");
	
	

if(nombre.value == "")
{
	alert("El campo nombre es requerido");
	nombre.focus();
	verificar=false;
}


 else if(edad.value == "")
{
	alert("El campo edad es requerido");
	edad.focus();
	verificar=false;
}

else if(isNaN(edad.value)) // solo acepta numeros 
{
   alert("el campo edad solo permite expresiones numericas");
   edad.focus();
   verificar = false;
}

 else if(peso.value == "")
{
	alert("El campo peso es requerido");
	peso.focus();
	verificar=false;
}


else if(isNaN(peso.value)) // solo acepta numeros 
{
   alert("el campo peso solo permite expresiones numericas");
   peso.focus();
   verificar = false;
}

else if(!masculino.checked && !femenino.checked)
{
	alert(" El campo sexo es requerido");
	femenino.focus();
	verificar=false;
}


 else if(altura.value == "")
{
	alert("El campo altura es requerido");
	altura.focus();
	verificar=false;
}


 else if(cintura.value == "")
{
	alert("El campo cintura es requerido");
	cintura.focus();
	verificar=false;
}

 else if(cuello.value == "")
{
	alert("El campo cuello es requerido");
	cuello.focus();
	verificar=false;
}






if (verificar == true)
   {
       alert ("el formulario se ha enviado correctamente ");
   
   document.formulariovalid.submit();
   }
}


function limpiarform ()
{

alert("seguro que deseas borrar la informacion");
document.getElementById("formulario_frm").reset();
}


window.onload= function()

{
	var botonEnviar, botonlimpiar;

	botonlimpiar=document.getElementById("limpiar");
	botonlimpiar.onclick= limpiarform;
    

    botonEnviar=document.formulariovalid.enviar_btn;
    botonEnviar.onclick=validarform;

}

function mostrar(){

	document.getElementById('oculto').style.display='none';
}

function ocultar(){

	document.getElementById('oculto').style.display='block';
}