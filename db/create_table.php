<?php
    include_once "db_connect.php";
    include_once $_SERVER['DOCUMENT_ROOT']."/psctest/songcher_web_site/db/db_connect.php";
    function create_table($con, $table_name)
    {
        $flag = false;
        $query = "show tables from sample;";
        $result = mysqli_query($con, $query) or die('error : ' . mysqli_error($con));

        while ($row = mysqli_fetch_row($result)) {
            if ($row[0] === $table_name) {
                $flag = true;
                break;
            }
        }
        //해당 테이블명이 없으면 해당 테이블명을 찾아서 데이블 생성 쿼리문을 작성한다.
        if ($flag === false) {
            switch ($table_name) {
                case 'message':
                    $query = "CREATE TABLE `message` (
                              `num` int(11) NOT NULL AUTO_INCREMENT,
                              `send_id` char(20) NOT NULL,
                              `rv_id` char(20) NOT NULL,
                              `subject` char(200) NOT NULL,
                              `content` text NOT NULL,
                              `regist_day` char(20) DEFAULT NULL,
                              PRIMARY KEY (`num`)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'board':
                    $query = "CREATE TABLE `board` (
                                  `num` int NOT NULL AUTO_INCREMENT,
                                  `id` char(15) NOT NULL,
                                  `name` char(10) NOT NULL,
                                  `subject` char(200) NOT NULL,
                                  `content` text NOT NULL,
                                  `regist_day` char(20) NOT NULL,
                                  `hit` int NOT NULL,
                                  `file_name` char(40) DEFAULT NULL,
                                  `file_type` char(40) DEFAULT NULL,
                                  `file_copied` char(40) DEFAULT NULL,
                                  PRIMARY KEY (`num`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'notice':
                    $query = "CREATE TABLE `notice` (
                                  `num` int NOT NULL AUTO_INCREMENT,
                                  `id` char(15) NOT NULL,
                                  `name` char(10) NOT NULL,
                                  `subject` char(200) NOT NULL,
                                  `content` text NOT NULL,
                                  `regist_day` char(20) NOT NULL,
                                  `hit` int NOT NULL,
                                  PRIMARY KEY (`num`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'image_board':
                    $query = "CREATE TABLE `image_board` (
                                  `num` int NOT NULL AUTO_INCREMENT,
                                  `id` char(15) NOT NULL,
                                  `name` char(10) NOT NULL,
                                  `subject` char(200) NOT NULL,
                                  `content` text NOT NULL,
                                  `regist_day` char(20) NOT NULL,
                                  `hit` int NOT NULL, 
                                  `file_name` char(40) NOT NULL,
                                  `file_type` char(40) NOT NULL,
                                  `file_copied` char(40) NOT NULL,
                                  PRIMARY KEY (`num`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'image_board_ripple':
                    $query = "CREATE TABLE `image_board_ripple` (
                          `num` int(11) NOT NULL AUTO_INCREMENT,
                          `parent` int(11) NOT NULL,
                          `id` char(15) NOT NULL,
                          `name` char(10) NOT NULL,
                          `nick` char(10) NOT NULL,
                          `content` text NOT NULL,
                          `regist_day` char(20) DEFAULT NULL,
                          PRIMARY KEY (`num`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'free':
                    $query = "CREATE TABLE `free` (
                          `num` int(11) NOT NULL AUTO_INCREMENT,
                          `id` char(15) NOT NULL,
                          `name` char(10) NOT NULL,
                          `nick` char(10) NOT NULL,
                          `subject` varchar(100) NOT NULL,
                          `content` text NOT NULL,
                          `regist_day` char(20) DEFAULT NULL,
                          `hit` int(11) DEFAULT NULL,
                          `is_html` char(1) DEFAULT NULL,
                          `file_name_0` char(40) DEFAULT NULL,
                          `file_copied_0` char(30) DEFAULT NULL,
                          `file_type_0` char(30) DEFAULT NULL,
                          PRIMARY KEY (`num`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
                    ";
                    break;
                case 'free_ripple':
                    $query = "CREATE TABLE `free_ripple` (
                          `num` int(11) NOT NULL AUTO_INCREMENT,
                          `parent` int(11) NOT NULL,
                          `id` char(15) NOT NULL,
                          `name` char(10) NOT NULL,
                          `nick` char(10) NOT NULL,
                          `content` text NOT NULL,
                          `regist_day` char(20) DEFAULT NULL,
                          PRIMARY KEY (`num`)
                        ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
                    ";
                    break;

                    case 'lostark':
                        $query = "CREATE TABLE lostark (
                            `num` int(11) NOT NULL AUTO_INCREMENT,
                            `nick` char(15) NOT NULL,
                            `name` char(15) NOT NULL,
                            `id` char(15) NOT NULL,
                            `pass1` char(20) NOT NULL,
                            `pass2` char(20) NOT NULL,
                            `email` char(20) NOT NULL,
                            `phone` char(20) NOT NULL,
                            `regist_day` char(20) DEFAULT NULL,
                            `level` int(11) DEFAULT NULL,
                            `point` int(11) DEFAULT NULL,
                            PRIMARY KEY (`num`)
                          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                        ";
                        break;


                default :
                    echo "<script>alert('해당테이블명이 없습니다 . ')</script>";
                    break;

            }
            if (mysqli_query($con, $query)) {
                echo "<script>alert('{$table_name} 테이블이 생성되엇습니다. ')</script>";
            } else {
                echo "<script>alert('{$table_name} 테이블 생성 실패 : '." . mysqli_error($con) . ")</script>";
            }
        }
    }
