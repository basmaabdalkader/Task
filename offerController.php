<?php
require_once("dbcontroller.php");

class offerController {
    function __construct($db_handle,$cart) {
        $this->cart = $cart;
        $this->db_handle = $db_handle;
      }

      function get_cart() {
        return $this->cart;
      }

      function calculate_discounts(){
          $discounts =  $this->db_handle->runQuery("SELECT * FROM discounts");
          
          $discounts_array = array();
          //var_dump($discounts);
          foreach ($this->cart as $cartItem){
              $discount = $this->db_handle->runQuery("SELECT * FROM discounts WHERE code='" . $cartItem["code"] . "'");

              if($discount){
                $item_discount = $cartItem["quantity"]* $cartItem["price"]* $discount[0]["percentage"]*0.01;
                //var_dump($item_discount);
                array_push($discounts_array,[$cartItem["name"],$item_discount,$discount[0]["percentage"]]);
                //print_r($discounts_array); 

              }

      }
      return $discounts_array;
      //var_dump($discounts_array);
    }

    function calculate_offers(){
        foreach($this->cart as $cartItem){
            $tshirt_count = 0;
            $jacket_count = 0;
            if($cartItem["name"] == "T-shirt"){
                $tshirt_count ++;
            }
            if($cartItem["name"]== "Jacket"){
                $jacket_count ++;
            }
        }
    }

     
}

for(int i=0;i<cart.length;i++){
    int tshirtCount = 0;
    int jacketCount = 0;
    if(cart[i].name=="t-shirt"){
        tshirtCount++;
    }
    if(cart[i].name == "jacket"){
        jacketCount ++;
    }
}
    
    while(count1!=0)
    if(count1>2 && count2>1){
        $discounts =  $this->db_handle->runQuery("SELECT * FROM discounts");
    }






