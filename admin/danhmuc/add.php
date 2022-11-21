<div class="row">
        <div class="row header">
            <h1>Thêm Mới Loại Hàng</h1>
        </div>
        <div class="row formconten">
            <form action="index.php?act=adddm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai"  >
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập lại">

                    <a href="index.php?act=lisdm"><input type="button" value="Danh sach"></a>
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>

    </div>