// Xử lý nút Ứng Tuyển / Lưu Tin
export function setupJobCardActions() {
  document.querySelectorAll('.btn-apply').forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      alert('Chuyển đến trang ứng tuyển');
    });
  });

  document.querySelectorAll('.btn-save').forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      this.style.background = '#28a745';
      this.style.color = 'white';
      this.textContent = 'Đã Lưu';
    });
  });
}