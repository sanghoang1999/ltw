<?php
    include('model/product.php');

    class C_product {
        public function getAllProduct() {
            $m_product= new M_product();
            $products= $m_product->getAllProduct();
            return $products;
        }
        public function deleteProduct($id) {
            $m_product = new M_product();
            $result = $m_product->deleteProduct($id);
            return $result;
        }
        public function addProduct($name,$price,$brand,$cate,$code,$image) {
            $target_dir = "img/";
            $file_name = time().'.'.basename($image['name']);
            $target_file = $target_dir.basename($image["name"]);
            //$target_file = time().'.'.$target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
                $check = getimagesize($image["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
                

                if ($image["size"] > 500000) {
                    $uploadOk = 0;
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    return -1;
                } else {
                if (move_uploaded_file($image["tmp_name"], __DIR__.'/../../'.$target_file)) {
                    $m_product = new M_product();
                     $result= $m_product->addProduct($name,$price,$brand,$cate,$target_file,$code); 
                    return true;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                }
        } //end function
        public function updateProduct($id,$name,$price,$brand,$cate,$code,$image) {
            if(strlen($image['name'])==0) {
                $m_product = new M_product();
                $result= $m_product->updateProduct($id,$name,$price,$brand,$cate,'',$code);
                return true; 
            }
            else {
            $target_dir = "img/";
            $file_name = time().'.'.basename($image['name']);
            $target_file = $target_dir.basename($image["name"]);
            //$target_file = time().'.'.$target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
                $check = getimagesize($image["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
                

                if ($image["size"] > 500000) {
                $uploadOk = 0;
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    return -1;
                } else {
                if (move_uploaded_file($image["tmp_name"], __DIR__.'/../../'.$target_file)) {
                    $m_product = new M_product();
                     $result= $m_product->updateProduct($id,$name,$price,$brand,$cate,$target_file,$code);
                     print_r($result);
                     die(); 
                    return true;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                }

            }
        } //end function
        public function getProductById($id) {
            $m_product = new M_product();
            return $m_product->getProductById($id);
        }
        public function tintuc($id)
        {
            $m_tintuc=new M_tintuc();
            $menus=$m_tintuc->getMenu();    
            $news=$m_tintuc->getNewsById($id);
            $trang_hientai=isset($_GET['page']) ?$_GET['page'] :1;
            $pagination = new pagination2(count($news),$trang_hientai,6,5);
            $paginationHTML=$pagination->showPagination();
            $limit=$pagination->get_itemOnePage();
            $vitri=($trang_hientai-1)*$limit;
            $news=$m_tintuc->getNewsById($id,$vitri,$limit);
            $type=$m_tintuc->getTypeNewsById($id);
            return array('menus'=>$menus,'news'=>$news,'type'=>$type,'thanh_phantrang'=>$paginationHTML);
        }
        public function ChiTietTin() {
            $id_tin=$_GET['id_chitiet'];
            $m_tintuc= new M_tintuc();
            $new_chitiet=$m_tintuc->getChiTietTinById($id_tin);
            $comments=$m_tintuc->getCommentById($id_tin);
            $relatedNews=$m_tintuc->getRelatedNews($id_tin);
            $hlNews=$m_tintuc->getHlNews($id_tin);
            return array('chitiet'=>$new_chitiet,'comments'=>$comments,'relatedNews'=>$relatedNews,'hlNews'=>$hlNews);
        }
        public function addComment($id_user,$id_tin,$noidung) {
            $m_tintuc=new M_tintuc();
            return $m_tintuc->addComment($id_user,$id_tin,$noidung);
        }
    }
?>