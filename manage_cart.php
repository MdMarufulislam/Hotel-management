<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_REQUEST['cart']))
        {
            $myitems=array_column($_REQUEST['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))   //in_arr is used to search specific value in array
            {
                     echo "<script>
                     alert('Item Already Added');
                     window.location.href='food.php';
                     </script>";
            }
            else
            {
                $count= count($_REQUEST['cart']);
                $_REQUEST['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
                echo "<script>
                 alert('Item  Added');
                 window.location.href='food.php';
                 </script>";
            }


          
          
        }
        else
        {
            $_REQUEST['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
            echo "<script>
            alert('Item  Added');
            window.location.href='food.php';
            </script>";
            
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_REQUEST['cart'] as $key => $value)
        {
           
            if($value['item_name']==$_POST['item_name'])
            {
                unset($_REQUEST['cart'][$key]);
                $_REQUEST['cart']=array_values($_REQUEST['cart']);
                echo "<script>
                alert('Item  Removed');
                window.location.href='cart.php';
                </script>";
            } 
        }
    }
    if(isset($_POST['mod_quantity']))
    {
        foreach($_REQUEST['cart'] as $key => $value)
        {
           
            if($value['item_name']==$_POST['item_name'])
            {
                $_REQUEST['cart'][$key]['quantity']=$_POST['mod_quantity'];
                
                echo "<script>
               
                window.location.href='cart.php';
                </script>";
            } 
        }
    }
}
?>