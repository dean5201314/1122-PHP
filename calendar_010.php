<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            /* opacity: 0.1; */
            overflow: hidden;
        }/*設定body區*/
        .main {
            display: flex;
            width: 996px;
            border: 1px solid black;
            padding: 10 10px;
            margin: 0 auto;
            text-align: center;
            flex-wrap: wrap;
        }
        .header {
            width: 1000px;
            font-size: 30px;
            /* display: flex;
            flex-direction: column; */
            color: red;
            text-align: center;
        }
        .container {
            width: 1024px;
            height: 768px;
            margin: auto;
            /* background-image:url("./images/bg-calendar-4.jpg"); */
            background-color: aquamarine;
        }


        table {
            border-collapse: collapse;
            border: 3px double #999;

        }

        td {
            border: 1px solid #999;
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>

<body  class="main">
    <header class="header">萬年曆</header>
    <!-- <nav class="nav"></nav> -->
    <!-- <div class="container"> -->

        <!-- <aside class="aside"> -->
        <!-- </aside> -->
        <!-- <main class="main"> -->
        <?php
        echo "<h3>";
        echo date("西元Y年m月");    //依 Y-m 格式顯示西元年月
        echo "</h3>";
        /*$thisMonth=date("Y");   //抓取西元月份，實際抓到的是西元年份*/
        $thisMonth = date("m");   //用 date("m")抓取西元月份
        $thisFirstDay = date("Y-m-1");    //抓取該西元月份第1天(1號)
        $thisFirstDate = date('w', strtotime($thisFirstDay));  //抓取該西元月份第1天(1號)是星期幾(方便找出前面空幾天)  
        $thisMonthDays = date("t");   //抓取該西元月份共有幾天(方便找出當月最後日期)
        $thisLastDay = date("Y-m-$thisMonthDays");    //抓取該西元月份最後1天的日期)
        $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7); //抓取該西元月份共有幾周
        $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
        //抓取該西元月份第1周第1格為幾月幾日
        echo "<table>";
        echo "<tr>";
        echo "<td>日</td>";
        echo "<td>一</td>";
        echo "<td>二</td>";
        echo "<td>三</td>";
        echo "<td>四</td>";
        echo "<td>五</td>";
        echo "<td>六</td>";
        echo "</tr>";
        for ($i = 0; $i < $weeks; $i++) {   // i 表周次的變化
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {    // j 表當周星期幾的變化
                $addDays = 7 * $i + $j;
                // addDays 表第幾周星期幾(該西元月份第1周第1格算起共幾天)
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                // thisCellDate 表當周當格是幾月幾日
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    //判斷當天是星期天或星期六
                    echo "<td style='background:pink'>";    //顯示此格背景色為粉紅色

                } else {
                    echo "<td>";
                }
                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    //判斷當周當格日期與當月第一天是否為同一月份
                    echo date("j", $thisCellDate);   //列印出當月第幾天(月份中的日期)
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
        <!-- </main> -->
    <!-- </div> -->
    <!-- <footer class="footer"> -->

    </footer>
</body>

</html>