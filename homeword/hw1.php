<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Test</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 1000px;
}

td, th {
    text-align: center;
    padding: 5px;
}
.edit-btn {
    background: blue;
    color: white;
    padding: 4px 15px;
    border-radius: 5px;
    display: inline-block;
}

.delete-btn {
    background: red;
    color: white;
}
</style>
<body>
<?php 
$name1="Dara Navi";
$hg1="2000";

$name2="DO Seyha";
$hg2="1000000";

$name3="Vai Virat";
$hg3="1000";

$name4="Por Sreypach";
$hg4="36855455";

$name5="Long Saroth";
$hg5="34500";

$name6="La Sreypoy";
$hg6="25000";

echo "<h1>ETEC Test</h1>";

echo "
<table border=1>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Harga</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<tr>
    <td>1</td>
    <td>$name1</td>
    <td>$hg1</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

<tr>
    <td>2</td>
    <td>$name2</td>
    <td>$hg2</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

<tr>
    <td>3</td>
    <td>$name3</td>
    <td>$hg3</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

<tr>
    <td>4</td>
    <td>$name4</td>
    <td>$hg4</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

<tr>
    <td>5</td>
    <td>$name5</td>
    <td>$hg5</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

<tr>
    <td>6</td>
    <td>$name6</td>
    <td>$hg6</td>
    <td ><span class='edit-btn'>Edit</span></td>
    <td ><span class='edit-btn delete-btn'>Delete</span></td>
</tr>

</table>
";
?>

</body>
</html>