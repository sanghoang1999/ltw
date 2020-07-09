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
                                <a class="navbar-brand" href='#'>TiUh</a>
                            <ul class="user-menu">
                                <li class="dropdown pull-right">
                            
                            <!-- user -->
                            <ul class="user-menu">
                                <li class="dropdown pull-right">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" style='position: relative;font-size: 19px;	top: -13px;' class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo $_SESSION['username'] ?>  <span class="caret"></span>
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
                </div>
                                
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
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
							<a href="/web/admin/addproduct.php" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">	
											
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
                      <th>Thương hiệu </th>

                      <th> Danh mục </th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
								
									<tbody>
                    <?php $i = 1  ?>
                  <?php foreach ($products as $product):?>
                    <tr>
											<td> <?php echo $i++ ?> </td>
											<td><?php echo $product->name ?> </td>
											<td> <?php echo $product->price ?>  </td>
											<td>
												<img height="150px" src="../<?php echo $product->image?>" class="thumbnail">
											</td>
											<td><?php echo $product->brand?></td>
											<td><?php echo $product->category?></td>
											<td>
												<a href="/web/admin/editproduct.php?id=<?php echo $product->id?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<button class="btn btn-danger" data-id=<?php echo $product->id?> data-name= <?php echo $product->name?> id="btn-del"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
											</td>
										</tr>
                  <?php endforeach?>

									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<!-- Button trigger modal -->
		
		<!-- Modal -->
		<div class="modal fade" id="modelDel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" style="top:25%" role="document">
					<div class="modal-content">
						<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h5 class="modal-title" style="color:red;font-size: 2rem;">Xóa Sản Phẩm</h5>
						</div>
						<div class="modal-body">
							<h5 class="modal-title" style="color:#000000;font-size: 1.8rem;margin-bottom:3rem">Bạn có chắc muốn xóa</h5>
						 	<h4 id="prod_name" style="font-size:1.7rem"> </h4>
						</div>
						<div class="modal-footer " style="padding:1rem">
							<button type="button" class="btn btn-secondary"  data-dismiss="modal">Hủy</button>
							<button type="button" class="btn btn-primary" id="check_id" >Xóa</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Button trigger modal -->
		
		<!-- Modal -->
			<div class="modal fade" id="modelSuccess" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
					<div class="modal-dialog" style="top:30%;left:12.5%;text-align:center;" role="document">
						<div class="modal-content" style="width:50%;padding: 5rem 0;color: red;font-size: 2rem;">
							<div class="modal-body">
								Bạn đã xóa thành công
								<i class="fa fa-check" aria-hidden="true"></i>
							</div>
						</div>
					</div>
			</div>
  </div>	<!--/.main-->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM

    });
  </script>

  <script>
    $(document).ready(function() {
      var id;
      var current;
      $('tbody').on('click','#btn-del',function() {
        console.log('emvuidi')
      id=$(this).attr('data-id');
        console.log(id)
      current= $(this);
      console.log(current)
      $('#prod_name').html($(this).attr('data-name'));
      $('#modelDel').modal('show');

      $('#check_id').click(function() {
      	console.log("cc");
      	$.ajax({
      		type:"post",
      		data: {
						id:id
					},
      		url:"controller/function/delete_product.php",
      		success:function(data) {
      			console.log("dddd");
            console.log(data)
      			$(`button[data-id=`+id +`]`).parent().parent().remove();
      			$('#modelDel').modal('hide');
      			$('#modelSuccess').modal('show');
      			setTimeout(() => {
      				$('#modelSuccess').modal('hide');
      			}, 1000);
      		}
      	});
      });//het delete $('button[data-id="' +id +'"]')
      })
    })




  </script>




    <script>
           	$('#calendar').datepicker({
		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);
		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		});
       
    </script>	
    </body>
    </html> 