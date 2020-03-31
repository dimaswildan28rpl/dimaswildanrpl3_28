<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div class="ok" align='center'>
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
<div class ="iy">   <img src="ar.png"  height="150"width="300"/></div>
<style>

    body{
       margin: 0;
       padding: 0;
       font-family: sans-serif;
       background-image: url(af.jpg);
       background-size: 100%;
   
  }
  .ok {
        position: absolute;
        top: 65%;
        left: 45%;
        transform: translate(-50%, -100%);
        }</style>