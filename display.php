<html>
<style>
h2 {text-align: center;}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="displaystyle.css">
</head>
<body>
<div class="container"> 
    <?php
    include_once 'database.php';
    ?>
     <centre><h5>Student Record</h5></centre>
     <form method="POST">
            <button class="bt1" type="submit" name="export">Export</button>
            <button class="bt2" type="submit" name="edit">Edit</button>
        </form>
     </div>
    <table >
      
        <t>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>dob</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Username</th>
           
        </t>
      
        <?php
        $sql = "SELECT * FROM student;";
        $result = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
            <td>" . $rows['id'] . "</td>
                <td>" . $rows['firstname'] . "</td>
                <td>" . $rows['lastname'] . "</td>
                <td>" . $rows['dob'] . "</td>
                <td>" . $rows['gender'] . "</td>
                <td>" . $rows['dep'] . "</td>
                <td>" . $rows['usern'] . "</td>
              

            </tr> ";
        }

        if (isset($_POST['export']))
        {
            header('location:export.php');
        }
        if (isset($_POST['edit']))
        {
            header('location:edit.php');
        }
        ?>
    </table>

</body>

</html>