<!DOCTYPE html>
<html>
  <head>
    <title>레스토랑 예약하기</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $name = $_POST["u_name"];
      $phone = $_POST["u_tel"];
      $number = $_POST["people_num"];
      $date = $_POST["u_date"];
      $time = $_POST["u_time"];
      $menu = $_POST["u_menu"];
      $memo = $_GET["memo"];

      echo "<p>예약이 완료 되었습니다.</p>";
      echo "<br><span>예약자: ".$name;
      echo "<br><span>연락처: ".$phone;
      echo "<br><span>예약인원: ".$number;
      echo "<br><span>예약날짜: ".$date;
      echo "<br><span>예약시간: ".$time;
      echo "<br><span>메뉴: ".$menu;
      echo "<br><span>요청사항: ".$memo;
    ?>
  </body>
</html>