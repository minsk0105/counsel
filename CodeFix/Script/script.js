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
const guideMenu = document.querySelector('.guide_menu');
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

// 사이드바 토글 효과
const showBarBtn = document.getElementById('show_bar');
const removeBarBtn = document.getElementById('remove_bar');
const barWrap = document.getElementById('bar_wrap');
const barBox = document.querySelector('.bar_box');

showBarBtn.addEventListener('click', function() {
    barWrap.classList.remove("show_wrap");
    barBox.classList.add("show_bar");
});

removeBarBtn.addEventListener('click', function() {
    barWrap.classList.add("show_wrap");
    barBox.classList.remove("show_bar");
});