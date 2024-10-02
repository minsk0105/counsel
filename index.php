<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매 상담 신청 폼</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <form action="data_action.php" method="post">
        
        <header class="header">
            <div class="home">
                <i class="fa-solid fa-house"></i>
            </div>
            <h2 class="title">구매상담 신청</h2>
            <div class="bars">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
        
        <main>
            <div class="container">
                
                <section class="consult-title">
                    <h1>구매상담 신청</h1>
                    <p>
                        상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                        고객님께 상담전화를 드립니다.
                    </p>
                    <h2>1010-1010</h2>
                </section>
                
                <section class="user-info">
                    <dl>
                        <dt>상담유형</dt>
                        <dd>
                            <input type="radio" name="way" id="tel" value="전화상담" checked>전화상담
                            <input type="radio" name="way" id="visit" value="방문상담">방문상담
                        </dd>
                    </dl>
                    <dl>
                        <dt>이름</dt>
                        <dd><input type="text" name="name"></dd>
                    </dl>
                    <dl>
                        <dt>연락처</dt>
                        <dd><input type="text" name="phone" placeholder="ex) 010 - 0000 - 0000"></dd>
                    </dl>
                    <dl>
                        <dt>이메일</dt>
                        <dd><input type="text" name="email" placeholder="consult@example.com"></dd>
                    </dl>
                    <dl>
                        <dt>예약일자</dt>
                        <dd><input type="text" name="date" placeholder="ex) 2024 - 00 - 00"></dd>
                    </dl>
                    <dl>
                        <dt>무엇을 도와드릴까요?</dt>
                        <dd>
                            <textarea name="request"></textarea>
                        </dd>
                        <dd>
                            <p class="comment">
                                원하시는 상담 시간이 있는 경우에는 희망시간을 함께<br>
                                남겨주시기 바랍니다.
                            </p>
                        </dd>
                    </dl>
                    <dl style="position: relative;">
                        <dt>개인정보 취급방침 <span>(필수)</span></dt>
                        <dd class="agree"><input type="checkbox" name="agree">이용확인 동의</dd>
                        <dd class="rule-box">
                            <p class="rule-info">
                                (주)LoremCompany(이하 “회사”라 함)은 통신비밀보호법, 전기통신사업법, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 등 정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호 규정을 준수하며, 관련 법령에 의거한 개인정보처리방침을 정하여 이용자 권익 보호에 최선을 다하고 있습니다. 회사의 개인정보처리방침은 관련 법률 및 지침에 따라 변경될 수 있고 개정의 경우 7일전에 홈페이지를 통해 고지할 것 입니다. 회사의 개인정보처리방침은 다음과 같은 내용을 담고 있습니다.<br><br>
                                                        
                                1. 수집하는 개인정보의 항목<br>
                                회사는 회원가입, 상담, 서비스 신청 및 제공 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br><br>
                                                        
                                - 이름, 연락처, 이메일주소 등<br>
                                또한 서비스 이용과정이나 사업 처리 과정에서 아래와 같은 정보들이 생성되어 수집될 수 있습니다.<br><br>
                                                        
                                - 서비스 이용기록, 접속 로그, 쿠키, 접속 IP 정보, 방문일시, 브라우저종류 및 os, 검색어, 결제기록, 이용정지기록, 상담기록<br><br>
                                                        
                                2. 개인정보의 수집 및 이용목적<br>
                                회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br><br>
                                                        
                                가. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br>
                                콘텐츠 제공, 물품배송 또는 청구서 등 발송, 금융거래 본인 인증 및 금융 서비스, 구매 및 요금 결재, 요금추심<br><br>
                                                        
                                나. 회원 관리<br>
                                회원제 서비스 이용에 따른 본인확인, 개인식별, 불량회원의 부정 이용 방지와 비인가 사용 방지, 가입 의사 확인, 가입 및 가입횟수 제한, 만14세 미만 아동 개인정보 수집 시 법정 대리인 동의여부 확인, 추후 법정 대리인 본인확인, 분쟁 조정을 위한 기록보존, 불만처리 등 민원처리, 고지사항 전달<br><br>
                                                        
                                다. 마케팅 및 광고에 활용<br>
                                신규 서비스(제품) 개발 및 특화, 인구통계학적 특성에 따른 서비스 제공 및 광고 게재, 접속 빈도 파악, 회원의 서비스 이용에 대한 통계, 이벤트 등 광고성 정보 전달<br><br>
                                                        
                                3. 개인정보의 보유/이용기간<br>
                                이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.<br>
                                단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br><br>
                                                        
                                가. 회사 내부 방침에 의한 정보보유 사유<br>
                                - 부정이용기록<br>
                                  보존 이유 : 부정 이용 방지<br>
                                  보존 기간 : 1년<br><br>
                                                        
                                나. 관련법령에 의한 정보보유 사유<br>
                                상법, 전자상거래 등에서의 소비자보호 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다. <br><br>
                                                        
                                - 계약 또는 청약철회 등에 관한 기록<br>
                                  보존 이유 : 전자상거래 등에서의 소비자보호에<br>
                                  관한 법률<br>
                                  보존 기간 : 5년<br><br>
                                                        
                                - 대금결제 및 재화 등의 공급에 관한 기록<br>
                                  보존 이유 : 전자상거래 등에서의 소비자보호에<br>
                                  관한 법률<br>
                                  보존 기간 : 5년<br><br>
                                                        
                                - 소비자의 불만 또는 분쟁처리에 관한 기록<br>
                                  보존 이유 : 전자상거래 등에서의 소비자보호에<br>
                                  관한 법률<br>
                                  보존 기간 : 3년<br><br>
                                                        
                                - 본인확인에 관한 기록<br>
                                  보존 이유 : 정보통신 이용촉진 및 정보보호 등에<br>
                                  관한 법률<br>
                                  보존 기간 : 6개월<br><br>
                                                        
                                - 방문에 관한 기록<br>
                                  보존 이유 : 통신비밀보호법<br>
                                  보존 기간 : 3개월<br>
                            </p>
                        </dd>
                    </dl>
                </section>
                
                <section class="user-category">
    
                    <div class="contents-box">
    
                        <div class="wrap">
                            <div class="category-title">
                                <div class="category-header">
                                    <h3>제품 선택</h3>
                                    <i class="fa-solid fa-chevron-down under"></i>
                                </div>
                                <div class="category-contents">
                                    <div class="select-option">
                                        <div class="product-list">
                                            
                                            <ul>
                                                <li>전체</li>
                                                <li>소파</li>
                                                <li>테이블</li>
                                                <li>의자</li>
                                                <li>수납/선반장</li>
                                                <li>조명</li>
                                                <li>러그</li>
                                                <li>소품</li>
                                                <li>오디오</li>
                                                <li>침대</li>
                                            </ul>

                                        </div>

                                        <div class="more-category">
                                            <div class="category-btn">
                                                스타일
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="category-btn">
                                                색상
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="category-btn">
                                                브랜드
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="category-btn">
                                                정렬
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                            <div class="reset">
                                                <i class="fa-solid fa-arrow-rotate-right"></i>
                                                초기화
                                            </div>
                                        </div>

                                        <div class="product-sort">
                                            <div class="sort-box">상품</div>
                                            <div class="sort-box">상품</div>
                                            <div class="sort-box">상품</div>
                                            <div class="sort-box">상품</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="category-title">
                                <div class="category-header">
                                    <h3>대리점/서비스센터</h3>
                                    <i class="fa-solid fa-chevron-down under"></i>
                                </div>
                                <div class="category-contents map-container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>

                        <div class="button">
                            <input type="submit" value="상담신청">
                            <button type="button" id="read-list">신청목록 조회</button>
                        </div>
    
                    </div>
    
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

        <div class="app-inquiry close-toggle">

            <div class="app-box">
                <i class="fa-solid fa-x" id="close-modal"></i>
                <h2>신청조회</h2>
                <div class="input-box">
                    <p><span>성명</span><input type="text" name="name"></p>
                    <p><span>전화번호</span><input type="text" name="phone" placeholder="ex) 010 - 0000 - 0000"></p>
                </div>
                <ul>
                    <li><p>구매 상담 신청 시 인증 받은 성명과 휴대폰 번호를 입력하시면 구매 상담 신청 내역을 확인하실 수 있습니다.</p></li>
                    <li><p>회원이신 경우 마이페이지 > 구매 상담 신청 내역에서 확인 가능합니다.</p></li>
                </ul>
                <div class="app-submit">
                    <button type="button" id="cancel">취소</button>
                    <input type="submit" value="다음">
                </div>
            </div>

        </div>

    </form>

    <script src="script.js"></script>
    <script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID"></script>

</body>
</html>