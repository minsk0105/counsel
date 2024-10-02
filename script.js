const wrap = document.querySelector('.wrap');
const titles = wrap.querySelectorAll('.category-title');

titles.forEach(function(item) {
    item.addEventListener('click', function() {
        const content = this.children[1];
        const title = content.parentNode;
        const bar = item.querySelector('.under');
        
        titles.forEach(function(item) {
            const box = item.querySelector(".category-contents");
            if (item === title) {
                box.classList.toggle("open");
            } else {
                box.classList.remove("open");
            }
        });

        bar.classList.toggle("rotate");
    });
});

const closeBtn = document.getElementById('close-modal');
const cancel = document.getElementById('cancel');
const modal = document.querySelector('.app-inquiry');
const openBtn = document.getElementById('read-list');

closeBtn.addEventListener('click', function() {
    modal.classList.add("close-toggle");
});

cancel.addEventListener('click', function() {
    modal.classList.add("close-toggle");
});

openBtn.addEventListener('click', function() {
    modal.classList.remove("close-toggle");
});

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

  document.addEventListener("DOMContentLoaded", function () {
    
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