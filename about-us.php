<?php 
    require_once "include/header.php";
?>

<section id="contentSection">
    <div class="row">
        <div class="col-lg3-3 col-md-3 col-sm-12">
         <div class="left_content">
          <div class="contact_area">
              <h2>Về chúng tôi</h2>                   
          </div>
         </div>
        </div>
        <div class="col-lg-6"> <br> <br>
            <?php      
                    $get_about_us = "SELECT * FROM about_us ORDER BY id DESC LIMIT 1";
                    $result_about_us = mysqli_query($conn , $get_about_us);
                    if($result_about_us){
                        while( $about_us_rows = mysqli_fetch_assoc($result_about_us) ){
                                echo $about_us_rows["about"] . "<br>";
                        }
                    }
            ?>

        </div>
        <!-- row end -->
    </div>
</section>

<!-- footer -->
<footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget wow fadeInDown">
            <h2>Các link quan trọng</h2>
            <ul class="tag_nav">
            <!-- <li><a href="#">Log-in / Sign-Up</a></li> -->
               <!-- adding category----------------------------------------------------------------- -->
               <?php 
               
                $get_category = "SELECT * FROM post_category";
                $result = mysqli_query($conn , $get_category);
                if($result){
                  while ( $rows =  mysqli_fetch_assoc($result) ){
                    $c_name = $rows["c_name"]
              ?> 
                <li><a href="read-category.php?category=<?php echo $c_name; ?> "> <?php echo ucwords($c_name); ?></a></li>
                      <?php
                        }
                    }
                  ?>
                <!-- end of adding category---------------------------------------------------------  -->
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget wow fadeInRightBig">
          <?php 
                $get_details = "SELECT * FROM contact_us ORDER BY id DESC LIMIT 1";
                $get_details_result = mysqli_query($conn , $get_details);

                if($get_details_result){
                  while ($rows = mysqli_fetch_assoc($get_details_result) ){

                    $address = ucwords($rows["address"]);
                    $phn = $rows["phn"];
                    $email = ucfirst($rows["email"]);
                    $fax = $rows["fax"];
              ?>
             
            <h2>Liên hệ</h2>
            <p>Liên hệ với chúng tôi bất cứ lúc nào. Chúng tôi sẵn sàng cho bất kỳ ý kiến nào hoặc chỉ để trò chuyện.</p>
            <address>
          
              <P> Địa chỉ : <?php echo $address; ?></P>
              <P>  Số điện thoại: <a  style="color:rgb(218,218,218);" href="tel:<?php echo $phn ?>"> <?php echo $phn; ?> </a></P>
              <p>Email : <a style="color:rgb(218,218,218);" href = "mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a> </p>
              <p>Fax : <a style="color:rgb(218,218,218);" href="fax:<?php echo $fax; ?>"> <?php echo $fax; ?> </a> </p>
            </address>

            <?php 
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; <?php echo date("Y" , strtotime("now") ); ?> <a href="./index.php">Tin tức</a></p>
      <p class="developer" style="color:white;">Developed By Nhóm 20</p>
      <!-- Wpfreeware -->
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>