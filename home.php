 <?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_works ";
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
               
                echo "<td><a href='add_works.php' class='btn btn-warning btn-xs'>add works</a>";
                echo "<td><a href='logout.php' class='btn btn-warning btn-xs'>logout</a>";
                              
             
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td>id</td>
                      <td>work_names</td>
                      <td>type_works</td>
                      <td>scout_or_not</td>
                      <td>subject</td>
                      
                                    
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["id"] .  "</td> ";
                    echo "<td>" .$row["work_names"] .  "</td> ";
                    echo "<td>" .$row["type_works"] .  "</td> ";
                    echo "<td>" .$row["scout_or_not"] .  "</td> ";
                    echo "<td>" .$row["subject"] .  "</td> ";
                    echo "<td><a href='edit_finish.php?ID=$row[0]' class='btn btn-warning btn-xs'>edit_status</a>";
                    echo "<td>" .$row["status"] .  "</td> ";
                    echo "<td><a href='del.php?ID=$row[0]' class='btn btn-warning btn-xs'>delete</a>";
                   

                    
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>