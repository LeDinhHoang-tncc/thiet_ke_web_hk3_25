// 	Click vào ngành nghề hiển thị thông báo
export function setupCategoryClicks() {
  document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('click', function () {
      const title = this.querySelector('.category-title')?.textContent;
      if (title) {
        alert(`Xem tất cả việc làm trong ngành: ${title}`);
      }
    });
  });
}
