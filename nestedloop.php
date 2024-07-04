<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loops</title>
</head>
<style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            padding: 10px;
        }
        table{
            width: 600px;
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
        table tr th[data-class-name]{
            background: #999 ;
            
        }
    </style>
<body>
    <?php 
        $classOne = array(
            array("Ahmed Ramzy Heaba", 40, 40, 40, 47),
            array("Heba Nasr Raslan", 80, 70, 65, 46),
            array("Farida Ahmed Heaba", 90, 80, 70, 60)
        );
        $classTwo = array(
            array("Mohamed Ramzy Heaba", 45, 55, 60, 50),
            array("Eiad Nasr Hamed", 50, 40, 45, 37),
            array("Talin Samir Heaba", 91, 40, 72, 61)
        );
        $school = array($classOne, $classTwo);

    ?>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Arabic</th>
            <th>Math</th>
            <th>English</th>
            <th>Frensh</th>
            <th>Total</th>
            <th>Persentage</th>
            <th>Status</th>
        </tr>
        <?php
            $total = 0;
            $persentege = 0;
            $bestScore = 0;
            $bestStudent = 0;
            $minStudent = 0;
            $cssClass = '';
            $statusWord = '';

            for($i = 0, $ii = count($school); $i < $ii; $i++){
                echo '<tr>
                        <th data-class-name="class1" colspan="8">Class ' .($i + 1) . '</th>
                    </tr>';
                for($j = 0, $jj = count($school[$i]); $j < $jj; $j++){
                    $total = $school[$i][$j][1]+$school[$i][$j][2]+$school[$i][$j][3]+$school[$i][$j][4];
                    if($total > $bestScore){
                        $bestScore = $total;
                        $bestStudent = $j;
                    }else{
                        $minStudent = $j;
                    }
                    $persentege = ($total / 400) *100;
                    $cssClass = ($total > 200) ? 'green':'red';
                    $statusWord = ($total > 200) ? 'Success': 'Filed';
                    echo '<tr>
                            <td>' . $school[$i][$j][0] . '</td>
                            <td>'. $school[$i][$j][1] .'</td>
                            <td>' . $school[$i][$j][2] .'</td>
                            <td>' . $school[$i][$j][3] .'</td>
                            <td>' . $school[$i][$j][4] .'</td>
                            <td>' . $total . '</td>
                            <td>' . $persentege . '%' . '</td>
                            <td><span class=' .$cssClass . '>' . $statusWord . '</span></td>
                        </tr>';
                };
                echo '<tr>
                <th data-class-name="class1" colspan="8">THE BEST SCORE IS:' . $bestScore . 'FOR STUDENT NAME IS' . $school[$i][$bestStudent][0] . '</th>
                <th data-class-name="class1" colspan="8">THE less than student is' . $school[$i][$minStudent][0] . '</th>

            </tr>';
            $bestScore = 0;
            $bestStudent = 0;
            };
        ?>
    </table>
    <?php 
        $name = array(
            'Ahmed Ramzy' => 5000,
            'Farida' => 10000,
            'Heba Nasr' => 12000
        );
        foreach($name as $name => $salary){
            echo $name . '=>' . $salary;
            echo '<br/>';
        };
    ?>
</body>
</html>