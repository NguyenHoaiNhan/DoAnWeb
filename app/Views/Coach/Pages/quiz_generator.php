<section class="home-section">
  <div class="hs__header" style="display: none;">
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
  <div class="hs__content row">
    <!-- <div class="col-sm-12 text-right">
      <button id="btn_add" class="btn btn-success"><a href="addquiz" style="text-decoration:none;color: red;">Thêm bài trắc nghiệm</a></button>
    </div> -->
    <h3 class="grid-subject-title">CÁC BÀI TRẮC NGHIỆM ĐÃ TẠO</h3>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/SubjectSlider.js"></script> -->
<!-- <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/Pagination.js"></script> -->
<script type="text/javascript" src="<?= base_url() ?>/app/js/Coach/quiz_pagination.js"></script>

<script>
  function test(qid) {
    /* window.location = 'editquiz'; */
    window.location = 'editQuiz?qid=' + qid;
  }
</script>