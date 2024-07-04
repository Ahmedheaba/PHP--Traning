<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            padding: 10px;
        }
        table{
            width: 400px;
            border-collapse: collapse;
        }
        table tr td, table tr th{
            border: solid 2px #888;
            padding: 5px;
            text-align: left;
        }
        table tr:nth-child(2n){
            background: #e4e4e4;
        }
        table tr th{
            background: #666;
            color: #fff;
        }
        table tr td span.green{
            color:  green;
            font-weight: bold;
        }
        table tr td span.red{
            color:  red;
            font-weight: bold;
        }
        table tr:hover{
            background: yellow;
        }
    </style>
</head>
<body>
    <!-- FIRST TABLE JUST TO SHOW DATA IN TABLE -->
    <table>
        <tr>
            <th>Employee Name </th>
            <th>Salary </th>
        </tr>

    <?php
        $employee = array('Ahmed Ramzy', 'Heba Raslan', 'Farida Heaba', 'Eiad Heaba');
        $salary = array(12000, 15000, 22000, 18000);

        for($i = 0, $ii = count($salary); $i < $ii; $i++){
            echo '<tr>
                    <td>' . $employee[$i] . '</td>
                    <td> ' . $salary[$i] .  'L.E </td>
                </tr>';
        }

        $total = 0;
        for ($i = 0, $ii = count($salary); $i < $ii; $i++){
            $total += $salary[$i];
        }
            echo '<tr>
            <th> Total Of Salary </th>
            <th>' . $total . ' L.E </th>
        </tr>';
    ?>
    </table>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Arabic</th>
            <th>Math</th>
            <th>Science</th>
            <th>History</th>
            <th>Total</th>
            <th>Average</th>
            <th>Status</th>
        </tr>
        <?php
            $students = array('Ahmed', 'Heba', 'Farida', 'Eiad');
            $arabicLang = array(10, 80, 45, 75);
            $mathLang = array(25, 85, 60, 50);
            $scirnceLang = array(65, 45, 40, 70);
            $historyLang = array(15, 35, 40, 50);
            $total = 0;
            $averg = 0;
            for($i = 0, $ii = count($students); $i < $ii; $i++){
                $total = $arabicLang[$i] +$mathLang[$i]+ $scirnceLang[$i] + $historyLang[$i];
                $averg = ($total / 400) *100;
                $cssClass = ($total >= 200) ? 'green': 'red';
                $status = ($total >= 200) ? 'Success': 'Failed';
                echo '<tr>
                        <td>' . $students[$i] . '</td>
                        <td>' . $arabicLang[$i] . '</td>
                        <td>' . $mathLang[$i] . '</td>
                        <td>' . $scirnceLang[$i] . '</td>
                        <td>' . $historyLang[$i] . '</td>
                        <td>' . $total . '</td>
                        <td>'  .$averg . '%
                        <td>' . '<span class=' . $cssClass .'>' . $status . '</span></td>
                    </tr>';
    
            }
        ?>
    </table>
</body>
</html>