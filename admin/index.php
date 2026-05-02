<?php
require '../server/baglan.php';


$query = "SELECT * FROM sh_kullanici WHERE k_rol = 3";

if ($result = mysqli_query($conn, $query)) {

    $rowcount = mysqli_num_rows( $result );

    $rowcount;
 }
session_start();
include 'func/gen_func.php';
include '../server/control.php';
control_user();

 $query1 = "SELECT * FROM sh_kullanici WHERE k_rol = 2";

if ($result1 = mysqli_query($conn, $query1)) {

    $rowcount1 = mysqli_num_rows( $result1 );

    $rowcount1;
 }

 $query2 = "SELECT * FROM sh_kullanici WHERE k_rol = 1";

if ($result2 = mysqli_query($conn, $query2)) {

    $rowcount2 = mysqli_num_rows( $result2 );

    $rowcount2;
 }
?>




<!DOCTYPE html>
<html lang="en-US" dir="ltr">

 <?php
include("bar.php")

?>
	
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center"><img class="me-2"   /><span class="font-sans-serif">PENTA</span>
              </div>
            </a>
          
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              
              <li class="nav-item dropdown">
               
               

              </li>
            </ul>
          </nav>
          <div class="row g-3 mb-3">
            <div class="col-md-3 col-xxl-3">
              <div class="card h-md-75 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">V.I.P KULLANICILARIMIZ</h6>
					<center><p><font color="blue" size="10"><?php echo $rowcount2; ?></font></p></center>
				
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xxl-3">
              <div class="card h-md-75">
                <div class="card-header pb-0">
					<center><h6 class="mb-0 mt-2">PREMİUM ÜYELER</h6></center>
					<center><p><font color="blue" size="10"><?php echo $rowcount; ?></font></p></center>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                     
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xxl-3">
              <div class="card h-md-75">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-12 col-xxl pe-2">
						<center><h6 class="mt-1">ÜYELİK TİPİ</h6></center>
						
						
						<center><p><font color="blue" size="6"><?php echo $uyelik;?></font></p></center>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                         
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                         
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xxl-3">
              <div class="card h-md-75">
                <div class="card-header pb-0">
					<center><h6 class="mb-0 mt-2">ADMİN SAYISI</h6></center>
					<center><p><font color="blue" size="10"><?php echo $rowcount1; ?></font></p></center>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                     
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
				
		<div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
  <div class="table-responsive scrollbar">
    <table class="table table-bordered table-striped fs--1 mb-0">
      <thead class="bg-200 text-900">
        <tr>
          <th class="sort">DUYURU</th>
		
          <th class="sort">BAĞLANTI</th>
			<th class="sort">TARİH</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         <?php
              $query = mysqli_query($conn, "SELECT * FROM `sh_duyuru`");
              while ($getvar = mysqli_fetch_assoc($query)) {
                echo '
                                <tr>
								 <td style="color: blue"><button type="button" class="btn btn-link">' . $getvar['d_icerik'] . '</button></td>
                                  <td style="color: #ffffff"><a href="https://discord.gg/ccshop" target="_blank"><button type="button" class="btn btn-link">https://discord.gg/ccshop</button></a></td>
<td style="color: #ffffff"><button type="button" class="btn btn-link">' . $getvar['d_time'] . '</button></td>								  
                                </tr>
								';
              }
              ?>
        </tr>
      </tbody>
    </table>
  </div> 
	
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>

  </body>

</html>