<?php require_once('Common/header.php') ?>
<head>
    <link rel="stylesheet" href="CSS/register.css">
</head>

    <!-- 회원가입 메인 섹션 -->
    <section id="register">

        <div class="register_info">
            <h2 class="section_title">회원가입</h2>

            <form action="" method="post">
            
                <label><span style="color: #0072BB;">*</span> 이름</label>
                <input type="text" name="name" placeholder="실명을 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 핸드폰 번호</label>
                <input type="text" name="phone" placeholder="-를 빼고 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 이메일</label>
                <input type="text" name="email" placeholder="이메일을 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 아이디</label>
                <input type="text" name="user_id" placeholder="4자리 이상의 영문 + 숫자">

                <label><span style="color: #0072BB;">*</span> 비밀번호</label>
                <input type="password" name="pass" placeholder="6-20자 사이의 숫자 + 영문">

                <label><span style="color: #0072BB;">*</span> 비밀번호 확인</label>
                <input type="password" name="pass_check" placeholder="비밀번호를 다시 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 배송지</label>
                <input type="text" name="user_address" placeholder="주소를 입력해 주세요. (충선로-105 2012동 1203호)">

                <button type="button" class="push_register">회원가입</button>

            </form>
        </div>

    </section>

<?php require_once('Common/footer.php') ?>