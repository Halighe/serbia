const fbNoticeClose = document.querySelector('.fb__notice-close')

fbNoticeClose.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = '/';
  });