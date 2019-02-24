<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="helpsupport";
?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>



<link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">

	


<div style=" background-image: url(../rmcenter_admin/img1.jpg);
    background-repeat: repeat; color: black; font-size:16px; margin:25px; padding:25px; text-align:center;">

<h1  style="text-align:center; ">Help and Suport</h1>
<p>
For any help & support from the website.Plese contact-

<table class="table table-hover">

<style type="text/css"></style>
    <thead style="background: white;">
      <tr style="text-align:center;">
        <th style="text-align:center;">Name</th>
        <th style="text-align:center;">Current Status</th>
        <th style="text-align:center;">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr syle="nth_chile(even) background: red">
        <td> Rakibul Hassan</td>
        <td>3rd Year, Dept. of CSE RUET </td>
        <td>rakib_cse13@outlook.com</td>
      </tr>

      <tr>
        <td>Md Masum Billah</td>
        <td>3rd Year, Dept. of CSE RUET </td>
        <td></td>
      </tr>

        <tr>
        <td>Nafisa Tasneem</td>
        <td>3rd Year, Dept. of CSE RUET </td>
        <td></td>
      </tr>

       <tr>
        <td>Tasnia Rahman Sruti</td>
        <td>3rd Year, Dept. of CSE RUET </td>
        <td></td>
      </tr>


       <tr>
        <td>Gulam Raisul Islam</td>
        <td>3rd Year, Dept. of CSE RUET </td>
        <td></td>
      </tr>
    </tbody>

  </table>
</div>


<?php
echo "<br>";
include '../front_page/footer.php';
?>
