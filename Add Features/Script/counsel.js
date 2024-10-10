// 헤더 메뉴 스크롤 감지 효과
const headerMenu = document.getElementById('header');

window.addEventListener('scroll', function() {
    const clientHeight = this.scrollY;
    const topHeight = headerMenu.offsetHeight;

    if (topHeight < clientHeight) {
        headerMenu.classList.add("header_change");
    } else {
        headerMenu.classList.remove("header_change");
    }

    // 탑 버튼 스크롤 감지
    const topBtn = document.querySelector('.top');

    if (clientHeight >= 600) {
        topBtn.classList.add("visible_top");
    } else {
        topBtn.classList.remove("visible_top");
    }
});

// 푸터 이용안내 드롭다운 메뉴
const guideBtn = document.getElementById('guide_btn');
const guideMenu = document.querySelector('.guide-menu');
const plusBtn = document.getElementById('plus');
const minusBtn = document.getElementById('minus');

guideBtn.addEventListener('click', function() {
    guideMenu.classList.toggle("drop-up");

    if (guideMenu.classList.contains("drop-up")) {
        plusBtn.style.display = 'none';
        minusBtn.style.display = 'block';
    } else {
        plusBtn.style.display = 'block';
        minusBtn.style.display = 'none';
    }
});

plusBtn.addEventListener('click', function() {
    plusBtn.style.display = 'none';
    minusBtn.style.display = 'block';
    guideMenu.classList.add("drop-up");
});

minusBtn.addEventListener('click', function() {
    minusBtn.style.display = 'none';
    plusBtn.style.display = 'block';
    guideMenu.classList.remove("drop-up");
});

// 비회원 신청 조회
const viewBtn = document.getElementById('view-list_button');
const modal = document.querySelector('.modal');
const cancelBtn = document.getElementById('cancel');
const closeModal = document.getElementById('remove-modal');

viewBtn.addEventListener('click', function() {
    modal.classList.add("show-modal");
});

cancelBtn.addEventListener('click', function() {
    modal.classList.remove("show-modal");
});

closeModal.addEventListener('click', function() {
    modal.classList.remove("show-modal");
});

// 구매상담 신청 아코디언 영역
const accordionBtn = document.querySelectorAll('.category_title');

accordionBtn.forEach(function(btn) {
    btn.addEventListener('click', function(event) {
        const target = event.target;
        
        accordionBtn.forEach(function(item) {
            const parent = item.parentNode;
            const contents = parent.querySelector('.category_contents');

            if (item === target) {
                contents.classList.toggle("show-contents");
            } else {
                contents.classList.remove("show-contents");
            }
        });

    });
});

// Geolocation API를 사용한 GPS 지도 생성

// 현재 위치 값을 저장할 객체
let currentLocation = {
    lat: null,
    lng: null,
};
  
// 성공적으로 위치를 가져온 경우 실행되는 함수
const success = (location) => {
  currentLocation.lat = location.coords.latitude;
  currentLocation.lng = location.coords.longitude;
  console.log("Current Location:", currentLocation);
};

// 위치를 가져오는 데 실패한 경우 실행되는 함수
const error = () => {
  // 서울시청의 좌표로 설정
  currentLocation.lat = 37.5666103;
  currentLocation.lng = 126.9783882;
  console.log("Location not found. Defaulting to Seoul:", currentLocation);
};

// Geolocation API를 사용하여 현재 위치 가져오기
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success, error);
} else {
  console.warn("Geolocation is not supported by this browser.");
  error(); // Geolocation이 지원되지 않을 경우 기본값 설정
}

document.addEventListener('DOMContentLoaded', function() {
    if (currentLocation.lat !== 0 && currentLocation.lng !== 0) {
        // 현재 내 위치를 중심으로 하는 지도 생성
        const map = new naver.maps.Map("map", {
            // 지도 초기 중심 좌표
            center: new naver.maps.LatLng(currentLocation.lat, currentLocation.lng),
            // 지도 초기 줌 레벨
            zoom: 15,
            // 지도 최소 줌 레벨
            minZoom: 10,
            // 줌 컨트롤 표시 여부
            zoomControl: true,
            // 지도 유형 컨트롤 표시 여부
            mapTypeControl: true,
            // 줌 컨트롤의 옵션
            zoomControlOptions: {
                // 줌 컨트롤의 위치를 우측 상단으로 배치함
                position: naver.maps.Position.TOP_RIGHT,
            },
            // 지도 데이터 저작권 컨트롤 표시 여부
            mapDataControl: false,
        });
    }
});

