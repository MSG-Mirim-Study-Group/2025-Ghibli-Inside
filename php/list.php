
<style>
table {
    width:300px;
}
table, tr, td {border:1px solid gray;}
</style>    

<table>
    <tr><td>번호</td><td>nickName</td></tr>
<?php
$conn=mysqli_connect('localhost','root','111111','msg_itshow');

$sql="select * from msg_itshow order by id desc";

$result=mysqli_query($conn,$sql); //테이블 모양 그대로 $result에 들어감
$num=mysqli_num_rows($result); //데이터 갯수 구하기

for($i=0;$i<$num;$i++) {
    $re=mysqli_fetch_row($result);  //한 줄씩 가져오기
    echo "<tr><td>$re[0]</td><td>$re[1]</td></tr>";
}
mysqli_close($conn);
?>
</table>
