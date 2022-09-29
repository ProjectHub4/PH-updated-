<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="design1.css">
</head>
<body>
   <h1 style="color: white;">
      Progress Report
   </h1>
   <center>
   <table border="1" cellspacing="5" bgcolor="white">
      <caption style="color:white;"><b>Enter Marks</b></caption>
      <tr style="background: silver;">
         <td rowspan="2">Name</td>
         <td colspan="4">Marks</td>
      </tr>
      <tr style="background: silver;">
         <td>Mid I Evaluation</td>
		 <td>Final I Evaluation</td>
         <td>Mid II Evaluation</td>
         
         <td>Final II Evaluation</td>
      </tr>
      <tr>
         <td><input type="text" id="name"></td>
         <td><input type="text" id="mid1"></td>
         <td><input type="text" id="mid2"></td>
         <td><input type="text" id="final1"></td>
         <td><input type="text" id="final2"></td>
      </tr>
      <tr>
         <td colspan="5" height="30">
         <input type="submit" value="Calculate" onclick="Sub()"></th>
      </tr>
   </table>
   <br>
   <table border="1" cellspacing="5" bgcolor="white"
      height="100" width="500" cellpadding="5" id="TableScore">
      <caption style="color:white;"> <b>Student Data</b></caption>
      <tr>
         <td width="180">Name</td>
         <td>Total</td>
         <td>Average</td>
         <td>Pass Or Fail</td>
      </tr>
   </table>
</center>
<script type="text/javascript">
   function Sub(){
      var n, k, r, e, v, sum, avg;
      n=(document.getElementById('name').value);
      mid1=parseFloat(document.getElementById('mid1').value);
      mid2=parseFloat(document.getElementById('mid2').value);
      final1=parseFloat(document.getElementById('final1').value);
      final2=parseFloat(document.getElementById('final2').value);
      // Calculating the Total Marks
      sum=mid1+mid2+final1+final2;
      avg=sum/4;
      // Displaying the Student Data
      var newTable = document.getElementById('TableScore');
      var row = newTable.insertRow(-1);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(0);
      var cell4 = row.insertCell(0);
      cell4.innerHTML= n;
      cell3.innerHTML=sum;
      cell2.innerHTML = avg;
      if(avg>=40){
         cell1.innerHTML="<font color=green>Pass</font>";
      } else {
         cell1.innerHTML="<font color=red>Fail</font>";
      }
   }
</script>
</body>
</html>