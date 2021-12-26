  <section class="home-section">
    <div class="hs__header">
      <div class="filter">
        <select class="filter-content" id="selected_filter_item">
          <option value="all" selected='selected'>Tất cả</option>
          <optgroup label="Lớp 10">
            <option value="toan10">Toán 10</option>
            <option value="vatly10">Vật lý 10</option>
            <option value="hoahoc10">Hóa học 10</option>
            <option value="sinhoc10">Sinh học 10</option>
            <option value="anhvan10">Anh văn 10</option>
            <option value="gdcd10">Giáo dục công dân 10</option>
            <option value="dialy10">Địa lý 10</option>
            <option value="lichsu10">Lịch sử 10</option>
          </optgroup>
          <optgroup label="Lớp 11">
            <option value="toan11">Toán 11</option>
            <option value="vatly11">Vật lý 11</option>
            <option value="hoahoc11">Hóa học 11</option>
            <option value="sinhoc11">Sinh học 11</option>
            <option value="anhvan11">Anh văn 11</option>
            <option value="gdcd11">Giáo dục công dân 11</option>
            <option value="dialy11">Địa lý 11</option>
            <option value="lichsu11">Lịch sử 11</option>
          </optgroup>
          <optgroup label="Lớp 12">
            <option value="toan12">Toán 12</option>
            <option value="vatly12">Vật lý 12</option>
            <option value="hoahoc12">Hóa học 12</option>
            <option value="sinhoc12">Sinh học 12</option>
            <option value="anhvan12">Anh văn 12</option>
            <option value="gdcd12">Giáo dục công dân 12</option>
            <option value="dialy12">Địa lý 12</option>
            <option value="lichsu12">Lịch sử 12</option>
          </optgroup>
          <optgroup label="Ôn thi THPT">
            <option value="toanthpt">Toán</option>
            <option value="vatlythpt">Vật lý</option>
            <option value="hoahocthpt">Hóa học</option>
            <option value="sinhocthpt">Sinh học</option>
            <option value="anhvanthpt">Anh văn</option>
            <option value="gdcdthpt">Giáo dục công dân</option>
            <option value="dialythpt">Địa lý</option>
            <option value="lichsuthpt">Lịch sử</option>
          </optgroup>
        </select>
      </div>
      <div class="searchbox">
        <form>
          <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn đi nào..." />
          <div class="clearsearch">
            <i id="btn_clearsearch" class='bx bx-x-circle bx-tada bx-flip-horizontal' style='color:tomato;'></i>
          </div>
          <input id="btn_search" type="button" name="" value="Tìm ngay" />
        </form>
      </div>
    </div>
    <div class="hs__content">
      <div class="subject-container" style="display: none;">
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
                <button class="btn_bookmark">Đánh dấu</button>
                <button class="btn_join">
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

      <h3 class="grid-subject-title">CÁC BÀI TRẮC NGHIỆM ĐANG CÓ</h3>

      <div id="all-quiz" class="data-item-wrapper">
        <div id="list-all-quiz" class="grid-subjects">
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
                <button class="btn_bookmark" onclick="">Đánh dấu</button>
                <button class="btn_join_list">
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
        </div>
        <div class="loading-items-space">
          <!-- <p>loading...</p> -->
        </div>
      </div>

      <div id="result-data" class="data-item-wrapper">
        <div id="list-search-quiz" class="grid-subjects">
          <!-- <div class="grid-item">
            <div class="quiz-name">
              <h5>luy thừy</h5>
              <h3>hoai nhan</h3>
            </div>
            <div class="quiz-content">
              <div class="quiz-channel">
                <div class="quiz-channel-icon">
                  <img src="/app/Assets/avatar-icon.jpg" alt="" />
                </div>
                <p>Số câu hỏi: <b>` + questionNum + ` câu</b></p>
              </div>
              <div class="quiz-action">
                <button id="123" class="btn_bookmark" onclick="bookmarkQuiz(this.id)">Đánh dấu</button>
                <button id="123" class="btn_join" onclick="startQuiz(this.id)">
                  Thi ngay
                </button>
              </div>
              <div class="quiz-descr">
                <p>
                  <span>Thời lượng</span><br />
                  <span>12 phút</span>
                </p>
                <p>
                  <span>Cao nhất</span><br />
                  <span>12</span>
                </p>
                <p>
                  <span>Tham gia</span><br />
                  <span>12</span>
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/SubjectSlider.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/Pagination.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Home/SearchEngine.js"></script>
  <script>
    function startQuiz(clickedID) {
      console.log('startQuiz...');
      window.location = 'startquiz?id=' + clickedID;
    }

    function bookmarkQuiz(clickedID) {
      var userid = localStorage.getItem('currentUID');
      // window.alert('bookmark quiz... : ' + clickedID + ' ' + userid)
      $.ajax({
        url: "bookmarkquiz",
        method: "POST",
        dataType: 'json',
        data: {
          userid: userid,
          quizid: clickedID
        },
        success: function(data) {
          console.log(data);
          if(data == 1){
            alert('Đánh dấu thành công!');
          }else{
            alert('Bạn đã đánh dấu bài này rồi!');
          }
        }
      })

    }
  </script>