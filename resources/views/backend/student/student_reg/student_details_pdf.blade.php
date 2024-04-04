<!DOCTYPE html>
<html>

  <head>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
  </head>

  <body>




    <table id="customers">
      <tr>
        <td>
          <h2> Esay Learning</h2>
        </td>
        <td>Esay School ERP

          <p>School: Address</p>
          <p>Phone: +21299999999</p>
          <p>Email : admin@gmail.com </p>
        </td>
      </tr>



    </table>

    <table id="customers">
      <tr>
        <th width="10%">SL</th>
        <th width="45%">Student Details</th>
        <th width="45%">Student Data</th>
      </tr>



      <tr>
        <td>1</td>
        <td><b>Student ID No</b></td>
        <td>{{ $details['student']['id_no'] }}</td>
      </tr>

      <tr>
        <td>2</td>
        <td><b>Student Role</b></td>
        <td>{{ $details->role }}</td>
      </tr>
      <tr>
        <td>3</td>
        <td><b>Student Father's Name</b></td>
        <td>{{ $details['student']['name'] }}</td>
      </tr>

      <tr>
        <td>4</td>
        <td><b>Student Name</b></td>
        <td>{{ $details['student']['fname'] }}</td>
      </tr>


      <tr>
        <td>5</td>
        <td><b>Student Mother's Name</b></td>
        <td>{{ $details['student']['mname'] }}</td>
      </tr>


      <tr>
        <td>6</td>
        <td><b>Student Mobile</b></td>
        <td>{{ $details['student']['mobile'] }}</td>
      </tr>


      <tr>
        <td>7</td>
        <td><b>Student Address</b></td>
        <td>{{ $details['student']['address'] }}</td>
      </tr>

      <tr>
        <td>8</td>
        <td><b>Student Gender</b></td>
        <td>{{ $details['student']['gender'] }}</td>
      </tr>
      <tr>
        <td>9</td>
        <td><b>Student Religion</b></td>
        <td>{{ $details['student']['religion'] }}</td>
      </tr>
      <tr>
        <td>10</td>
        <td><b>Student Date Of Birth</b></td>
        <td>{{ $details['student']['dob'] }}</td>
      </tr>


      <tr>
        <td>11</td>
        <td><b>Discount</b></td>
        <td>{{ $details['discount']['discount'] }} %</td>
      </tr>

      <tr>
        <td>12</td>
        <td><b>Year</b></td>
        <td>{{ $details['student_year']['name'] }}</td>
      </tr>

      <tr>
        <td>13</td>
        <td><b>Class</b></td>
        <td>{{ $details['group']['name'] }}</td>
      </tr>


      <tr>
        <td>14</td>
        <td><b>Group</b></td>
        <td>{{ $details['shift']['name'] }}</td>
      </tr>





    </table>
    <br> <br>
    <i style="font-size: 10px; float:right;">Print Data: {{ date('d M Y') }}</i>
  </body>

</html>
