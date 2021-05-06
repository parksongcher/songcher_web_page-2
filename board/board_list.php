<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>커뮤니티</title>
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/main.css?after2">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/footer.css?after2">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/board/css/board.css?after2">
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/psctest/songcher_web_site/board/js/board.js"></script>
    <script src="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/js/common.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/header.php"; ?>
    </header>
    <section>
        <div id="board_box">
            <h3>
                게시판 > 목록보기
            </h3>
            <ul id="board_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">제목</span>
                    <span class="col3">글쓴이</span>
                    <span class="col4">첨부</span>
                    <span class="col5">등록일</span>
                    <span class="col6">조회</span>
                </li>
                <?php

                include_once $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/db/db_connect.php";

                if (isset($_GET["page"]))
                    $page = $_GET["page"];
                else
                    $page = 1;


                $sql = "select * from board order by num desc";
                $result = mysqli_query($con, $sql);
                $total_record = mysqli_num_rows($result); // 전체 글 수

                $scale = 10;

                // 전체 페이지 수($total_page) 계산
                if ($total_record % $scale == 0)
                    $total_page = floor($total_record / $scale);
                else
                    $total_page = floor($total_record / $scale) + 1;

                // 표시할 페이지($page)에 따라 $start 계산
                $start = ($page - 1) * $scale;

                $number = $total_record - $start;   //번호

                // 게시판에서 보여줘야할 갯수를 진행함
                for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
                    // 가져올 레코드로 위치(포인터) 이동 0-> result set 0번째, 1->result set 1번째
                    mysqli_data_seek($result, $i);
                    // 하나의 레코드 가져오기
                    $row = mysqli_fetch_array($result);

                    $num = $row["num"];
                    $id = $row["id"];
                    $name = $row["name"];
                    $subject = $row["subject"];
                    $regist_day = $row["regist_day"];
                    $hit = $row["hit"];

                    if ($row["file_name"])
                        $file_image = "<img src='./img/file.gif'>";
                    else
                        $file_image = " ";
                ?>
                    <li>
                        <span class="col1"><?= $number ?></span>
                        <span class="col2"><a href="board_view.php?num=<?= $num ?>&page=<?= $page ?>"><?= $subject ?></a></span>
                        <span class="col3"><?= $name ?></span>
                        <span class="col4"><?= $file_image ?></span>
                        <span class="col5"><?= $regist_day ?></span>
                        <span class="col6"><?= $hit ?></span>
                    </li>
                <?php
                    $number--;
                }   //end of for
                mysqli_close($con);

                ?>
            </ul>

            <!-- 페이지를 보여주는 영역 -->
            <ul id="page_num">
                <?php
                //이전페이지 영역
                if ($total_page >= 2 && $page >= 2) {
                    $new_page = $page - 1;
                    echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
                } else
                    echo "<li>&nbsp;</li>";

                // 게시판 목록 하단에 페이지 링크 번호 출력
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($page == $i)     // 현재 페이지 번호 링크 안함
                    {
                        echo "<li><b> $i </b></li>";
                    } else {
                        echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
                    }
                }

                //다음페이지 영역
                if ($total_page >= 2 && $page != $total_page) {
                    $new_page = $page + 1;
                    echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
                } else
                    echo "<li>&nbsp;</li>";
                ?>
            </ul> <!-- page -->
            <ul class="buttons">
                <li>
                    <button onclick="location.href='board_list.php'">목록</button>
                </li>
                <li>
                    <?php
                    if ($userid) {
                    ?>
                        <button onclick="location.href='board_form.php'">글쓰기</button>
                    <?php
                    } else {
                    ?>
                        <a href="javascript:alert('로그인 후 이용해 주세요!')">
                            <button>글쓰기</button>
                        </a>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div> <!-- board_box -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/footer.php"; ?>
    </footer>
</body>

</html>