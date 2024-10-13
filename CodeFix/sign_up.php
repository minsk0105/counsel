<?php require_once('Common/header.php') ?>
<head>
    <link rel="stylesheet" href="CSS/register.css">
</head>

    <!-- 회원가입 메인 섹션 -->
    <section id="register">

        <div class="register_info">
            <h2 class="section_title">회원가입</h2>

            <form action="Process/register_process.php" method="post">

                <label>
                    <span style="color: #0072BB;">*</span> 이름
                    <?php if (isset($_GET['error_name'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_name']?></span>
                   <?php } ?>
                </label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="실명을 입력해 주세요." value="<?=$_GET['name']?>">
               <?php } else { ?>
                    <input type="text" name="name" placeholder="실명을 입력해 주세요.">
               <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 핸드폰 번호
                    <?php if (isset($_GET['error_phone'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_phone']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['phone'])) { ?>
                    <input type="text" name="phone" placeholder="-를 빼고 입력해 주세요." value="<?=$_GET['phone']?>">
                <?php } else { ?>
                    <input type="text" name="phone" placeholder="-를 빼고 입력해 주세요.">
                <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 이메일
                    <?php if (isset($_GET['error_email'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_email']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['email'])) { ?>
                    <input type="text" name="email" placeholder="이메일을 입력해 주세요." value="<?=$_GET['email']?>">
                <?php } else { ?>
                    <input type="text" name="email" placeholder="이메일을 입력해 주세요.">
                <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 아이디
                    <?php if (isset($_GET['error_id'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_id']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['user_id'])) { ?>
                    <input type="text" name="user_id" placeholder="4자리 이상의 영문 + 숫자" value="<?=$_GET['user_id']?>">
                <?php } else { ?>
                    <input type="text" name="user_id" placeholder="4자리 이상의 영문 + 숫자">
                <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 비밀번호
                    <?php if (isset($_GET['error_pass'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_pass']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['pass'])) { ?>
                    <input type="password" name="pass" placeholder="6-20자 사이의 숫자 + 영문" value="<?=$_GET['pass']?>">
                <?php } else { ?>
                    <input type="password" name="pass" placeholder="6-20자 사이의 숫자 + 영문">
                <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 비밀번호 확인
                    <?php if (isset($_GET['error_check'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_check']?></span>
                    <?php } else if (isset($_GET['error'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['pass_check'])) { ?>
                    <input type="password" name="pass_check" placeholder="비밀번호를 다시 입력해 주세요." value="<?=$_GET['pass_check']?>">
                <?php } else { ?>
                    <input type="password" name="pass_check" placeholder="비밀번호를 다시 입력해 주세요.">
                <?php } ?>

                <label>
                    <span style="color: #0072BB;">*</span> 배송지
                    <?php if (isset($_GET['error_address'])) { ?>
                        <span class="error">&nbsp;-<?=$_GET['error_address']?></span>
                    <?php } ?>
                </label>
                <?php if (isset($_GET['user_address'])) { ?>
                    <input type="text" name="user_address" placeholder="주소를 입력해 주세요. (충선로-105 2012동 1203호)" value="<?=$_GET['user_address']?>">
                <?php } else { ?>
                    <input type="text" name="user_address" placeholder="주소를 입력해 주세요. (충선로-105 2012동 1203호)">
                <?php } ?>

                <button type="submit" class="push_register" name="push_register">회원가입</button>

            </form>
        </div>

    </section>

<?php require_once('Common/footer.php') ?>