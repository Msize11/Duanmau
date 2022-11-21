<?php 
function insert_taikhoan($email,$user,$pass){
    $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."' ";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$address,$tel,$pass){
    
    $sql="update taikhoan set user='".$user."',email='".$email."',address='".$address."',tel='".$tel."',pass='".$pass."' where id=".$id;
        pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan(){
    $sql="delete from taikhoan where id=".$_GET['id'];
    pdo_execute($sql);
}

?>