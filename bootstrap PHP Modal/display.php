<?php
include 'connect.php';
//extract($_POST);
if (isset($_POST['displaySend'])) {
  $table = '<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">First Name</th>
            <th scope="col">Sur Name</th>
            <th scope="col">mobile</th>
            <th scope="col">email</th>
            <th scope="col">operations</th>
          </tr>
        </thead>';


  $sql = "Select * from users";
  $result = mysqli_query($con, $sql);
  $number = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $title = $row['title'];
    $firstname = $row['firstname'];
    $surname = $row['surname'];
    $mobile = $row['mobile'];
    $email = $row['email'];

    $table .= '<tr>
        <td scope="row">' . $number . '</td>
        <td>' . $title . '</td>
        <td>' . $firstname . '</td>
        <td>' . $surname . '</td>
        <td>' . $mobile . '</td>
        <td>' . $email . '</td>

        <td>
<button class ="btn btn-dark" onclick="updateUser(' . $id . ')" > Update</button>
<button class ="btn btn-danger" onclick="DeletUser(' . $id . ')"> Delete</button>
</td>
   
      </tr>';
    $number++;
  }
  $table .= '</table>';
  echo $table;
}
