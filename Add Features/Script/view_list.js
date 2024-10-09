const listTr = document.querySelectorAll('tbody > tr');

listTr.forEach(function(tr, index) {
    for (let i = 0; i <= listTr.length; i++) {
        const odd = i % 2 === 0;

        if (odd) {
            if (i === index + 1) {
                tr.classList.add("push_color");
            }
        }
    }
});