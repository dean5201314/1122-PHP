<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            /* overflow: hidden; */
        }

        body {}

        .top {
            width: 1024px;
            height: 65px;
            background-color: thistle;
            margin: auto;
            border: 1px solid black;
            border-bottom: 0;
            text-align: center;
            padding-top: 2px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            width: 1024px;
            /* height: 768px; */
            margin: auto;
            background-color: aqua;
        }

        .aside {
            width: 215px;
            height: calc(768px - 65px - 20px);
            background-color: bisque;
            border: 1px solid black;
            border-right: 0;
            display: flex;
            flex-direction: column;
            font-family: '標楷體';
        }

        .menu {
            /* width: 215px; */
            height: calc(100% - 25px);
            /* background-color: blueviolet; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .update {
            height: 25px;
            font-size: 16px;
            color: #0000FF;
            font-family: '標楷體';
            text-align: center;
            background-color: lightblue;
        }

        .main {
            width: calc(1024px - 215px);
            /* height: calc(768px - 65px - 20px); */
            background-color: lightgreen;
            border: 1px solid black;
        }

        .marquee {
            /* width: 215px; */
            height: 29px;
            font-size: 24px;
            color: #0000FF;
            font-family: '標楷體';
            background-color: lightcyan;
        }

        .content {
            height: calc(100% - 29px);
            background-color: lightpink;
        }
    </style>
</head>

<body>
    <header class="top">萬年曆 </header>
    <div class="container">
        <aside class="aside">
            <section class="menu">
            </section>
            <section class="update">
                最近更新日期：2023/11/02
            </section>
        </aside>
        <main class="main">
            <section class="marquee">
                <marquee behavior="" direction="">
                    
                </marquee>
            </section>
            <section class="content">
                
            </section>
        </main>
    </div>

</body>

</html>