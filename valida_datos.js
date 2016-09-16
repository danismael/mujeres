//Written by Ing. D. Ismael Serrano.
//dserrano@ieee.org
//Enjoy it


var alphaChars="ABCDEFGHIJKLMNOPQRSTUVWXYZ "
var numChars="0123456789"
var error
var error_usuario
var error_password
var errormsg

//var error_ciudad
//var error_estado
//var errormsg

//--------------------------Variable-------------------------------
var isusuarioReq=true
var ispasswordReq=true
//var isciudadReq=true
//var isestadoReq=true

//------------------------------------------------------------------

function reset_error()
{
error_usuario=false
error_password=false
errormsg='- Los siguientes errores ocurrieron -\n_____________________________\n\n'
}


function validate_usuario()
{
 if(isusuarioReq)
 {
  if(document.main.d_usuario.value=="")
  {
   errormsg+='Por favor ingrese el Usuario.\n'
   error_usuario=true
   document.main.d_usuario.focus()
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

function validate()
{
 reset_error()
 validate_usuario()
 validate_password()



 if(error_usuario||error_password)
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

