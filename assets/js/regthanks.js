const regNoticeClose = document.querySelector('.reg__notice-close')

regNoticeClose.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = '/';
  });