/* 회원/비회원 상담 신청 */
const members = document.getElementById('members');
const nonMembers = document.getElementById('non-members');
const nonMembersModal = document.querySelector('.non-members-order_modal');
const nonMembersCancel = document.getElementById('non-members-cancel');
const nonMembersXmark = document.getElementById('remove-non-members');

nonMembers.addEventListener('click', function() {
    nonMembersModal.classList.add("show-modal");
});

nonMembersCancel.addEventListener('click', function() {
    nonMembersModal.classList.remove("show-modal");
});

nonMembersXmark.addEventListener('click', function() {
    nonMembersModal.classList.remove("show-modal");
});

// 필수 사항 입력 여부 확인
const inputName = document.getElementById('name');
const inputPhone = document.getElementById('phone');
const inputEmail = document.getElementById('email');
const inputDate = document.getElementById('date');
const textRequest = document.getElementById('request');
const submitBtn = document.getElementById('insert_button');

submitBtn.addEventListener('click', function(event) {
    if (inputName.value === "" || inputPhone.value === "" ||
        inputEmail.value === "" || inputDate.value === "" ||
        textRequest.value === "") {

            if (inputName.value === "" && inputPhone.value !== "" &&
                inputEmail.value !== "" && inputDate.value !== "" &&
                textRequest.value !== "") {
                    alert("성명을 입력해 주세요.");
                    inputName.focus();
                    return false;
                } else if (inputName.value !== "" && inputPhone.value === "" &&
                    inputEmail.value !== "" && inputDate.value !== "" &&
                    textRequest.value !== "") {
                        alert("전화번호를 입력해 주세요.");
                        inputPhone.focus();
                        return false;
                    } else if (inputName.value !== "" && inputPhone.value !== "" &&
                        inputEmail.value === "" && inputDate.value !== "" &&
                        textRequest.value !== "") {
                            alert("이메일을 입력해 주세요.");
                            inputEmail.focus();
                            return false;
                        } else if (inputName.value !== "" && inputPhone.value !== "" &&
                            inputEmail.value !== "" && inputDate.value === "" &&
                            textRequest.value !== "") {
                                alert("예약일자를 입력해 주세요.");
                                inputDate.focus();
                                return false;
                            } else if (inputName.value !== "" && inputPhone.value !== "" &&
                                inputEmail.value !== "" && inputDate.value !== "" &&
                                textRequest.value === "") {
                                    alert("문의하실 내용을 입력해 주세요.");
                                    textRequest.focus();
                                    return false;
                                } else {
                                    alert("필수 정보를 입력해 주세요.");
                                    location.href = "#main";
                                    return false;
                                }
                                
        nonMembersModal.classList.remove("show-modal");
        event.preventDefault();
        return false;
    }
    checking(event);
});

const viewName = document.getElementById('view-name');
const viewPhone = document.getElementById('view-phone');
const viewSubmitBtn = document.getElementById('view-submit');

viewSubmitBtn.addEventListener('click', function(event) {

    if (viewName.value === '' || viewPhone.value === '') {
        if (viewName.value === '' && viewPhone.value !== '') {
            alert("성명을 입력해 주세요.");
            viewName.focus();
        } else if (viewName.value !== '' && viewPhone.value === '') {
            alert("전화 번호를 입력해 주세요.");
            viewPhone.focus();
        } else {
            alert("신청 내역을 조회할 정보를 입력해 주세요.");
        }

        event.preventDefault();
        return false;
    }

});

// 개인정보처리방침 동의 여부 확인
const agreeCheck = document.getElementById('agree');
let checked;

agreeCheck.addEventListener('change', function() {
    checked = agreeCheck.checked;
});

function checking(check) {
    if (!checked) {
        alert("이용약관 동의란에 체크해 주세요.");
        nonMembersModal.classList.remove("show-modal");
        check.preventDefault();
        return false;
    }
}