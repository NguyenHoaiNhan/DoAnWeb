<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
  <title>QuickQuiz | Home</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- link for using slick slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app/css/Student/Home.css" />
  <!-- Boxiocns CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
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
        <a href="<?= base_url() ?>/app/Views/Student/Home.php">
          <i class="bx bxs-home"></i>
          <span class="link_name">Trang chủ</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="<?= base_url() ?>/app/Views/Student/Discussion.php">
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
          <a href="<?= base_url() ?>/app/Views/Student/Analysis.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="link_name">Thống kê</span>
          </a>
        </div>

      </li>
      <li>
        <a href="<?= base_url() ?>/app/Views/Student/Bookmark.php">
          <i class="bx bxs-bookmarks"></i>
          <span class="link_name">Đánh dấu</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="<?= base_url() ?>/app/Views/Student/Account.php">
          <i class="bx bxs-user-circle"></i>
          <span class="link_name">Tài khoản</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Cài đặt</a></li>
        </ul>
      </li>
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
  <!-- CONTENT AREA -->
  <section class="home-section">
    <div class="hs__header">
      <div class="filter">
        <select class="filter-content" id="selected_filter_item">
          <optgroup label="Lớp 10">
            <option value="toan10">Toán 10</option>
            <option value="vatly10">Vật lý 10</option>
            <option value="hoahoc10">Hóa học 10</option>
            <option value="sinhoc10">Sinh học 10</option>
            <option value="anhvan10">Anh văn 10</option>
            <option value="gdcd">Giáo dục công dân 10</option>
            <option value="dialy">Địa lý 10</option>
            <option value="lichsu">Lịch sử 10</option>
          </optgroup>
          <optgroup label="Lớp 11">
            <option value="toan10">Toán 11</option>
            <option value="vatly10">Vật lý 11</option>
            <option value="hoahoc10">Hóa học 11</option>
            <option value="sinhoc10">Sinh học 11</option>
            <option value="anhvan10">Anh văn 11</option>
            <option value="gdcd">Giáo dục công dân 11</option>
            <option value="dialy">Địa lý 11</option>
            <option value="lichsu">Lịch sử 11</option>
          </optgroup>
          <optgroup label="Lớp 12">
            <option value="toan10">Toán 12</option>
            <option value="vatly10">Vật lý 12</option>
            <option value="hoahoc10">Hóa học 12</option>
            <option value="sinhoc10">Sinh học 12</option>
            <option value="anhvan10">Anh văn 12</option>
            <option value="gdcd">Giáo dục công dân 12</option>
            <option value="dialy">Địa lý 12</option>
            <option value="lichsu">Lịch sử 12</option>
          </optgroup>
          <optgroup label="Ôn thi THPT">
            <option value="toan10">Toán</option>
            <option value="vatly10">Vật lý</option>
            <option value="hoahoc10">Hóa học</option>
            <option value="sinhoc10">Sinh học</option>
            <option value="anhvan10">Anh văn</option>
            <option value="gdcd">Giáo dục công dân</option>
            <option value="dialy">Địa lý</option>
            <option value="lichsu">Lịch sử</option>
          </optgroup>
        </select>
      </div>
      <div class="searchbox">
        <form>
          <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn đi nào..." />
          <input id="btn_search" type="submit" name="" value="Tìm ngay" />
        </form>
      </div>
    </div>
    <div class="hs__content">
      <div class="subject-container">
        <center>
          <h1 class="subject-title">Các bài<span>Phổ biến</span></h1>
        </center>
        <div class="subject-slider">
          <div class="subject-info">
            <div class="quiz-name">
              <h5>Chuyên đề hình học không gian</h5>
              <h3>Tìm điểm thỏa mãn đẳng thức cho trước nâng cao</h3>
            </div>
            <div class="quiz-content">
              <div class="quiz-channel">
                <div class="quiz-channel-icon">
                  <img src="<?= base_url() ?>/app/Assets/avatar-icon.jpg" alt="" />
                </div>
                <p>Số câu hỏi: <b>50 câu</b></p>
              </div>
              <div class="quiz-action">
                <button id="btn_bookmark" onclick="">Đánh dấu</button>
                <button id="btn_join">
                  Thi ngay
                </button>
              </div>
              <div class="quiz-descr">
                <p>
                  <span>Thời lượng</span><br />
                  <span>30 phút</span>
                </p>
                <p>
                  <span>Cao nhất</span><br />
                  <span>9.5</span>
                </p>
                <p>
                  <span>Tham gia</span><br />
                  <span>112</span>
                </p>
              </div>
            </div>
          </div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
          <div class="subject-info"></div>
        </div>
      </div>
      <h3 class="grid-subject-title">CÁC NỘI DUNG ĐANG CÓ</h3>
      <div class="data-item-wrapper">
        <div class="grid-subjects">
          <!-- <div class="grid-item">
            <div class="quiz-name">
              <h5>Chuyên đề hình học không gian</h5>
              <h3>Tìm điểm thỏa mãn đẳng thức cho trước nâng cao</h3>
            </div>
            <div class="quiz-content">
              <div class="quiz-channel">
                <div class="quiz-channel-icon">
                  <img src="/app/Assets/avatar-icon.jpg" alt="" />
                </div>
                <p>Số câu hỏi: <b>50 câu</b></p>
              </div>
              <div class="quiz-action">
                <button id="btn_bookmark" onclick="">Đánh dấu</button>
                <button id="btn_join_list">
                  Thi ngay
                </button>
              </div>
              <div class="quiz-descr">
                <p>
                  <span>Thời lượng</span><br />
                  <span>30 phút</span>
                </p>
                <p>
                  <span>Cao nhất</span><br />
                  <span>9.5</span>
                </p>
                <p>
                  <span>Tham gia</span><br />
                  <span>112</span>
                </p>
              </div>
            </div>
          </div> -->
          <!-- <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div> -->
        </div>
        <div class="loading-items-space">
          <!-- <p>loading...</p> -->
        </div>
      </div>
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/SubjectSlider.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/Pagination.js"></script>
  <script type="module" src="<?= base_url()?>/app/js/Student/Home/StudentAction.js"></script>
  <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
  <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>

<!-- <script>
  $(".namenhan").after("tran ngoc thuy");
</script> -->