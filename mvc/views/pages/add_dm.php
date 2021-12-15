<form action="../mvctest/add_dm/insert" method="POST">
    <h2>Register</h2> <br>
    <input type="text" name="ten_dm">
    <input type="submit" name="add">
</form>
     <?php 
        if(isset($data["resurt"])){
          if($data['resurt'] == "true"){
            echo "<script type='text/javascript'>alert('Thanh cong ! ');</script>";
          }else{
            echo "<script type='text/javascript'>alert('That bai !');</script>";
          }   
        }     
    ?>