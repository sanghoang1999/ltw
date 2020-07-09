




<?php
		session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: ../login.php");
		exit;
	}
	
	//Check if the user is admin, if not then redirect to homepage
	function isAdmin() {
		if ( isset( $_SESSION['username'] ) && ($_SESSION['user_level'] == '1') ) {
			return true;
		} else {
			return false;
		}
	}
	
	if (!isAdmin()) {
		header("location: ../index.php");
	}




    include('controller/c_product.php');
    $c_product= new C_product();
    $products=$c_product->getAllProduct();

		unset ( $_SESSION['success']);
    
    $id = $_GET['id'];
    $c_product=new C_product();
    $product = $c_product->getProductById($id);
    if(isset($_POST['submit'])) {
				$name=$_POST['name'];
				$price = $_POST['price'];
				$brand = $_POST['brand'];
				$category = $_POST['category'];
				$code = $_POST['code'];
				$image = $_FILES['img'];
				$result= $c_product->updateProduct($id,$name,$price,$brand,$category,$code,$image);
				if($result == true) {
					$_SESSION['success'] = "Bạn đã thêm sản phẩm thành công";
				}
			}
?>






<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>admin</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>


</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                            <!-- guest -->
                                <a class="navbar-brand" href='dashboard.php'>TiUh</a>
                            <ul class="user-menu">
                                <li class="dropdown pull-right">
                            
                            <!-- user -->
                            <ul class="user-menu">
                                <li class="dropdown pull-right">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" style='position: relative;font-size: 19px;	top: -13px;' class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo $_SESSION['username'] ?> <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item hover" style="color:black;display:block;text-align:center" href="../logout.php">
                                            Logout
                                        </a>
    
                                        <!-- <form id="logout-form" action="../login.php" method="POST" style="display: none;"> -->
                                        </form>
                                    </div>
                                </li>
                        </li>
                    </ul>
                                
            </div><!-- /.container-fluid -->
        </nav>
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li role="presentation" class="divider"></li>
        <li class=""><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
        <li class="active" ><a href="product.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
        <li class=""><a href="user.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Người dùng  </a></li>
        <li role="presentation" class="divider"></li>
    </ul>
</div><!--/.sidebar-->

 <style>
	 .fade{
		 opacity: 1;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
		transition: opacity .15s linear;
		background: #000000b0;
	 }
 </style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-sm-5">
				<div class="msgSuccess">
					<?php if (isset($_SESSION['success'])):?>
							<div class="alert alert-primary"  style="background:#30a5ff;color:white;" role="alert">
								<strong>Bạn đã thêm sản phẩm thành công</strong>
							</div>
					<?php endif?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sữa sản phẩm</div>
					<div class="panel-body">
					<form method="post" enctype="multipart/form-data" action="" >
							
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
									<input value = <?php echo $product->name ?> type="text" name="name" class="form-control" required >
										<!-- @if($errors->has('name'))
											<div class="alert alert-danger" style="margin-top:1rem">
													<h5 class="color:red">{{ $errors->first('name') }}</h5>
											</div>
										@endif -->
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input value= <?php echo $product->price ?> type="number" name="price" class="form-control" required>
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar"  class="thumbnail" width="300px" src='../<?php echo $product->image ?>' >
										 <!-- @if($errors->has('img'))
										 <div class="alert alert-danger style="margin-top:1rem>
												 <h5 class="color:red">{{ $errors->firsst('img') }}</h5>
										 </div>
									 	@endif -->
									</div>
									<div class="form-group" >
										<label>Thương hiệu</label>
										<input value= <?php echo $product->brand ?>    type="text" name="brand" class="form-control" required>
									</div>
									<div class="form-group" >
										<label>Danh Mục</label>
										<input value= <?php echo $product->category ?>   type="text" name="category" class="form-control"   required>
									</div>
									<div class="form-group" >
										<label>Mã code</label>
										<input  value= <?php echo $product->code ?>   type="text" name="code" class="form-control"  required>
									</div>
									<!-- <div class="form-group" >
										<label>Trạng thái</label>
										<select  name="status" class="form-control" required>
											<option   value="1" >Còn hàng</option>
											<option    value="0">Hết hàng</option>
					                    </select>
									</div> -->
									<!-- <div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor"  name="description" ></textarea>
										<script type="text/javascript">
                    language:'vi',
											var editor = CKEDITOR.replace('description',{
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>										
									</div> -->
									<!-- <div class="form-group" >
										<label>Danh mục</label>value
										<select  name="cate" class="form-control">
											@foreach ($cates as $cate)
												<option  value="{{ $cate->cate_id}}">{{ $cate->cate_name}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio"  name="featured"  value="1">
										Không: <input type="radio" checked name="featured"  value="0">
									</div> -->
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="/edit" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->


  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- <script>
    $('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM

    });
  </script> -->
		<script>
			$(document).ready(function() {
				setTimeout(function() {
					$('.msgSuccess').find('div').remove();
				},2000)
			})
		
		</script>
		<script>
	function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	
	
	</script>
  </script>
    </body>
    </html> 
