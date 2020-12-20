<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.png" type="image/icon" sizes="20x20">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Jhone Lima  </title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="O nome deve ser preenchido.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Jhone Lima   </span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login </b> </span></a></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Faça login na sua conta
</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Nome do usuário" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Digite sua senha" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Formulário de Registro
</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Digite seu nome" class="form-control input-md" type="text" value="<?php
if (isset($_GET['name']))
{
echo $_GET['name'];
}?>">
      
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="rollno"></label>  
  <div class="col-md-12">
  <input id="rollno" name="rollno" placeholder="Digite ano Nascimento (Ex:1988***)" class="form-control input-md" type="text" value="<?php
if (isset($_GET['rollno']))
{
echo $_GET['rollno'];
}?>">

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Selecione o seu sexo" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>Selecione o seu sexo</option>
  <option value="M" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "M")
    echo "selected";
  }
?>>Masculino</option>
  <option value="F" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "F")
    echo "selected";
  }
?>>Feminino</option> </select>

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="profissão" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['branch']))
    echo "selected";
?>>Qual a sua profissão</option>
  <option value="CSE" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "CSE")
    echo "selected";
  }
  ?>>Análise e Gestão de Riscos</option>
  <option value="AGR" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "AGR")
    echo "selected";
  }
?>>Auditoria de Sistemas</option>
  <option value="SA" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "SA")
    echo "selected";
  }
?>>Banco de Dados</option>
  <option value="DB" <?php
  if (isset($_GET['branch']))
  {
  if ($_GET['branch'] == "DB")
    echo "selected";
  }
?>>Computação Forense</option>
  <option value="CF" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "CF")
    echo "selected";
  }
?>>Pentest</option>
  <option value="PENTEST" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "PENTEST")
    echo "selected";
  }
?>>Analista de Sistemas</option> 
  <option value="ADS" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "ADS")
    echo "selected";
  }
?>>DEV</option> 
  <option value="DEV" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "DEV")
    echo "selected";
  }
?>>Estudante</option> 
  <option value="EST" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "EST")
    echo "selected";
  }
?>>Outros</option> </select>
  </input>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="Nome de usuário" class="form-control input-md" type="username" value="<?php
if (isset($_GET['username']))
{
echo $_GET['username'];
};
?>" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">

  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" placeholder="Insira o número do seu celular" class="form-control input-md" type="number" value="<?php
if (isset($_GET['phno']))
{
echo $_GET['phno'];
}
?>">

<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Coloque sua senha" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirme a Senha" class="form-control input-md" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Registrar" class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Login</a></div>
<div class="col-md-3 box">
<span href="#" data-target="#login" style="color:lightyellow">Copyright © 2018 Jhone. All rights reserved<br><br></span>
</div>


<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Contato</a></div>

   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login no servidor</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Nome do usuário" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Digite sua senha" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Entrar" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
