<?php include("./config.inc"); ?>
<body>
<p style="font-size:24px; color:blue; font-family:aria"> Member list </p>
<?php
$sql = "select id, name, desc1 from cloudnine.dept";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
echo "id=>" . $row["id"]. "\t\tname=>" . $row["name"]. "\t\tdesc1=>" . $row["desc1"]. "<br>";
        }
}else{
        echo "0 result";
};
$conn->close();
?>
</body>
