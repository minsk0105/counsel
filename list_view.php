<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매 상담 신청 폼</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        
    <header class="header">
        <div class="home">
            <a href="index.php" style="display: flex;">
            <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <h2 class="title">구매상담 신청</h2>
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="consult-title">
                <h1>귀하의 상담신청 내역</h1>
                <p>
                    상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                    고객님께 상담전화를 드립니다.
                </p>
                <h2>1010-1010</h2>
            </section>

            <section class="list">
                <div class="list-header">
                    <p class="user-head">
                        <span>신청인 : 나는바보</span>
                        <span>연락처 : 010-1111-7878</span>
                        <span>이메일 : example1234@counsel.com</span>
                    </p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>상담여부</th>
                            <th>문의사항</th>
                            <th>신청일자</th>
                        </tr>
                    </thead>
                    <tbody>
                        <table>
                            <tr class="info-flex">
                                <td>전화상담</td>
                                <td>예약일자 해당하는 주 목요일에 상담 원합니다.</td>
                                <td>2024-10-03</td>
                            </tr>

                            <tr class="info-flex">
                                <td>방문상담</td>
                                <td>4인 가족이 사용할 수 있는 소파 구입 생각하고 있습니다.</td>
                                <td>2024-10-25</td>
                            </tr>
                        </table>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>구매상담 신청</p>
            <div>
                <span>Call: 1010-1010</span>
                <span>Address: 인천광역시 부평구 화랑로</span>
                <span>Tel: 010-1111-2222</span><br>
                <span>Company: (주)아이퀘스트</span><br>
                <span>Copyright&copy;HRDKOREA LoremCompany 2024</span>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID"></script> 

</body>
</html>