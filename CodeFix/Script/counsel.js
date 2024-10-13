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

// 구매상담 신청 아코디언 영역
const accordionBtn = document.querySelectorAll('.category_title');

accordionBtn.forEach(function(btn) {
    btn.addEventListener('click', function(event) {
        const target = event.target;

        accordionBtn.forEach(function(item) {
            const parent = item.parentNode;
            const cherv = parent.querySelector('.category_title i');
            const contents = parent.querySelector('.category_contents');
        
            if (item === target) {
                contents.classList.toggle("show_contents");
                cherv.classList.toggle("rotate_cherv");
            } else {
                contents.classList.remove("show_contents");
                cherv.classList.remove("rotate_cherv");
            }
        });
    
    });
});

/* 신청 버튼 모달창 */
const nonMembersBtn = document.getElementById('non_members');
const membersBtn = document.getElementById('members');
const nonMembersModal = document.querySelector('.non_members_modal');
const membersModal = document.querySelector('.members_modal');
const closeModal = document.querySelectorAll('.close_modal > svg');
const cancelBtn = document.querySelectorAll('.cancel');

nonMembersBtn.addEventListener('click', function() {
    nonMembersModal.classList.add("show_modal");
});

membersBtn.addEventListener('click', function() {
    membersModal.classList.add("show_modal");
});

closeModal.forEach(function(btn) {
    btn.addEventListener('click', function(event) {
        const parentModal = event.target.parentNode.parentNode.parentElement;
    
        parentModal.classList.remove("show_modal");
    });
});

cancelBtn.forEach(function(btn) {
    btn.addEventListener('click', function(event) {
        const parentModal = event.target.parentNode.parentNode.parentElement;
    
        parentModal.classList.remove("show_modal");
    });
});


// 상담 신청 입력란 입력 여부 확인
const submitBtns = document.querySelectorAll('#counsel_form button[type="submit"]');

const inputName = document.getElementById('name');
const inputPhone = document.getElementById('phone');
const inputEmail = document.getElementById('email');
const inputDate = document.getElementById('date');
const inputText = document.getElementById('request');

submitBtns.forEach(function(submitBtn) {
    submitBtn.addEventListener('click', function(event) {
        if (inputName.value === "" || inputPhone.value === "" || inputEmail.value === "" || inputDate.value === "" || inputText.value === "") {
            
            if (inputName.value === "" && inputPhone.value !== "" && inputEmail.value !== "" && inputDate.value !== "" && inputText.value !== "") {
                alert ("성명을 입력해 주세요.");
                inputName.focus();
            }

            else if (inputName.value !== "" && inputPhone.value === "" && inputEmail.value !== "" && inputDate.value !== "" && inputText.value !== "") {
                alert ("전화번호를 입력해 주세요.");
                inputPhone.focus();
            }

            else if (inputName.value !== "" && inputPhone.value !== "" && inputEmail.value === "" && inputDate.value !== "" && inputText.value !== "") {
                alert ("이메일을 입력해 주세요.");
                inputEmail.focus();
            }

            else if (inputName.value !== "" && inputPhone.value !== "" && inputEmail.value !== "" && inputDate.value === "" && inputText.value !== "") {
                alert ("예약일자를 입력해 주세요.");
                inputDate.focus();
            }

            else if (inputName.value !== "" && inputPhone.value !== "" && inputEmail.value !== "" && inputDate.value !== "" && inputText.value === "") {
                alert ("문의사항에 내용을 입력해 주세요.");
                inputText.focus();
            }
            
            else {
                alert("필수 정보를 입력해 주세요.");
                location.href = "#consult";
            }

            
            membersModal.classList.remove("show_modal");
            nonMembersModal.classList.remove("show_modal");
            event.preventDefault();
            return false;
            
        }

        checking(event);
    });
});

//  개인정보처리방침 동의 여부 확인
const agreeCheck = document.getElementById('agree');
let checked;

agreeCheck.addEventListener('change', function() {
    checked = agreeCheck.checked;
});

function checking(check) {
    if (!checked) {
        alert("이용약관 동의란에 체크해 주세요.");
        agreeCheck.focus();
        membersModal.classList.remove("show_modal");
        nonMembersModal.classList.remove("show_modal");
        check.preventDefault();
        return false;
    }
}

/* 비회원 신청 조회 모달창 */
const viewModal = document.querySelector('.view_modal');
const removeView = document.getElementById('remove_view');
const viewCancel = document.getElementById('view_cancel');
const openView = document.getElementById('view_btn');

openView.addEventListener('click', function() {
    viewModal.classList.add("show_view");
});

removeView.addEventListener('click', function() {
    viewModal.classList.remove("show_view");
});

viewCancel.addEventListener('click', function() {
    viewModal.classList.remove("show_view");
});