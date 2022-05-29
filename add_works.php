 <h1>input works</h1>
 <form action="check_add_works.php" method="post">
    <a>work's name</a>
    <br>
 <textarea name="work_names" rows="4" cols="50" required></textarea>
 <br>
 <br>








    <a>work's type</a>
    <br>
    <br>
    <select name="worktype">
    <option selected disabled value="">work's type</option>
  <option value="worksheet">Worksheet</option>
  <option value="notebook">notebook</option>
  <option value="project">Project</option>
  <option value="readbooks">Read Books</option>
  <option value="books">book exercize</option>
</select>
<br>
<a>scout or not</a>
<br>
<br>
    <select name="scout_or_not">
    <option selected disabled value="">scout or not</option>
  <option value="yes">yes</option>
  <option value="no">no</option>

</select>
<br>
<br>
<a>subject</a><br>
<select name="subject">
<option selected disabled value="">subject</option>
  <option value="MathIE">Mathmatics IE</option>
  <option value="SciIE">Sci IE</option>
  <option value="SocialIE">Social IE</option>
  <option value="การงาน">การงาน</option>
  <option value="คณิต">คณิต</option>
  <option value="คอม">คอม</option>
  <option value="ดนตรี">ดนตรี</option>
  <option value="ดนตรีไทย">ดนตรีไทย</option>
  <option value="ทัศนศิลป์">ทัศนศิลป์</option>
  <option value="ประวัติ">ประวัติ</option>
  <option value="พละ">พละ</option>
  <option value="จีน">จีน</option>
  <option value="อังกฤษ">อังกฤษ</option>
  <option value="ไทย">ไทย</option>
  <option value="ลูกเสือ">ลูกเสือ</option>
  <option value="วิทย์">วิทย์</option>
  <option value="สังคม">สังคม</option>
  <option value="สุขะ">สุขะ</option>
  <option value="แนะแนว">แนะแนว</option>
  </select>
  <br>
  <br>
  <a>status</a>
  <br>
  <select name="status">
  <option value="finish">finish</option>
  <option value="not_yet">not yet</option>
</select>
<input type="submit" value="let's go">


 </form>