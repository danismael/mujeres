//Written by Ing. D. Ismael Serrano.
//dserrano@ieee.org
//Enjoy it


var alphaChars="ABCDEFGHIJKLMNOPQRSTUVWXYZ "
var numChars="0123456789"
var error
var error_nombre
var error_curp
var error_numero
var error_usuario
var error_password
var errormsg

//var error_ciudad
//var error_estado
//var errormsg

//--------------------------Variable-------------------------------
var isnombreReq=true
var isusuarioReq=true
var ispasswordReq=true
var isnumeroReq=false
var iscurpReq=true

//------------------------------------------------------------------

function reset_error()
{
error_nombre=false	
error_usuario=false
error_password=false
error_numero=false
error_curp=false
errormsg='- Los siguientes errores ocurrieron -\n_____________________________\n\n'
}

function validate_nombre()
{
 if(isnombreReq)
 {
  if(document.main.d_nombre.value=="")
  {
   errormsg+='Por favor ingrese el Nombre.\n'
   error_nombre=true
   document.main.d_nombre.focus()
   }
  }
 }
 
 function validate_curp()
{
 if(iscurpReq)
 {
  if(document.main.d_curp.value=="")
  {
   errormsg+='Por favor ingrese el CURP.\n'
   error_curp=true
    if(!error_nombre)
    {
     document.main.d_curp.focus()
    }
   }
  }
 }

function validate_usuario()
{
 if(isusuarioReq)
 {
  if(document.main.d_usuario.value=="")
  {
   errormsg+='Por favor ingrese el Correo.\n'
   error_usuario=true
      if(!error_curp)
    {
     document.main.d_usuario.focus()
    }
   
  }
 }
}


function validate_password()
{
 if(ispasswordReq)
 {
  if(document.main.d_password.value=="")
  {
   errormsg+='Por favor ingrese el Password.\n'
   error_password=true
   if(!error_usuario)
    {
     document.main.d_password.focus()
    }
   }
  }
 }
 

function validate_numero()
{
 if(isnumeroReq)
 {
  if(document.main.d_numero.value=="")
  {
   errormsg+='Por favor ingrese el numero de empleado.\n'
   error_numero=true
   document.main.d_numero.focus()
 
  }
 }
 for(var i=0; i<document.main.d_numero.value.length; i++)
 {
  for(var j=0; j<numChars.length; j++)
  {
   if(numChars.charAt(j)==document.main.d_numero.value.charAt(i))
   {
    break;
   }
   else
   {
    if(j==(numChars.length-1))
    {
     errormsg+='"' + document.main.d_numero.value.charAt(i) + '"' + ' es un carácter invalido para el numero de empleado \n';
     error_numero=true;
    }
   }
   if(error_numero)
   {
   
     document.main.d_numero.select();
 
   }
  }
 }
}



function validate()
{
 reset_error()
 validate_nombre()
 validate_curp()
 validate_usuario()
 validate_password()



 if(error_usuario||error_password ||error_nombre || error_curp)
 {
  error=true
 }
 else
 {
  error=false
 }
 
if(!error)
 {
  document.main.submit()
 }
 else
 {
  alert(errormsg)
 }
}

