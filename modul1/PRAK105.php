<html>
    <body>
        <?php
            $samsung =[1=>'Samsung Galaxy S22', 2=>'Samsung Galaxy S22+', 3=>'Samsung Galaxy A03', 4=>'Samsung Galaxy Xcover 5'];
        ?>
        <table>
            <style type ="text/css">
                table, th, td {
                    border : 1px solid;
                    width : 436px;
                }
                th {
                    background-color : #FF0000;
                    height : 70px;
                    font-size : 2em;
                }
            </style>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <tr>
                <td><?php echo $samsung[1] ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung[2] ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung[3] ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung[4] ?></td>
            </tr>
        </table>
    </body>
</html>