<section class="home-section">
  <div class="hs__header">
    <div class="filter">
      <select class="filter-content" id="selected_filter_item">
        <option value="">Tất cả</option>
      </select>
    </div>
    <div class="searchbox">
      <form>
        <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn đi nào..." />
        <input id="btn_search" type="submit" name="" value="Tìm ngay" />
      </form>
    </div>
    <div class="hs__content">

      <?php
      if (session()->getFlashdata('status')) {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hey!</strong> <?= session()->getFlashdata('status') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
      }
      ?>




      <div class="question-add row">
        <div class="col-sm-12 text-right">
          <button id="btn_add" class="btn btn-success"><a href="<?= base_url('addquestion') ?>" style="text-decoration:none;color: red;">Thêm câu hỏi</a></button>
        </div>
      </div>
      <div class="content-question exam-content">
        <ul id="question">


        </ul>
      </div>
      <div class="loading">




      </div>
      <button class="btn-preview" id="btn-preview"><a style="text-decoration: none;color: red;" href="">Preview</a></button>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/app/js/Coach/paging.js"></script>
<script>
  // $('#1').click()
  /* function load() {
    $.ajax({
      url: "/question1",
      method: "POST",
      dataType: 'json',
      data: {},
      success: function(data) {
        console.log(data);
        data.forEach(function(obj) {
          $("#" + obj.id).click(function() {
            alert('ok');
          })
        });
      }
    })
  }
  load(); */
  function test(id) {
    window.location = 'edit?id=' + id;
    console.log('test...');
  }
</script>