<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RESUME</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body style="background-color:#C4D7E0;">
    <center><h1 id=head>RESUME</h1>
      <table border="5" cellspacing="18">
        <tr>
          <td><img src="http://myseedhospitality.com/wp-content/uploads/2018/01/passport-size-photo-male-233x300.jpg"></td>
          <td><h2 id="head1">EDUCATION</h2>
               <ul>
                 <li>
                 <?php
                 $school=$_GET[("school")];
                 echo $school;
                 ?></li>
                 <li><?php
                 $inter=$_GET[("inter")];
                 echo $inter;
                 ?></li>
                 <li><?php
                 $college=$_GET[("college")];
                 echo $college;
                 ?></li>
               </ui>
        </tr>
        <tr>
          <td><h2 id="head2"><center>
          <?php
                 $name=$_GET[("name")];
                 echo $name;
                 ?>
          </center></h2>
          <td><h2 id="head3">CERTIFICATION AND SOFT SKILLS</h2>
            <ul>
              <li><?php
                 $certificates=$_GET[("certificates")];
                 echo $certificates;
                 echo "<br>";
                 ?></li>
              
            </ul>
        </tr>
        <tr>
          <td><h2 id="head4">prefered coding languages</h2>
           <ul>
             <li><?php
                 $coding=$_GET[('coding')];
                 echo $coding;
                 ?></li>
             

           </ul>
          <td><h2 id="head5">HARD SKILLS</h2>
            <ul>
              <li><?php
                 $hardskills=$_GET[('hardskills')];
                 echo $hardskills;
                 ?></li>
              
            </ul>
        </tr>
        <tr>
          <td><h2 id="head6">personal information</h2>
           
            <p><?php
                 $email=$_GET[("email")];
                 $phno=$_GET[("phno")];
                 $cityname=$_GET[("cityname")];
                 echo $email;
                 echo "<br>";
                 echo $phno;
                 echo "<br>";
                 echo $cityname;
                 echo "<br>";

                 ?></p>
          <td><h3 id="head7">languages</h3>
            <ul>
              <li><?php
                 $languages=$_GET[("language")];
                 echo $languages;
                 ?><li>
              
            </ul>
        </tr>


  </body>
</html>