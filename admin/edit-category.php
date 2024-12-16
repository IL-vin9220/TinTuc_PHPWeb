<?php
require_once "include/header.php";
?>

<?php 
// database connection 
require_once "include/connection.php";

        $c_id = $_GET["id"];
        $fill_cat = "SELECT * FROM post_category WHERE c_id = '$c_id' ";
        $result= mysqli_query($conn , $fill_cat);

        if($result){
            while( $rows = mysqli_fetch_assoc($result) ){
                $category = trim( $rows["c_name"] );
            
            }
        }

        $category_error =  "";

    if( $_SERVER["REQUEST_METHOD"] == "POST"){
       
        if(empty($_REQUEST["cat_name"])){
            $category_error = "<p style='color:red'> * Tên danh mục yêu cầu</p>";
        }else {
          $category = $_REQUEST["cat_name"];
        }

        if( !empty($category) ){
            $cat_select = "SELECT * FROM post_category WHERE c_name = '$category' ";
            $result = mysqli_query($conn , $cat_select);

            if( mysqli_num_rows($result) > 0 ){
                $category_error =  "<p style='color:red'>* Danh mục đã tồn tại </p>";
            }else{
               
                $add_cat = "UPDATE post_category SET c_name = '$category' WHERE c_id = '$c_id' ";
                $add = mysqli_query( $conn , $add_cat );
                if($add){
                    $category  = "";
                    echo "<script>
                    $(document).ready( function(){
                        $('#showModal').modal('show');
                        $('#linkBtn').attr('href', 'manage-category.php');
                        $('#linkBtn').text('Xem tất cả danh mục');
                        $('#addMsg').text('Đã chỉnh sửa danh mục thành công!');
                        $('#closeBtn').text('Chỉnh sửa lại');
                    })
                </script>
                ";
                }
            }
        }
    }
?>


<div class="login-form-bg h-100">
        <div class="container mt-5 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h4 class="text-center pb-3">Chỉnh sửa danh mục bài đăng</h4>
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                            
                                <div class="form-group">
                                    <label >Tên danh mục:</label>
                                    <input type="text" class="form-control" value="<?php echo $category; ?>"  name="cat_name" >
                                    <?php echo $category_error; ?>
                                </div>
                                <button type="submit" class=" btn btn-primary btn-block">Thêm</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
require_once "include/footer.php";
?>