<!--?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.html");
}
if($_SESSION['sess_role'] == 'Admin')
{
	
	echo '<script language="javascript">';
	echo 'alert("Anda Tidak Memiliki Otorisasi")';
	echo ' </script>';
	header ("Location: 404.php");
}
?-->
<?php
	include_once("koneksi/conn.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pack.js"></script>
	<script type="text/javascript" src="js/proses1.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<!--LOGO-->
	<div class="grid_8" id="logo">Halaman Perhitungan</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><!--?php
		$rs=$koneksi->Execute("select count(status_kebutuhan) from kebutuhan_karyawan where status_kebutuhan='b'");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$notif = $rs->fields[0];
				if($notif == 0 )
				{
					echo"<font color=\"grey\">( 0 )</font>";
				}
				else
				{
				echo"(&nbsp; <a class=\"mail\" href=\"notifikasi.php\" title=\"Ada $notif permintaan karyawan baru !!\">$notif</a>)";
				}
			
				
		$rs->MoveNext();
		}
	}
?-->
&nbsp;|   Selamat Datang <a href="#"><?php echo $_SESSION["sess_username"] ?></a> - Anda login sebagai <a href="#"><?php echo $_SESSION["sess_role"] ?></a>  |    <a href="logout.php">Keluar</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="beranda.php" class="main"><span class="outer"><span class="inner dashboard">Beranda</span></span></a></li>
        <!--li class="item middle" id="two"><a href="lowongan.php" class="main"><span class="outer"><span class="inner content">Lowongan</span></span></a></li>
        <li class="item middle" id="three"><a href="periklanan.php"><span class="outer"><span class="inner reports png">Info Periklanan</span></span></a></li>
        <li class="item middle" id="four"><a href="pendaftaran.php" class="main"><span class="outer"><span class="inner users">Info Pendaftaran</span></span></a></li-->        
		<li class="item last" id="eight"><a href="#" class="main current"><span class="outer"><span class="inner settings">Mengelola Master</span></span></a></li>             
    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="#" class="current"><span>Perhitungan Matriks Normalisasi</span></a></li>
                      <li><a href="jabatan.php" ><span>Bobot</span></a></li>
                      
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Hasil Perhitungan Nilai Kinerja Karyawan</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <!--div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">You don't have any events for today! Yay!</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
		<div class="portlet">
            <!--table>
				<tr>
		<td hidden>ID bagian</td>
		<td hidden>:</td>
		<td hidden colspan="2"><input type="text" id="idbag"></td>
	</tr>
	<tr>
		<td height="30px" width="100px" style="vertical-align:middle;">Nama bagian</td>
		<td height="30px" width="20px" style="vertical-align:middle;">:</td>
		<td height="30px" style="vertical-align:middle;" colspan="2"><input type="text" id="namabag"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="button" id="simpanbag" name="simpanbag" value="Buat Baru" onclick="simpanbag();" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="ubahbag" name="ubahbag" value="Ubah" onclick="ubahbag();" disabled ></td>
	</tr>
			</table-->
        </div>      
      <!--THIS IS A PORTLET-->
        
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
       
      <!--THIS IS A PORTLET--> 
                             
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
	

<div id="table">
    <div class="portlet" >
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Nilai Kinerja Karyawan </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->NIK</th>
                <th width="102" scope="col">C1</th>
				<th width="102" scope="col">C2</th>
                <th width="102" scope="col">C3</th>
				<!--th width="102" scope="col">Bagian</th>
				<th width="102" scope="col">Teknik/Skill</th>
				<th width="102" scope="col">Personality</th>
                <th width="102" scope="col">Absensi</th>
				<th width="102" scope="col">Sanksi</th>
				<th width="102" scope="col">Hasil Penilaian</th-->
<?php
	
	$rs=$koneksi->Execute("select NIK, TEKNIK_SKILL, PERSONALITY, ABSENSI from kriteria order by 1");
//-------------SELECT 1---------------------
	$str = "SELECT MAX( TEKNIK_SKILL ) , MAX( PERSONALITY ) , MAX( ABSENSI ) FROM kriteria";
	$query = mysql_query($str) or die(mysql_error());
	$max = mysql_fetch_array($query);
//------------SELECT 2-------------------------
$str1 = "select B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI from bobot where ID_BOBOT = (select max(ID_BOBOT) from bobot)";
	$query1 = mysql_query($str1) or die(mysql_error());
	$max1 = mysql_fetch_array($query1);
	
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$NIK = $rs->fields[0];
			$c1 = $rs->fields[1];
			$c2 = $rs->fields[2];
			$c3 = $rs->fields[3];
			
			$p1 = $c1/$max[0];
			$p2 = $c2/$max[1];
			$p3 = $c3/$max[2];
			
			$nilaip1 = number_format($p1, 2, ',', '.');
			$nilaip2 = number_format($p2, 2, ',', '.');
			$nilaip3 = number_format($p3, 2, ',', '.');
			
			echo"<tr>";
				echo"<td>$NIK</td>";
				echo"<td>$nilaip1</td>";
				echo"<td>$nilaip2</td>";
				echo"<td>$nilaip3</td>";
				/*if ($sts = '0'){
				echo"<td>Tidak Aktif</td>";
				}
				elseif($sts = '1'){
				echo"<td>Aktif</td>";
				}*/
				//echo"<td><a href=\"Javascript:par('$idbag','$namabag');\" class=\"edit_icon\" title=\"Edit\"></a>";
				//echo $ket1;
				echo "</td>";
			echo"</tr>";
		$rs->MoveNext();
		}
	}
?>
              </tr>
            </thead>
          </table>
        </form>
		</div>
      </div>
	  </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Back Office by <a href="../index.htm">PT. Umbra Prasia</a></div>
<!-- FOOTER END -->
</body>
</html>
