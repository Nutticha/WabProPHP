<!DOCTYPE HTML>
<html>  
    <head>
        <style>
            h1 {
                font-size: 20 px;
               
            }

        </style>
       
    </head>
<body>
    <center>
        <h1> HW4 : Cal Grade Period Average (GPA) </h1>

        <form action="HW4.php" method="post">
        <p>
            Name subject 1 : <input type="text" name="name1">
            Unit :<select name="num1" id="" onchange="">
            <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            <!-- เนื่องจากต้องใช้คะแนนเกรด ดังนั้นเราจึงไม่สามารถให้ value = g1 ได้ นะค่ะ
                ต้องใช้เป็นคะแนนเกรดเท่านั้นคะ
          -->
            Grade : <select name="grade" id="" onchange="">
                <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>
        </p>
        <p>
            Name subject 2 : <input type="text" name="name2">
            Unit :<select name="num2" id="" onchange="">
            <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            Grade : <select name="grade1" id="" onchange="">
            <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>

        <p>
            Name subject 3 : <input type="text" name="name3">
            Unit :<select name="num3" id="" onchange="">
            <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            Grade : <select name="grade2" id="" onchange="">
            <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>
        </p>
        <p>
            Name subject 4 : <input type="text" name="name4">
            Unit :<select name="num4" id="" onchange="">
            <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            Grade : <select name="grade3" id="" onchange="">
            <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>
        </p>
        <p>
            Name subject 5 : <input type="text" name="name5">
            Unit :<select name="num5" id="" onchange="">
              <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            Grade : <select name="grade4" id="" onchange="">
            <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>
            
                
        </p>
            <input type="submit">
        </form>
    </center>
     

</body>
</html>