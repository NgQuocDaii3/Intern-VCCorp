//menu
const menuToggle = document.getElementById('menuToggle');
const megaMenu = document.getElementById('megaMenu');
let isOpen = false;

menuToggle.addEventListener('click', function (e) {
  e.preventDefault();
  isOpen = !isOpen;

  // click biểu tượng
  const icon = menuToggle.querySelector('i');
  icon.classList.toggle('fa-bars', !isOpen);
  icon.classList.toggle('fa-times', isOpen);

  megaMenu.classList.toggle('d-none', !isOpen);
});


// xem thêm
const btn = document.getElementById("load-more");
const loading = document.getElementById("loading");
const newsList = document.getElementById("news-list");
const wrapper = document.getElementById("load-more-wrapper");
const container = document.getElementById("news-container");

let expanded = false; // Trạng thái hiện tại: chưa mở

btn.addEventListener("click", function () {
  btn.style.display = "none";
  loading.style.display = "block";

  setTimeout(() => {
    loading.style.display = "none";
    btn.style.display = "inline-block";

    if (!expanded) {
      // Hiện bài viết
      newsList.style.display = "block";
      btn.textContent = "Thu gọn";
      container.appendChild(wrapper);
    } else {
      // Ẩn bài viết
      newsList.style.display = "none";
      btn.textContent = "Xem thêm";
      container.appendChild(wrapper);
    }

    expanded = !expanded; // Đảo trạng thái
  }, 500);
});








