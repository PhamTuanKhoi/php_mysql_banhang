<?php
// if(isset($_COOKIE['login'])){
//     echo($_COOKIE['login']);
// }
    // if(isset($data["sigin"])){
    //     header('location:http://localhost/apple/Home/Sanpham');
    // }
    // else{
    //   echo "<script type='text/javascript'>alert('Đăng nhập thất bại !');</script>";
    // }   
    
    if(isset($data["sigin"])){
    if($data["sigin"]<=0){
        echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không chính xác !');</script>";
    }else{
        header('location:http://localhost/apple/Home/Sanpham');
    }
}
     
?>

<form  method="POST" enctype="multipart/form-data">
    <div class="dn">ĐĂNG NHẬP TÀI KHOẢN</div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Tài khoản của bạn" name="username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" class="input100" type="password" placeholder="Mật khẩu"
                                name="password">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>

                        <!--=====ĐĂNG NHẬP======-->
                        <div class="container-login100-form-btn">
                            <input name="submit" type="submit" value="Đăng nhập" />
                        </div>
                        <!--=====LINK TÌM MẬT KHẨU======-->
                        <div class="text-right p-t-12">
                            <a class="txt2" href="/forgot.html">
                               dangky
                            </a>
                        </div>
                        <div class="text-right p-t-12">
                            <a class="txt2" href="/forgot.html">
                                Bạn quên mật khẩu?
                            </a>
                        </div>
                    </form>

<style> 
.dn{
    font-weight: bold;
    font-size: 23px;
    margin-bottom: 50px;
}
</style>