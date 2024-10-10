<?php

    // trim() 함수, stripslashes() 함수, htmlspecialchars 함수

    echo '<br><br>** trim() **<br><br>';
    // 가장자리 공백을 없애줌

    $trim_str = "     abc 123 abc 123 abc     ";
    echo $trim_str;
    echo '<br>';
    echo strlen($trim_str);
    echo '<br>';
    $trim = trim($trim_str);
    echo strlen($trim);

    echo '<br><br><br><br>';

    echo '<br><br>** stripslashes() **<br><br>';

    $stripslashes_str = '나는 "초콜릿"을 좋아해';
    echo $stripslashes_str;
    echo '<br>';
    echo addslashes($stripslashes_str);
    echo '<br>';
    $stripslashes_str2 = "aaa\bbb\aaa\bbb\aaa";
    echo $stripslashes_str2;
    echo '<br>';
    echo stripslashes($stripslashes_str2);

    // 스크립트를 html화 시킴(해킹 시도 무력화)
    echo '<br><br>** htmlspecialchars() **<br><br>';

    $htmlspecialchars_str = '<script>alert("넌 해킹 당했어")</script>';
    echo htmlspecialchars($htmlspecialchars_str);

?>