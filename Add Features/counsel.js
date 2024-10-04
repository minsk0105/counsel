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
});