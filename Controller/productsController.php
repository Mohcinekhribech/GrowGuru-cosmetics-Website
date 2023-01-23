<?php
require_once './Model/productModel.php';
class productController  {
    private $post;
    
    // Ajouter un produit
    function Add(){
        
        if($_POST['submit']){
            foreach ($_POST['productName'] as $key => $name) {
                    $data[$key]['productName'] = $name;
                    $data[$key]['productPrice'] = $_POST['productPrice'][$key];
                }
                foreach ($_FILES['productPic']['tmp_name'] as $key => $image) {
                    $data[$key]['productPic'] = file_get_contents($image);
                }
            $Model = new productModel;
            $Model->insert($data);
        }else{
            die('error');
        }
    }

    //Supprimer un produits
    function delete(){
        if($_GET['id']){
            $Model = new productModel;
            $Model->delete($_GET['id']);
        }
        
    }

    //get un produits ou plusieurs produits
    function getProducts(){
        $Model = new productModel;
        if(isset($_GET['id'])){
            return $Model->getProduct($_GET['id']);
        }else{
            return $Model->getAllProduct();
        }
    }
    
    //mise a jour un produit
    function update(){
        if(isset($_POST['update'])){
            if(isset($_FILES['productPic'])&&$_FILES['productPic']['error']===0){
            $bool = true;
        }else{
            $bool = false;
        }
        $this->post=[
            'productPic'=> $bool?file_get_contents($_FILES['productPic']['tmp_name']):'',
            'productName'=>$_POST['productName'],
            'productPrice'=>$_POST['productPrice']
        ];
        $Model = new productModel;
        $Model->update($_GET['id'], $this->post,$bool);
        }else {
            die('error');
        }
        
    }

}