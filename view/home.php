<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row">
            <div class="banner">
            <section class="slider">
                <article class="slides">

                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    



                    <article class="slide first">
                        <img src="./view/img_TC/baner1.png" alt="">
                    </article>
                    <article class="slide">
                        <img src="./view/img_TC/baner2.jpg" alt="">
                    </article>
                    <article class="slide">
                        <img src="./view/img_TC/baner3.jpg" alt="">
                    </article>
                    

                    <article class="navigation-auto">
                        <article class="auto-btn1"></article>
                        <article class="auto-btn2"></article>
                        <article class="auto-btn3"></article>
                        
                    </article>

                </article>

                <article class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    

                </article>

            </section>
            </div>
        </div>
        <div class="row">
           
        <?php
        if(isset($_GET['iddm'])) {

            $arr = loadds_sanpham('adas',$_GET['iddm']);
        }
        else {
            $arr = load_all_sanpham();

        }
        for ($i=0; $i < count($arr); $i++) { 
            $linksp="index.php?act=sanphamct&idsp=". $arr[$i][0];
             echo '<div class="boxsp">
                 <a href="'.$linksp.'"><img src="upload/'.$arr[$i][3] . '" width="95% " height="300px"/></a>
                 <p>'. $arr[$i][2] .'$</p>
                 <div class="spct"><a href="'.$linksp.'">'. $arr[$i][1].'</a></div>
                 
                 </div>';
                 
        }
        // foreach($spnew as $sp) {
        //     extract($sp);
        //     $linksp="index.php?act=sanphamct&idsp=".$id;
        //     $hinh=$img_path.$img;
        //     // if(($i==2)||($i==5)||($i==8)){
        //     //     $mr="";
        //     // }else{
        //     //     $mr="mr";
        //     // }
        //     echo '<div class="boxsp">
        //         <a href="'.$linksp.'"><img src="'.$hinh.' " width="100% " height="300px"/></a>
        //         <p>'.$price.'$</p>
        //         <div class="spct"><a href="'.$linksp.'">'.$name.'</a></div>   
        //         </div>';
            
        // }
        ?>
        
            <!-- <div class="boxsp">
                <img src="view/img_TC/sp04.jpg" width="100% " height="200px"/>
                    <p>1000</p>
                    <a href="#">dong ho</a>   
            </div>

            <div class="boxsp">
                <img src="view/img_TC/sp04.jpg" width="100% " height="200px"/>
                    <p>1000</p>
                    <a href="#">dong ho</a>   
            </div>

            <div class="boxsp">
                <img src="view/img_TC/sp04.jpg" width="100% " height="200px"/>
                    <p>1000</p>
                    <a href="#">dong ho</a>   
            </div>
            <div class="boxsp">
                <img src="view/img_TC/sp04.jpg" width="100% " height="200px"/>
                    <p>1000</p>
                    <a href="#">dong ho</a>   
            </div>
            <div class="boxsp">
                <img src="view/img_TC/sp04.jpg" width="100% " height="200px"/>
                    <p>1000</p>
                    <a href="#">dong ho</a>   
            </div> -->
          

    </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>



</div>
