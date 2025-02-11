<?php
    session_start();
    require_once('Common/header.php');
?>
<head>
    <link rel="stylesheet" href="CSS/counsel.css">
</head>

    <!-- 비주얼 영역 -->
    <section id="visual">
        <img src="https://interiorteacher.com/_next/image?url=https%3A%2F%2Fstatic.interiorteacher.com%2Fwidget%2Fmain%2Fbackground%2F43%2Fundefined%EA%B7%B8%EB%9D%BC%EB%8D%B0_pc_52749486.jpg&w=1920&q=80" alt="visual-img">

        <div class="visual_container">
            <div class="text_contents">
                <p>구매 컨설팅</p>
                <h1>
                    구매상담 신청
                </h1>
                <div class="button_menu">
                    <a href="#">구매상담 신청</a>
                    <a type="button" id="view_btn">비회원 신청 조회</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 비회원 신청 조회 모달창 -->
    <div class="view_modal">

        <form action="Process/list_process.php" method="post">

            <div class="view_box">
                <div class="close_view_box">
                    <svg id="remove_view" width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99165 9.40191L16.0605 3.33301L16.6498 3.92226L10.5809 9.99116L16.6495 16.0597L16.0602 16.649L9.99165 10.5804L3.92307 16.649L3.33381 16.0597L9.40239 9.99116L3.3335 3.92226L3.92275 3.33301L9.99165 9.40191Z" fill="currentColor"></path>
                    </svg>
                </div>
                <h2>비회원 신청 조회</h2>

                <label><span style="color: #0072BB;">*</span> 성명</label>
                <input type="text" name="name" id="viewName" placeholder="성명">

                <label><span style="color: #0072BB;">*</span> 전화번호</label>
                <input type="text" name="phone" id="viewTel" placeholder="01012345678">

                <ul>
                    <li><p>- 구매 상담 신청 시 인증 받은 성명과 휴대폰 번호를 입력하시면 구매 상담 신청 내역을 확인하실 수 있습니다.</p></li>
                    <li><p>- 회원이신 경우 마이페이지 > 나의 상담 신청 내역에서 확인 가능합니다.</p></li>
                </ul>

                <div class="view_submit">
                    <button type="button" id="view_cancel">취소</button>
                    <button type="submit" id="push_view" name="nons">확인</button>
                </div>
            </div>
            
        </form>

    </div>

    <!-- 구매상담 신청 영역 -->
    <section id="consult">

        <div class="consult_container">

            <!-- 섹션 타이틀 -->
            <div class="consult_title">
                <h1>구매상담 신청</h1>
                <p>
                    상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                    고객님께 상담전화를 드립니다.
                </p>
                <h2>5300-5300</h2>
            </div>

            <form action="Process/counsel_process.php" method="post" id="counsel_form" enctype="multipart/form-data">

                <!-- 상담 신청 폼 -->
                <div class="user_counsel">

                    <?php if (isset($_SESSION['mb_name'])) { ?>
                        <!-- 상담유형 -->
                        <dl>
                            <dt><span>*</span> 상담유형</dt>
                            <dd>
                                <input type="radio" name="way" value="전화상담" checked><span>전화상담</span>
                                <input type="radio" name="way" value="방문상담"><span>방문상담</span>
                            </dd>
                        </dl>
                        
                        <!-- 이름 -->
                        <dl>
                            <dt><span>*</span> 이름</dt>
                            <dd><input type="text" name="name" id="name" placeholder="이름" value="<?= $_SESSION['mb_name'] ?>"></dd>
                        </dl>
                        
                        <!-- 휴대전화 번호 -->
                        <dl>
                            <dt><span>*</span> 휴대전화 번호</dt>
                            <dd><input type="text" name="phone" id="phone" placeholder="01012345678" value="<?= $_SESSION['mb_phone'] ?>"></dd>
                        </dl>
                        
                        <!-- 이메일 -->
                        <dl>
                            <dt><span>*</span> 이메일</dt>
                            <dd><input type="text" name="email" id="email" placeholder="consult@example.com" value="<?= $_SESSION['mb_email'] ?>"></dd>
                        </dl>
                        
                        <!-- 예약일자 -->
                        <dl>
                            <dt><span>*</span> 예약 일자</dt>
                            <dd><input type="text" name="date" id="date" placeholder="2000-00-00"></dd>
                        </dl>
                        
                        <!-- 문의사항 -->
                        <dl>
                            <dt><span>*</span> 문의사항</dt>
                            <dd><textarea name="request" id="request"></textarea></dd>
                            <dd>
                                <p class="request_comment">
                                    원하시는 상담 시간이 있는 경우에는 희망시간을 함께<br>
                                    남겨주시기 바랍니다.
                                </p>
                            </dd>
                        </dl>

                        <!-- 파일 첨부 -->
                        <dl>
                            <dt><span>*</span> 파일 첨부</dt>
                            <dd style="display: flex;">
                                <input type="file" name="upFile" id="upFile" hidden>
                                <label for="upFile" name="upFile" class="checkFile">파일 업로드</label>
                                <span class="file_name"></span>
                            </dd>
                        </dl>
                        
                        <!-- 개인정보처리방침 -->
                        <dl style="position: relative;">
                            <dt class="personal_dd">
                                <p><span>*</span>&nbsp;개인정보 취급방침 (필수)</p>
                                <p><input type="checkbox" name="agree" id="agree">이용약관 동의</p>
                            </dt>
                            <dd>
                                <p class="rule_info">
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
                    <?php } else { ?>
                        <!-- 상담유형 -->
                        <dl>
                            <dt><span>*</span> 상담유형</dt>
                            <dd>
                                <input type="radio" name="way" value="전화상담" checked><span>전화상담</span>
                                <input type="radio" name="way" value="방문상담"><span>방문상담</span>
                            </dd>
                        </dl>
                        
                        <!-- 이름 -->
                        <dl>
                            <dt><span>*</span> 이름</dt>
                            <dd><input type="text" name="name" id="name" placeholder="이름"></dd>
                        </dl>
                        
                        <!-- 휴대전화 번호 -->
                        <dl>
                            <dt><span>*</span> 휴대전화 번호</dt>
                            <dd><input type="text" name="phone" id="phone" placeholder="01012345678"></dd>
                        </dl>
                        
                        <!-- 이메일 -->
                        <dl>
                            <dt><span>*</span> 이메일</dt>
                            <dd><input type="text" name="email" id="email" placeholder="consult@example.com"></dd>
                        </dl>
                        
                        <!-- 예약일자 -->
                        <dl>
                            <dt><span>*</span> 예약 일자</dt>
                            <dd><input type="text" name="date" id="date" placeholder="2000-00-00"></dd>
                        </dl>
                        
                        <!-- 문의사항 -->
                        <dl>
                            <dt><span>*</span> 문의사항</dt>
                            <dd><textarea name="request" id="request"></textarea></dd>
                            <dd>
                                <p class="request_comment">
                                    원하시는 상담 시간이 있는 경우에는 희망시간을 함께<br>
                                    남겨주시기 바랍니다.
                                </p>
                            </dd>
                        </dl>

                        <!-- 파일 첨부 -->
                        <dl>
                            <dt><span>*</span> 파일 첨부</dt>
                            <dd style="display: flex;">
                                <input type="file" name="upFile" id="upFile" hidden>
                                <label for="upFile" name="upFile" class="checkFile">파일 업로드</label>
                                <span class="file_name"></span>
                            </dd>
                        </dl>
                        
                        <!-- 개인정보처리방침 -->
                        <dl style="position: relative;">
                            <dt class="personal_dd">
                                <p><span>*</span>&nbsp;개인정보 취급방침 (필수)</p>
                                <p><input type="checkbox" name="agree" id="agree">이용약관 동의</p>
                            </dt>
                            <dd>
                                <p class="rule_info">
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
                    <?php } ?>
                        
                </div>

                <!-- 상담받을 제품 선택란 및 사용자 주변 서비스 센터 지도 -->
                <div class="select_category">
                    <div class="category_wrap">
                        <div class="category_title">
                            <p>
                                <span>제품 선택</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </p>
                        </div>
                        <div class="category_contents"></div>
                    </div>

                    <div class="category_wrap">
                        <div class="category_title">
                            <p>
                                <span>대리점/서비스센터</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </p>
                        </div>
                        <div class="category_contents map_container" style="border-bottom: 1px solid rgb(196, 196, 196);">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

                <!-- 신청 버튼 -->
                <div class="counsel-submit_button">
                    <!-- 회원으로 신청 버튼 및 회원 신청 모달창  -->
                    <button type="button" id="members" value="members">회원으로 신청</button>

                    <div class="members_modal">
                        
                        <div class="modal_box">
                            <div class="close_modal">
                                <svg id="remove_non_members" width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99165 9.40191L16.0605 3.33301L16.6498 3.92226L10.5809 9.99116L16.6495 16.0597L16.0602 16.649L9.99165 10.5804L3.92307 16.649L3.33381 16.0597L9.40239 9.99116L3.3335 3.92226L3.92275 3.33301L9.99165 9.40191Z" fill="currentColor"></path>
                                </svg>
                            </div>

                            <h2>회원 신청</h2>
                            <p>회원 신청을 하시겠습니까?</p>

                            <div class="modal_button">
                                <button type="button" class="cancel">취소</button>
                                <button type="submit" name="members">확인</button>
                            </div>
                        </div>

                    </div>

                    <!-- 비회원으로 신청 버튼 및 비회원 신청 모달창  -->
                    <button type="button" id="non_members" value="non_members">비회원으로 신청</button>

                    <div class="non_members_modal">
                        
                        <div class="modal_box">
                            <div class="close_modal">
                                <svg id="remove_non_members" width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99165 9.40191L16.0605 3.33301L16.6498 3.92226L10.5809 9.99116L16.6495 16.0597L16.0602 16.649L9.99165 10.5804L3.92307 16.649L3.33381 16.0597L9.40239 9.99116L3.3335 3.92226L3.92275 3.33301L9.99165 9.40191Z" fill="currentColor"></path>
                                </svg>
                            </div>

                            <h2>비회원 신청</h2>
                            <p>비회원 신청을 하시겠습니까?</p>

                            <div class="modal_button">
                                <button type="button" class="cancel">취소</button>
                                <button type="submit" name="non_members">확인</button>
                            </div>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </section>

    <!-- 네이버 오픈 API -->
    <script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID"></script>
    <script src="Script/counsel.js"></script>

<?php require_once('Common/footer.php'); ?>