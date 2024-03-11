<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation</title>
</head>
<body>
<form action="try.php" method="post">
    <table border="1px">
        <tr>
            <td>Lott No :-</td>
            <td><input type="text" name="lott"></td>
        </tr>
        <tr>
            <td>Enter Ruff :-</td>
            <td><input type="text" name="ruff"></td>
        </tr>
        <tr>
            <td>Enter Size*100 :-</td>
            <td><input type="text" name="size1"></td>
        </tr>
        <tr>
            <td>Ruff Polish :-</td>
            <td><input type="text" name="per1"></td>
        </tr>
        <tr>
            <td>Less :-</td>
            <td><input type="text" name="per2"></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="reset" value="Reset">
            <input type="submit" name="submit" value="Calculate"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $lott=$_POST["lott"];
        $ruff=$_POST['ruff'];
        $size1=$_POST['size1'];
        $per1=$_POST['per1'];
        $per2=$_POST['per2'];

        $total = $ruff+$size1;
        $cal1 = ($total*100)/$per1;
        $cal2 = ($cal1*100)/$per2;

        $con=mysqli_connect('localhost','root','',"haresh");
        $insert="insert into data (Lott,Ruff,Size1,Total,Ruff_polish,First_calculation,Less,Final_Calculation)values ('$lott','$ruff','$size1','$total','$per1','$cal1','$per2','$cal2')";
        $query1=mysqli_query($con,$insert);

        $select="select * from data";
        $query2=mysqli_query($con,$select);

        ?> <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>lott</td>
                        <td>Ruff</td>
                        <td>Size 1</td>
                        <td>Total</td>
                        <td>Per 1</td>
                        <td>Cal 1</td>
                        <td>Per 2</td>
                        <td>Cal 2</td>
                    </tr><br><br>
            </table> <?php
        if($query2)
        {
            while($row=mysqli_fetch_array($query2))
            { ?>
                <table border="1">
                    <tr>
                        <td><?php echo"$row[id]"; ?></td>
                        <td><?php echo"$row[Lott]"; ?></td>
                        <td><?php echo"$row[Ruff]"; ?></td>
                        <td><?php echo"$row[Size1]"; ?></td>
                        <td><?php echo"$row[Total]"; ?></td>
                        <td><?php echo"$row[Ruff_Polish]"; ?></td>
                        <td><?php echo"$row[First_Calculation]"; ?></td>
                        <td><?php echo"$row[Less]"; ?></td>
                        <td><?php echo"$row[Final_Calculation]"; ?></td>
                    </tr>
                    </table>
            <?php }
        }
    } ?>