<div class="row mb">
    <div class="boxtrai mr ">
    <div class="row mb">
        <div class="boxtitle"> Sản Phẩm </div>
        <div class="row boxconten">
            <?php 
            foreach($dssp as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                //  if(($i==2)||($i==5)||($i==8)||($i==11)){
                //      $mr="";
                //  }else{
                //      $mr="mr";
                //  }
                echo '<div class="boxsp">
                    <a href="'.$linksp.'"><img src="'.$hinh.' " width="100% " height="300px"/></a>
                    <p>'.$price.'$</p>
                    <div class="spct"><a href="'.$linksp.'">'.$name.'</a></div>   
                    </div>';
            }
            
?>
        </div>
    </div>
   
   


       
    </div>
    <div class="boxphai">
        <?php include "boxright.php"?>
    </div>


</div>
