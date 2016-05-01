<?php
    $link = mysqli_connect("localhost", "root", "ar3360","test") or die('Could not connect');
    $result = mysqli_query($link,'SELECT * FROM counter ORDER BY seq DESC limit 20');
    echo "<table border='1'>
    <tr>
    <th>주문번호</th>
    <th>메뉴</th>
    <th>사이즈</th>
    <th>수량</th>
    <th>가격</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['seq'] . "</td>";
      echo "<td>" . $row['Menu'] . "</td>";
      echo "<td>" . $row['Size'] . "</td>";      
      echo "<td>" . $row['Amount'] . "</td>";
      echo "<td>" . $row['Price'] . "</td>";
    }
?>
