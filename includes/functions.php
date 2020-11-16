
<?php
function InsertDataIntoTable(string $table, array $formData)
{
  include 'server.connect.php';
  $fields = array_keys($formData);
  $query = "INSERT INTO ".$table."(`".implode("`, `", $fields)."`) VALUES('".implode("','", $formData)."')";
  $result = mysqli_query($server_connection, $query);
  if (!$result) {
    echo("Error report: ".mysqli_error($server_connection));
  }
  return $result; 
}
?>


<?php

function selectDataFromTable($query)
{
   include 'server.connect.php';
  $result = mysqli_query($server_connection, $query);
  $count = 0;
  $data = array();

  while ($row = mysqli_fetch_array($result)) {
    $data[$count] = $row;
    $count ++;
  }
  return $data;
}

?>

<?php
function updateDataRow($tablename, $formData,$whereclause="")
{
  include 'server.connect.php';
  $wherequery = "";

  if (!empty($whereclause)) {
    if (substr(strtoupper(trim($whereclause)), 0,5) != "WHERE") {
      $wherequery = "WHERE ".$whereclause;
    }else{
      $wherequery = " ".trim($whereclause);
    }
  }
  $query = " UPDATE ".$tablename." SET ";

  $sets = array();

  foreach ($formData as $column => $value) {
    $sets[] = "`".$column."` = '".$value."'";
  }

  $query .=implode(", ", $sets);

  $query .=$wherequery;

   $result = mysqli_query($server_connection, $query);

   return $result;
}

?>



<?php
function deleteDataRow($tablename, $whereclause="")
{
  include 'server.connect.php';
  $wherequery = "";

  if (!empty($whereclause)) {
    if (substr(strtoupper(trim($whereclause)), 0,5) != "WHERE") {
      $wherequery = "WHERE ".$whereclause;
    }else{
      $wherequery = " ".trim($whereclause);
    }
  }
  $query = "DELETE FROM ".$tablename.$wherequery;

  return mysqli_query($server_connection, $query);
}

?>

 <?php
function fetch_data()
{
    require 'server.connect.php';

    $output = '';

    $query ="SELECT * FROM course ORDER BY id ASC";
    $result =mysqli_query($server_connection, $query);
    if (!$result) {
        $output .='
        <tr>
            <td>'.var_dump($result).'</td>
        </tr>
        ';
    }else{
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $output .='
        <tr class="odd gradeX">
            <td>'.$row["course_sname"].'</td>
            <td>'.$row["course_fname"].'</td>
            <td><a href="deletecourse.php?delete='.$row['id'].'" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
                                            
        </tr>
        ';
    }
    }

    return $output;
}
?>

<?php
function fetchStudentData()
{
    require 'server.connect.php';

    $output = '';

    $query ="SELECT * FROM personalinfo JOIN contactdetails ON personalinfo.id = contactdetails.studentID";
    $result =mysqli_query($server_connection, $query);
    if (!$result) {
        $output .='
        <tr id="tr">
            <td>'.var_dump($result).'</td>
        </tr>
        ';
    }else{
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $output .='
        <td>'.$row["fname"]."  ".$row["lname"].'</td>
        <td><img class="rounded-circle" src="./photos/'.$row["photo"].'" width="100px"></td>
        <td>'.$row["phone"].'</td>
        <td>'.$row["address"].'</td>
       <td>'.$row["sex"].'</td>
      <td>'.$row["age"].'</td>
      <td>'.$row["program"].'</td>
      <td>'.$row["country"].'</td>
      
      <td><a href="dashboard.php?view='.$row["id"].'" class="btn btn-warning">
      <i class="fa fa-eye"></i> view</a>
      <a href="dashboard.php?edit='.$row["id"].'" class="btn btn-success">
      <i class="fa fa-edit"></i> Edit</a> 
      <a href="delete.php?del='.$row["id"].'" class="btn btn-danger">
      <i class="fa fa-trash"></i> Delete</a>
      </td> 
        </tr>               
        ';
    }
    }

    return $output;
}
?>