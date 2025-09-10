// Hiệu ứng thay đổi header khi cuộn
export function setupHeaderScrollEffect() {
  window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    if (header) {
      header.style.background =
        window.scrollY > 100
          ? 'rgba(255, 255, 255, 0.98)'
          : 'rgba(255, 255, 255, 0.95)';
    }
  });
}
