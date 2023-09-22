$(document).ready(function () {
  // Lắng nghe sự kiện khi bạn bấm vào thẻ <a>
  $(".nav-link").click(function () {
    // Loại bỏ lớp "active" từ tất cả các thẻ <a>
    $(".nav-link").removeClass("active");

    // Thêm lớp "active" vào thẻ <a> được bấm
    $(this).addClass("active");

    // Lưu trạng thái menu vào localStorage
    var selectedTab = $(this).attr("href");
    localStorage.setItem("selectedTab", selectedTab);
  });

  // Kiểm tra xem có trạng thái menu được lưu trong localStorage không
  var savedTab = localStorage.getItem("selectedTab");
  if (savedTab) {
    // Khi trang tải, đặt lớp "active" cho tab đã được lưu trạng thái
    $(".nav-link[href='" + savedTab + "']").addClass("active");
  }
});
