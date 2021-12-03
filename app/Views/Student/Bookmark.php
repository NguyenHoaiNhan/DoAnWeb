<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
  <meta charset="UTF-8" />
  <title>QuickQuiz | Đánh dấu</title>
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/app/css/Student/Bookmark.css" />
  <!-- Boxiocns CDN Link -->
  <link type="text/css" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- NAVIGATION BAR -->
  <div class="sidebar close">
    <div class="logo-details">
      <i class="bx bx-chevrons-right"></i>
      <span class="logo_name">QuickQuiz</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="<?= base_url()?>/app/Views/Student/Home.php">
          <i class="bx bxs-home"></i>
          <span class="link_name">Trang chủ</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="<?= base_url()?>/app/Views/Student/Discussion.php">
            <i class="bx bxl-telegram"></i>
            <span class="link_name">Thảo luận</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">Toan10 - Đa thức</a></li>
          <li><a href="#">VatLy10 - Con lắc</a></li>
          <li><a href="#">HoaHoc10 - Chất béo</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="<?= base_url()?>/app/Views/Student/Analysis.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="link_name">Thống kê</span>
          </a>
          <!-- <i class="bx bxs-chevron-down arrow"></i> -->
        </div>
        <!-- <ul class="sub-menu">
            <li><a class="link_name" href="#">Theo dõi</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Login Form</a></li>
            <li><a href="#">Card Design</a></li>
          </ul> -->
      </li>
      <li>
        <a href="<?= base_url()?>/app/Views/Student/Bookmark.php">
          <i class="bx bxs-bookmarks"></i>
          <span class="link_name">Đánh dấu</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="<?= base_url()?>/app/Views/Student/Account.php">
          <i class="bx bxs-user-circle"></i>
          <span class="link_name">Tài khoản</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Cài đặt</a></li>
        </ul>
      </li>
      <!-- <li>
          <div class="iocn-link">
            <a href="#">
              <i class="bx bx-plug"></i>
              <span class="link_name">Plugins</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Plugins</a></li>
            <li><a href="#">UI Face</a></li>
            <li><a href="#">Pigments</a></li>
            <li><a href="#">Box Icons</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-compass"></i>
            <span class="link_name">Explore</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Explore</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-history"></i>
            <span class="link_name">History</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">History</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="link_name">Setting</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Setting</a></li>
          </ul>
        </li> -->
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Nguyễn Tấn Ngà</div>
            <div class="job">Học sinh lớp 10</div>
          </div>
          <i class="bx bx-log-out"></i>
        </div>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="hs__header">
      <div class="searchbox">
        <form>
          <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn...">
          <input id="btn_search" type="submit" name="" value="Tìm ngay">
        </form>
      </div>
    </div>
    <div class="hs__content">
      <ul class="bookmark-list">
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
        <li>
          <div class="bookmark-item-name">
            <div class="quiz-channel-icon">
              <img src="../../Assets/avatar-icon.jpg" alt="" />
            </div>
            <div class="quiz-name">
              <p>Chuyên đề hình học không gian</p>
              <h3>Tìm điều kiện thỏa mãn đăng thức cho trước nâng cao</h3>
            </div>
          </div>
          <div class="bookmark-item-info">
            <div class="info-col">
              <div class="col-name"><p>SỐ CÂU</p></div>
              <div class="col-val"><h2>50 câu</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THỜI LƯỢNG</p></div>
              <div class="col-val"><h2>30 phút</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>ĐIỂM CAO NHẤT</p></div>
              <div class="col-val"><h2>9.8</h2></div>
            </div>
            <div class="info-col">
              <div class="col-name"><p>THAM GIA</p></div>
              <div class="col-val"><h2>112 bạn</h2></div>
            </div>
            <div class="bookmark-item-action">
              <button id="btn_join" onclick="window.alert('Bạn đã bấm thi trong bookmark')">Thi ngay</button>
              <button id="btn_remove" onclick="window.alert('Bạn đã bấm xóa item trong bookmark')">Xóa bỏ</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-chevrons-right");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
</body>

</html>