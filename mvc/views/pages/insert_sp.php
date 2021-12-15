<link rel="stylesheet" type="text/css" href="css/themsp.css" />
<h2 style="background-color: rgb(20, 97, 197);color: white;border: 3px solid rgb(20, 97, 197);">Thêm mới sản phẩm</h2>
<div id="main">
	<form method="post" enctype="multipart/form-data">
	<table id="add-prd" border="0" cellpadding="0" cellspacing="0">
    	<tr>
        	<td><label>Tên sản phẩm</label><br /><input type="text" name="ten_sp" /><?php if(isset($error_ten_sp)){echo $error_ten_sp;}?></td>
        </tr>
        <tr>
        	<td><label>Ảnh mô tả</label><br /><input type="file" name="anh_sp" /><?php if(isset($error_anh_sp)){echo $error_anh_sp;}?></td>
        </tr>
        <tr>
        	<td><label>Nhà cung cấp</label><br />
            	<select name="id_dm">
                	<option value="unselect" selected="selected">Lựa chọn nhà cung cấp</option>
                    <?php
                         foreach($data['danhmuc'] as $row){
                    ?>
                        <option value=<?php echo $row["id_dm"]?>><?php echo $row["ten_dm"]?></option>
                    <?php
                         }
                    ?>
                </select>
                <?php if(isset($error_id_dm)){echo $error_id_dm;}?>
            </td>
        </tr>
        <tr>
        	<td><label>Giá sản phẩm</label><br /><input value="11502000" type="text" name="gia_sp" /> VNĐ <?php if(isset($error_gia_sp)){echo $error_gia_sp;}?></td>
        </tr>
        <tr>
        	<td><label>Bảo hành</label><br /><input type="text" name="bao_hanh" value="12 Tháng" /><?php if(isset($error_bao_hanh)){echo $error_bao_hanh;}?></td>
        </tr>
        <tr>
        	<td><label>Đi kèm</label><br /><input type="text" name="phu_kien" value="Hộp, sách, sạc, cáp, tai nghe" /><?php if(isset($error_phu_kien)){echo $error_phu_kien;}?></td>
        </tr>
        <tr>
        	<td><label>Tình trạng</label><br /><input type="text" name="tinh_trang" value="Máy Mới 100%" /><?php if(isset($error_tinh_trang)){echo $error_tinh_trang;}?></td>
        </tr>
        <tr>
        	<td><label>Khuyến mại</label><br /><input type="text" name="khuyen_mai" value="Dán Màn Hình 3 lớp" /><?php if(isset($error_khuyen_mai)){echo $error_khuyen_mai;}?></td>
        </tr>
        <tr>
        	<td><label>Còn hàng</label><br /><input type="text" name="trang_thai" value="Còn hàng" /><?php if(isset($error_trang_thai)){echo $error_trang_thai;}?></td>
        </tr>
        <tr>
        	<td><label>Sản phẩm đặc biệt</label><br />Có <input type="radio" name="dac_biet" value=1 /> Không <input checked="checked" type="radio" name="dac_biet" value=0 /></td>
        </tr>
        <tr>
        	<td><label>Thông tin chi tiết sản phẩm</label><br /><textarea cols="60" rows="12" name="chi_tiet_sp"></textarea><?php if(isset($error_chi_tiet_sp)){echo $error_chi_tiet_sp;}?>
             
            <script type="text/javascript">

            CKEDITOR.replace("chi_tiet_sp");
        
           </script>

            </td>
        </tr>
        <tr>
        	<td><input type="submit" name="submit" value="Thêm mới" /> <input type="reset" name="reset" value="Làm mới" /></td>
        </tr>
    </table>
    </form>
</div>
