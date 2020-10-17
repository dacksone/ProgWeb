function Validar( formulario ) {
  //Camptura de datos

  var nombre = formulario.nombre.value;  //nombre

  var apellido = formulario.apellido.value;  //apellido

  var cedula = formulario.cedula.value;  //cedula
  var largocedula = cedula.length ; // tamaño cedula

  var genero = formulario.genero.value;  //genero
  var fechaingreso = formulario.fechaingreso.value; // fechaingreso
  var sueldobasico = formulario.sueldobasico.value; // sueldobasico
  var numerohijos = formulario.numerohijos.value;  // numerohijos
  var subsidiotransporte = formulario.subsidiotransporte.value // numerohijos
  var subsidiofamiliar = formulario.subsidiofamiliar.value // subsidiofamiliar
  var totaldevengado = formulario.totaldevengado.value // totaldevengado

  //Variable de recorrido
  var listanumeros = "0123456789";
  // contadores
  var cont = 0;
  //Variables constantes
  const VALORSUBSTRANSP = 102854; // valor de subsidio de transporte
  const VALORSUBFAM = 70000; //  valor de subsidio familiar
  const VALORSALARIOMINIMO = 980657;


  /* Validacion de ingreso de datos */

  //Validacion de datos de cedula

    cont = 0;
    for(i=0;i<cedula.length;i++)
 {
    ch = cedula.charAt(i);
    for (j=0;j<listanumeros.length; j++)
   {
      if(ch ==listanumeros.charAt(j))
       {
          cont = cont + 1;
          j = listanumeros.length;
          break;
        }
    }
  }
  if(cont < cedula.length)
  {
    alert("El campo cedula tiene caracteres no permitidos, solo se aceptan numeros");
    formulario.cedula.focus();
    return (false);
  }

  /* Validacion de sueldo */


  if (parseint(sueldobasico) < VALORSALARIOMINIMO){
      alert("El sueldo debe ser mayor a $ 980.657, de acuerdo a (Salario mínimo Legal Vigente año 2020 ");
      formulario.sueldo.focus();
      return(false);
  }else if (parseint(sueldobasico) > 15000000){
      alert("El sueldo debe ser menor a $ 15.000.000");
      formulario.sueldo.focus();
      return(false);
  }

  /* calculo subsidio de transporte */

    if (parseint(sueldobasico) < (VALORSALARIOMINIMO + VALORSALARIOMINIMO)) {
      subsidiotransporte = (VALORSUBSTRANSP).toString();

    } else {
      subsidiotransporte = 0;
    }

    /* calculo subsidio familiar */

      if (parseint(numerohijos) >=1) {
        subsidiofamiliar =  (VALORSUBFAM * parseint(numerohijos)).toString();

      } else {
        subsidiofamiliar = 0
      }

      /* calculo valor total devengado */

        totaldevengado = (parseint(pasueldobasico) + parseint(subsidiotransporte) + parseint(subsidiofamiliar)).toString;

  /*

 if(largoclave<4)
  {
    alert("Favor ingrese datos completos al password");
    formulario.password.focus();
    return (false);
  }
  if(largoclave1<4)
  {
    alert("Favor ingrese datos completos a la confimacion del password");
    formulario.password1.focus();
    return (false);
  }

    if(formulario.password.value != formulario.password1.value){
      alert("El password debe ser igual en ambos campos.");
         return (false);
  }

  if(dia=="0")
  {
      alert("Dia no puede ser 0");
      return (false);
  }
  if(mes=="0"){
      alert("Mes no puede ser 0");
      return (false);
  }
  if(ano=="0"){
      alert("A�o no puede ser 0");
      return (false);
  }
  if(mes == "2"){
      if(dia == "29" || dia == "30" || dia == "31"){
          alert("Fecha no valida.");
         return (false);
      }
  }
  if(mes == "4"){
      if(dia == "31"){
          alert("Fecha no valida.");
         return (false);
      }
  }
  if(mes == "6"){
      if(dia == "31"){
          alert("Fecha no valida.");
         return (false);
      }
  }

  if(mes == "9"){
      if(dia == "31"){
          alert("Fecha no valida.");
         return (false);
      }
  }
  if(mes == "11")
  {
      if(dia == "31")
      {
          alert("Fecha no valida.");
         return (false);
      }
  }
  */
}
