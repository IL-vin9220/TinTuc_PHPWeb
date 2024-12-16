<?php
    require_once "include/header.php";
?>



<section id="contentSection">
    <div class="row">

        <div class="col-12">
         <div class="left_content">
          <div class="contact_area">
            <h2> Ghé thăm chúng tôi bất cứ lúc nào </h2>
            <div>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.453222870787!2d105.73291811476378!3d21.05373098598487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e1!3m2!1svi!2s!4v1652796816063!5m2!1svi!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          </div>
        </div>
        </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="left_content">
          <div class="contact_area">
            <h2>Liên hệ</h2>
            <h4 class="text-center">Chúng tôi sẵn sàng nhận bất kỳ ý kiến nào hoặc chỉ để trò chuyện</h4>
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="Tên*">
              <input class="form-control" type="email" placeholder="Email*">
              <textarea class="form-control" cols="30" style="resize: none;" rows="10" placeholder="Nội dung*"></textarea>
              <input type="submit" value="Gửi tin nhắn">
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="right_content" style=" position: relative;">
            <div class="contact_area" style="font-size:20px;" >

              <h2>Liên lạc</h2>

              <p ><i style="font-size:29px;" class="fa fa-map-marker" aria-hidden="true"></i>
                &nbsp;&nbsp;  
                Địa chỉ: <span style="text-align: justify; width: 100px;"> <?php echo $address; ?> </span>
               </p>

              <p><i style="font-size:29px;" class="fa fa-phone" aria-hidden="true"></i> 
                &nbsp;&nbsp; Số điện thoại: <a href="tel:<?php echo $phn ?>"> <?php echo $phn; ?> </a> </p>

                
                <p ><i style="font-size:29px;" class="fa fa-location-arrow fa-10x" aria-hidden="true"></i>
                &nbsp; &nbsp; Email: <a href = "mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a></p>
                
                <p><i class="fa fa-fax" aria-hidden="true"></i>
                &nbsp;&nbsp; Fax: <a href="fax:<?php echo $fax; ?>"> <?php echo $fax; ?> </a>
              </p>

              <?php
                  }
                }
            ?>
            </div>
          </div>
      </div>
      <!-- closing row -->
  </div>
</section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget wow fadeInDown">
            <h2>Các links quan trọng</h2>
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
            <p>Liên hệ với chúng tôi bất cứ lúc nào. Chúng tôi sẵn sàng nhận bất kỳ đề xuất nào hoặc chỉ để trò chuyện.</p>
            <address>
          
              <P> Địa chỉ: <?php echo $address; ?></P>
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