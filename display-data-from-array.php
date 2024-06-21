
        <table border="1">
            <tr>
                <td>S no.</td>
                <td>Name</td>
                <td>Email id</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mukesh</td>
                <td>mukesh@gmail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pintu</td>
                <td>pintu@gmail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Shivam</td>
                <td>shivam@gmail.com</td>
            </tr>
        </table>

        <?php
        $users = [
            [1,"Mukesh","mukesh@gmail.com"],
            [2,"Pintu","pintu@gmail.com"],
            [3,"Shivam","shivam@gmail.com"]
        ];
        echo "<table border=1>";
        for($i=0;$i<count($users);$i++){
            echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td";
                // echo "<br>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>