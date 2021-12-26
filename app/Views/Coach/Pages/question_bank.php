<section class="home-section">
  <div class="hs__header">
    <div class="filter">
      <select class="filter-content" id="selected_filter_item" name="filters">
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
      <div class="form">
        <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn đi nào..." />
        <input id="btn_search" type="submit" name="" value="Tìm ngay" />
      </div>
    </div>
    <div class="hs__content">
      <div class="question-add row">
        <div class="col-sm-12 text-right">
          <button id="btn_add" class="btn btn-success"><a href="addquestion" style="text-decoration:none;color: red;">Thêm câu hỏi</a></button>
          <button class="btn-preview" id="btn-preview"><a style="text-decoration: none;color: red;">Preview</a></button>
        </div>
      </div>
      <div class="content-question exam-content">
        <ul id="question">
        </ul>
        <ul id="question1">
        </ul>
      </div>
      <div class="loading">
      </div>
      <!-- Lên đầu trang -->
      <div class="back-to-top"><i class="fa fa-angle-up"><span style="font-size: 10;"></span></i></div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/app/js/Coach/paging.js"></script>
<script>
  $('.filter-content').on('change', function() {
    var filter = $('#selected_filter_item').val();
    $.ajax({
      url: "/coach/filter",
      method: "POST",
      dataType: "json",
      data: {
        filter: filter
      },
      success: function(data) {
        console.log('có đc filter');
      }
    })
  });

  var storeID = [];

  function test(id) {
    window.location = 'edit?id=' + id;
    console.log('test...');
  }

  function test1(id) {
    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
      window.location = 'delete?id=' + id;
    }
    console.log('test...');
  }
  $(".back-to-top").addClass("hidden-top");
  $(window).scroll(function() {
    if ($(this).scrollTop() === 0) {
      $(".back-to-top").addClass("hidden-top")
    } else {
      $(".back-to-top").removeClass("hidden-top")
    }
  });

  function test2(id) {
    storeID.push(id);
  }

  $('#btn-preview').click(function() {
    /* console.log('Call ajax');
    $.ajax({
      url: "/previewquiz",
      type: "POST",
      dataType: 'json',
      data: {
        'storeID': storeID,
      },
      success: function(data) {
        console.log(data);
      }
    }) */

    console.log("Data dung: " + storeID);
    localStorage.setItem('storeID', JSON.stringify(storeID));

    window.location = 'prequiz';
  })



  $('.back-to-top').click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 1200);
    return false;
  });
</script>