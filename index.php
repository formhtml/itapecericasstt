<?php 

	$csv = array();
	$file = fopen('dados.csv', 'r');
	while (($result = fgetcsv($file)) !== false) {
		$temp = explode(";",$result[0]);
		$csv[$temp[2]] = $temp;
	}
	fclose($file);

	$uA = $csv[$_GET["registro"]];

?>


<div class="tm-page-container mx-auto">


<script type="text/javascript" language="JavaScript">
var i = setInterval(function () {
    
    clearInterval(i);
  
   
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, 5800);

</script>
<div id="loading" style="display: block">
    <img src="img/cab/load.gif" alt="Image" class="img-fluid tm-img"/>
</div>

</div>



<div id="conteudo" style="display: none">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dados Funcionais</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />

<link rel="shortcut icon" href="img/favicon.ico"/>

</head>

<body>



<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">



<body onload=setInterval("window.clipboardData.clearData()",20)>
 </body>

  <div class="tm-page-container mx-auto">
    <header class="tm-header text-center">
      
    </header>

    <section class="tm-section">
    
     
     
      <div class="tm-content-container">
        <figure class="mb-0">
           <img src="<?php echo $uA[18];?>" alt="Image" class="img-fluid tm-img" />
          <br /><br />

          
          
          
<font face="Arial, Helvetica, sans-serif">
<h1 class="tm-page-title1" align="left"><font color="#000033" face="Arial, Helvetica, sans-serif" size="1">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
Identificado -


<script type="text/javascript" language="JavaScript">



var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = "" + (hours)
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timerRunning = true;
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getFullYear();
year = myyear
if(myday == 0)
day = " Domingo, "
else if(myday == 1)
day = " Segunda, "
else if(myday == 2)
day = " Terça, "
else if(myday == 3)
day = " Quarta, "
else if(myday == 4)
day = " Quinta, "
else if(myday == 5)
day = " Sexta, "
else if(myday == 6)
day = " Sábado, "
if(mymonth == 0)
month = " de Janeiro de "
else if(mymonth ==1)
month = " de Fevereiro de "
else if(mymonth ==2)
month = " de Março de "
else if(mymonth ==3)
month = " de April de "
else if(mymonth ==4)
month = " de Maio de "
else if(mymonth ==5)
month = " de Junho de "
else if(mymonth ==6)
month = " de Julho de "
else if(mymonth ==7)
month = " de Agosto de "
else if(mymonth ==8)
month = " de Setembro de "
else if(mymonth ==9)
month = " de Outubro de "
else if(mymonth ==10)
month = " de Novembro de "
else if(mymonth ==11)
month = " de Dezembro de "
document.write( day + myweekday + month + year + " - " + timeValue);

$(window).load(function() {
     document.getElementById("loading").style.display = "none";
     document.getElementById("conteudo").style.display = "inline";
})

</script>
&nbsp;&nbsp;&nbsp;&nbsp;

</font>
</font>
</h1>

            <div class="imageholder">
      <img src="<?php echo $uA[14];?>" alt="Image" class="img-fluid tm-img" />
              <div class='imageHolderTextContainer'>
                <h1 class="tm-page-title2"><?php echo $uA[15];?></h1>
                <h1 class="tm-page-title2"><?php echo $uA[0];?></h1>
                <h1 class="tm-page-title2"><?php echo $uA[1];?></h1>
              </div>
            </div>
          




          <div class="tm-content">


            </HTML>




            <h1 class="tm-page-title1">
              <b>Nome<b /></h1>

            <h1 class="tm-page-title2">
              <b><?php echo  $uA[0];?></h1>

            <br>

            <h1 class="tm-page-title1">
              <b>Cargo<b /></h1>

            <h1 class="tm-page-title2">
              <b><?php echo  $uA[1];?></h1>


            <br>

            <h1 class="tm-page-title1">
              <b>Registro Funcional<b /></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[2];?></h1>


            <br>

            <h1 class="tm-page-title1">
              <b>Porte DPF<b /></h1>

            <h1 class="tm-page-title2">
             <font color="ffa500"><b><?php echo $uA[3];?></h1></font>


            <br>


           
            <h1 class="tm-page-title1">
              <b>CPF</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[4];?></h1>

            <br>

            <h1 class="tm-page-title1">
              <b>Registro Geral</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[5];?></h1>



            <br>

            <h1 class="tm-page-title1">
              <b>Naturalidade</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[6];?></h1>

            <br>


            <h1 class="tm-page-title1">
              <b>Data de Nascimento</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[7];?></h1>



            <br>

            <h1 class="tm-page-title1">
              <b>Tipo Sang./ RH</b></h1>

            <h1 class="tm-page-title2">
              <b>
                <font color="#FF0000"><?php echo $uA[8];?></h1>
            </font></b></h1>

            <br>

            <h1 class="tm-page-title1">
              <b>Filiação</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[9];?></h1>

           

            <h1 class="tm-page-title1">
              <b></b></h1>
            <br>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[10];?></h1>

            <br>


            <h1 class="tm-page-title1">
              <b>Admissão</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[11];?></h1>

            <br>
            <h1 class="tm-page-title1">
              <b>Expedição</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[12];?></h1>

            <br>

            <h1 class="tm-page-title1">
              <b>Validade</b></h1>

            <h1 class="tm-page-title2">
              <b><?php echo $uA[13];?></h1>




          </div>
        </div>

        <font size="-1">
          <span>&nbsp;&nbsp;&nbsp;ITAPECERICA DA SERRA - SP</span><br />
          <span>&nbsp;&nbsp;&nbsp;Secretaria de Segurança, Trânsito e Transporte</span><br /><br />

          &nbsp;&nbsp;&nbsp;<b>11 - 4467-9404</b><br />
          <span>&nbsp;&nbsp;&nbsp;</span> <br />




      </section>
  </body>

  </html>
</div>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>.</title>
</head>

<body>
</body>

</html>