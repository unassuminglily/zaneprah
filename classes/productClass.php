<?php

require_once('../database/connection.php');

// inherit the methods from Connection
class product extends Connection{


	function add_product( $product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords){
		// return true or false
		return $this->query("INSERT into products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values('$product_category', '$product_brand', '$product_name', '$product_price', '$product_description', '$product_img', '$product_keywords')");
	}

	function delete_one_product($id){
		// return true or false
		// $this->query("DELETE FROM cart where product_id = '$id'");
		// $this->query("DELETE from orders where product_id = '$id'");
		// $this->query("DELETE FROM product where product_id = '$id'");
		return $this->query("delete from products where product_id = '$id'");
		
	}

	function update_one_product($id, $product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords  ){
		// return true or false
		return $this->query("UPDATE products 
							set product_cat = '$product_category', product_brand = '$product_brand', product_title='$product_name', product_price='$product_price', product_desc='$product_description',  product_image = '$product_img', product_keywords = '$product_keywords' 
							where product_id = '$id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("SELECT product_id, product_title, product_price, product_desc, product_cat, product_image, product_keywords FROM products");
	}

    function count_products(){
		return $this->fetch("SELECT COUNT (*) FROM products");

    }

	function subscribe($email){
		return $this->query("INSERT INTO mailinglist(email) value ('$email')");
	}

	function get_product($product_id){
		return $this->fetchOne("SELECT * FROM products where product_id = '$product_id'");
	}

    //Category

    function add_category($categoryname){
        //returns true or false
        return $this->query("INSERT into categories(cat_name) values('$categoryname')");
    }

    function select_all_categories(){
        //returns true or false
        return $this->fetch("select * from categories");
    }


    function select_one_category($id){
        //returns true or false
        return $this->fetchOne("select * from categories where cat_id = '$id'");
    }

    function update_one_category($id, $categoryname){
        // return true or false
        return $this->query("update categories set cat_name='$categoryname' where cat_id = '$id'");
    
    }

    function delete_one_category($id){
		// return true or false
		// $this->query("DELETE FROM cart where cat_id = '$id'");
		// $this->query("DELETE from orders where cat_id = '$id'");
		$this->query("DELETE FROM product where product_cat = '$id'");
		return $this->query("delete from category where cat_id = '$id'");
		
	}

    //add brand
    function add_product_brand($brandname){
        //returns true or false
        return $this->query("INSERT into brands(brand_name) values('$brandname')");
    }

    function select_all_brands(){
        //returns true or false
        return $this->fetch("select * from brands");
    }

    function update_one_brand($id, $brandname){
        // return true or false
        return $this->query("update brands set brand_name='$brandname' where brand_id = '$id'");

    }

    function select_one_brand($id){
        //returns true or false
        return $this->fetchOne("select * from brands where brand_id = '$id'");
    }

}

?>