<?php
/**
 * Created by PhpStorm.
 * User: Ku-to
 * Date: 1/27/2015
 * Time: 12:11 PM
 */
class Product extends CI_Controller
{
        public function __contruct(){
            parent::__construct();
        }
        public function index (){
                echo "Product Index";
        }
        public function add_product (){
            echo "Product Added";
        }
        public function edit_product (){
            echo "Product Edited";
        }
        public function del_product (){
            echo "Product Deleted";
        }

}