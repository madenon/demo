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
        border: 1px solid #0dd528;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #3db6ae;
      }
    </style>
  </head>

  <body>

    <table id="customers">
      <tr>
        <td>
          <h2>
            <?php $image_path = '/upload'; ?>
            <img src="{{ public_path() . $image_path }}" width="200" height="100">
          </h2>
        </td>
        <td>Esay School ERP

          <p>School: Address</p>
          <p>Phone: +21299999999</p>
          <p>Email : admin@gmail.com </p>
          <p><b>Employee Registration Page</b></p>
        </td>
      </tr>
    </table>

    <table id="customers">
      <tr>
        <th width="10%">SL</th>
        <th width="45%">Employee Details</th>
        <th width="45%">Student Data</th>
      </tr>

      <tr>
        <td>1</td>
        <td><b>Employee Name</b></td>
        <td>{{ $details->name }}</td>
      </tr>
      <tr>
        <td>2</td>
        <td><b>Employee ID No</b></td>
        <td>{{ $details->id_no }}</td>
      </tr>

      <tr>
        <td>3</td>
        <td><b>Student Father's Name</b></td>
        <td>{{ $details->fname }}</td>
      </tr>
      <tr>
        <td>4</td>
        <td><b>Student Mother's Name</b></td>
        <td>{{ $details->mname }}</td>
      </tr>


      <tr>
        <td>5</td>
        <td><b>Student Mobile</b></td>
        <td>{{ $details->mobile }}</td>
      </tr>


      <tr>
        <td>6</td>
        <td><b>Student Address</b></td>
        <td>{{ $details->address }}</td>
      </tr>

      <tr>
        <td>7</td>
        <td><b>Student Gender</b></td>
        <td>{{ $details->gender }}</td>
      </tr>
      <tr>
        <td>8</td>
        <td><b>Student Religion</b></td>
        <td>{{ $details->religion }}</td>
      </tr>
      <tr>
        <td>9</td>
        <td><b>Student Date Of Birth</b></td>
        <td>{{ date('d-m-Y', strtotime($details->dob)) }}</td>
      </tr>


      <tr>
        <td>9</td>
        <td><b>Discount</b></td>
        <td>{{ $details['designation']['name'] }} %</td>
      </tr>

      <tr>
        <td>10</td>
        <td><b>Join Date</b></td>
        <td>{{ date('d-m-Y', strtotime($details->join_date)) }}</td>
      </tr>

      <tr>
        <td>11</td>
        <td><b>Employee Salary</b></td>
        <td>{{ $details->salary }}</td>
      </tr>

      <tr>
        <td>12</td>
        <td><b>Employee Salary</b></td>
        <td>{{ $details->email }}</td>
      </tr>





    </table>
    <br> <br>
    <i style="font-size: 10px; float:right;">Print Data: {{ date('d M Y') }}</i>
  </body>

</html>
