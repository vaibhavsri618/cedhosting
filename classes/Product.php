
<?php

class Product
{
    function fetchcategory($conn)
    {
        $row1=array();
        $sql = "SELECT * FROM tbl_product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
       
            while ($row = $result->fetch_assoc()) {

                array_push($row1, $row);
                
            }
            return $row1;
        } else {
            echo "0 results";
        }
    }


    function fetchcategory1($conn)
    {
        $row1=array();
        $sql = "SELECT * FROM tbl_product WHERE prod_available=1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
       
            while ($row = $result->fetch_assoc()) {

                array_push($row1, $row);
                
            }
            return $row1;
        } else {
            echo "0 results";
        }
    }

    function addcategory($name, $select, $link, $conn)

    {


        $sql = "INSERT INTO tbl_product (prod_parent_id, prod_name, link, prod_available, prod_launch_date)
            VALUES ('".$select."', '".$name."', '".$link."', 1, NOW())";

        if ($conn->query($sql) === true) {
            echo "<script>
            alert('Category inserted successfully')
            window.location='category.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function updatecategory($name, $select, $link, $hidden, $conn)
    {
        $sql = "UPDATE tbl_product SET prod_name='".$name."',link='".$link."',prod_available='".$select."' WHERE id='".$hidden."'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Category Updated successfully')
            window.location='category.php'</script>";
        } else {
        echo "Error updating record: " . $conn->error;
        }
    }

    function deletecategory($id, $conn)

    {

        $sql = "DELETE FROM tbl_product WHERE id='".$id."'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Category Deleted successfully')
            window.location='category.php'</script>";
        } else {
        echo "Error deleting record: " . $conn->error;
}


    }

    function addproduct($name, $select, $link, $conn)

    {


        $sql = "INSERT INTO tbl_product (prod_parent_id, prod_name, link, prod_available, prod_launch_date)
            VALUES ('".$select."', '".$name."', '".$link."', 1, NOW())";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
            
        } 
    }

    function addfinalproduct($row, $price1, $price2, $conn, $sku, $json_arr)
    {
        $sql = "INSERT INTO tbl_product_description (prod_id, `description`, mon_price, annual_price, sku)
        VALUES ('".$row."', '".$json_arr."', '".$price1."', '".$price2."', '".$sku."')";

    if ($conn->query($sql) === true) {
        echo "<script>
        alert('Product inserted successfully')
        window.location='addproduct.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

}

?>