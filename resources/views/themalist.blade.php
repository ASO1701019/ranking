<html>
    <head>
        <title>InstantRanking</title>
        <style>
            #caption{font-size:30pt;color: #fb9209;}
            nav{
                width: 100%;    /*横幅の指定*/
                border-top: 1px solid orange;   /*上部の線の色を指定*/
                border-bottom: 1px solid orange;    /*下部の線の色を指定*/
                margin-bottom: 5px; /**/
                overflow: hidden;   /*おまじない*/
            }
            nav ul{
                list-style: none;
                width: 60%; /*横幅の指定*/
                margin-left: 20%;   /*左端から20%右側に動かす*/
            }
            nav li{
                width: calc(25% - 2px); /*横幅の指定（線の分をマイナスする）*/
                border-left: 1px solid orange;  /*線を描く*/
                text-align: center; /*文字を中央に*/
                float: left;    /*左から並べる*/
            }
            nav li:last-child{
                border-right: 1px solid orange; /*li要素の最後の物は右側に線を描く*/
            }
            nav a{
                display: block; /*1つのli全体にリンクを有効にする*/
                text-decoration: none;  /*ブラウザ標準のリンク装飾をオフに*/
                color:#313131;  /*文字色の変更*/
                font-size: 110%;    /*フォントサイズの指定*/
                letter-spacing: 5px;    /*文字と文字の間隔をあける*/
                font-weight: 400;   /*文字の太さを調整*/
                line-height: 45px;  /*行間の指定（ナビボタンの高さ指定）*/
            }
            nav a:hover{
                background-color: orange;   /*背景色の指定*/
                color: #fff;    /*文字色の変更*/
                transition: 0.5s;   /*ホバー時の動きをなめらかにする*/
            }
            footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                height: 100px;
            }

        </style>
    </head>
    <body>
    <div id="caption" align="center">
        InstantRanking
    </div>
        @section('content')
            <div align="center">
                <p>テーマ一覧</p>
                <p>
                    <a href="themapost" style="color: #fb9209;text-decoration: none">+</a>
                    <select name="genre">
                        <option value="食べ物">食べ物</option>
                        <option value="レジャー">レジャー</option>
                    </select>
                </p>
            </div>

            <div>

            </div>

            <footer>
                <nav>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="./">Ranking</a></li>
                        <li><a href="./">Thema</a></li>
                        <li><a href="./">User</a></li>
                    </ul>
                </nav>
            </footer>
    </body>


</html>