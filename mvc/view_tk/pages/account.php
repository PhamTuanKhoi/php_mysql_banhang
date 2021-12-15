<?php
// foreach($data['check'] as $value){
//       print_r($value);
// }
echo '<pre>';
print_r($data['cart']);
?>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/account.css">

<div class="container"> 
 <!-- <h1 class="text-center">Cách tạo Collapsible Panel</h1>  -->
 <div class="container"> 
  <div class="row profile">        
   <div class="col-md-3">          
    <div class="profile-sidebar">                          
     <div class="profile-userpic">   
           <img src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg" class="img-responsive" alt="Thông tin cá nhân">               
     </div>                                            
     <div class="profile-usertitle">                   
      <div class="profile-usertitle-name">HocwebGiar</div>                  
      <div class="profile-usertitle-job">eb Develo</div>              
     </div>                                                
     <div class="profile-userbuttons">                 
      <button type="button" class="btn btn-success btn-sm">Trang chủ</button>                  
      <button type="button" class="btn btn-danger btn-sm">Thoát ra</button>                
     </div>                                            
     <div class="profile-usermenu">                    
      <ul class="nav"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial"></div>
       <li class="active"><a href=""><i class="glyphicon glyphicon-info-sign"></i>Cập nhật thông tin cá nhân </a>                     
       </li>                       
       <li>                           
            <a href=""><i class="glyphicon glyphicon-heart"></i>Sản phẩm yêu thích </a>                     
       </li>                       
       <li>                         
              <a href="" target="_blank"><i class="glyphicon glyphicon-shopping-cart"></i>Quản lý đơn hàng </a>                       
       </li>                       
       <li>                          
             <a href=""><i class="glyphicon glyphicon-envelope"></i>Tin nhắn </a>                       
       </li>                   
      </ul>                
     </div>                            
    </div>     
   </div>      
   <div class="col-md-9"> 
    <div class="profile-content">          
           SELECT Donhang.cty, Khachhang.ten, Donhang.thoi_gian FROM Donhang INNER JOIN Khachhang ON Donhang.id_kh = Khachhang.id_kh WHERE khachhang.id_kh = 12
    </div>     
   </div>  
  </div>
 </div> 
</div>


