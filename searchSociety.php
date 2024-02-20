<?php
session_start();
?>
<html><head>
        <style>
            table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
   
}
tr{
     box-shadow: 0 .2rem .4rem #0005;
     border-radius: 10px;
}

th{
    border: 1px solid black;
    font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    
}

td{
    border-left: 1px solid black;
    border-right: 1px solid black;
    font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: white;
    cursor: pointer;
    text-transform: uppercase;
    font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

tbody tr:nth-child(even) {
    background-color: white;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay);
    background-color: #dfe1e5;
    height: 65px;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #f2f2f2 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .1s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

.export__file {
    position: relative;
}

.export__file .export__file-btn {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background: #fff6 url(images/export.png) center / 80% no-repeat;
    border-radius: 50%;
    transition: .2s ease-in-out;
}

.export__file .export__file-btn:hover { 
    background-color: #fff;
    transform: scale(1.15);
    cursor: pointer;
}

.export__file input {
    display: none;
}

.export__file .export__file-options {
    position: absolute;
    right: 0;
    
    width: 12rem;
    border-radius: .5rem;
    overflow: hidden;
    text-align: center;

    opacity: 0;
    transform: scale(.8);
    transform-origin: top right;
    
    box-shadow: 0 .2rem .5rem #0004;
    
    transition: .2s;
}

.export__file input:checked + .export__file-options {
    opacity: 1;
    transform: scale(1);
    z-index: 100;
}

.export__file .export__file-options label{
    display: block;
    width: 100%;
    padding: .6rem 0;
    background-color: #f2f2f2;
    
    display: flex;
    justify-content: space-around;
    align-items: center;

    transition: .2s ease-in-out;
}

.export__file .export__file-options label:first-of-type{
    padding: 1rem 0;
    background-color: #86e49d !important;
}

.export__file .export__file-options label:hover{
    transform: scale(1.05);
    background-color: #fff;
    cursor: pointer;
}

.export__file .export__file-options img{
    width: 2rem;
    height: auto;
}

.bn{
                border: none;
                padding: 24px;
                width: 90px;
                height: 10px;
                text-decoration: none;
                padding: 15px;
                color: white;
                font-family: "montserrat",sans-serif;
                text-transform: uppercase;
                border-radius: 6px;
                cursor: pointer;
                font-weight: bold;
                background-color: #0d6efd;
                 
                outline: none;
            }

        </style>
        <script>
            function preventBack()
            {
                window.history.forward();
                window.onbeforeunload=function(){
                    alert("You won't be able get back");
                };
            }
            setTimeout("preventBack()",0);
            window.onunload()=function (){null;};
        </script>
    </head>
    <body>
        <?php
        if ($_GET['sname'] != '') {
            $sname = $_GET['sname'];
            $con = new mysqli("localhost", "root", "", "pratix") or die("Connection failed !");

            $sql = "SELECT sid,sname,city,state,nearby,pin FROM society WHERE sname LIKE '$sname%'";
            $data = mysqli_query($con, $sql);

            if (mysqli_num_rows($data) > 0) {
                
                echo "<br><section class='table__body'><table class='styled-table'><tr><th>Society name<th>City<th>State<th>Nearby address<th>Zipcode<th>Join</tr>";
                while ($row = mysqli_fetch_assoc($data)) {
                    $sid= $row['sid'];
//                    $_SESSION['sesSid']=$sid;
                    echo "<tr><td>" . $row['sname'] . "<td>" . $row['city'] . "<td>" . $row['state'] . "<td>" . $row['nearby'] . "<td>" . $row['pin'] . "<td>"
                . "<a class='bn' href='joinSocietyDetails.php?sid=" . base64_encode($sid) . "'>Join</a></tr>";
                }
            }
            echo "</table>";
        }
        ?>
    </body>
</html>