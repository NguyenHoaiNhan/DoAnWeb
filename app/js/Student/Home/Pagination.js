$(document).ready(function () {
    var limit = 6;
    var start = 0;
    var action = 'inactive';

    $('.grid-item').click(function () {
        // $('.grid-subjects').append(readyComponent);
        var a = $(window).scrollTop() + $(window).height() - 500;
        var b = $(".data-item-wrapper").height();
        alert("a : b" + " " + a + " " + b);
    });

    lazzyLoader();

    if (action == 'inactive') {
        action = 'active';
        load_data(limit, start);
    }

    $(window).scroll(function () {
        var a = $(window).scrollTop() + $(window).height() + 500;
        var b = $(".grid-subjects").height();
        if ($(window).scrollTop() + $(window).height() - 500 > $(".data-item-wrapper").height() && action == 'inactive') {
            lazzyLoader();
            console.log("Bắt tính hiệu scroll quá dữ liệu");
            action = 'active';
            start = start + limit;
            setTimeout(function () {
                load_data(limit, start);
            }, 600);
        }
    });

    // SUPPORT FUNCTIONS 
    function lazzyLoader() {
        var output = '';
        output += "<p>loading...</p>";
        $(".loading-items-space").html(output);
    }

    function load_data(limit, start) {
        $.ajax({
            url: "/student/scrollPage",
            method: "POST",
            dataType: 'json',
            data: { limit: limit, start: start },
            success: function (data) {
                console.log(data);
                var DataLength = Object.keys(data).length;
                if(DataLength == 0){
                    $('.loading-items-space').html('<h4 style="font-size: 14px; text-align: center;font-weight: 800;">Xin lỗi nhưng không còn bài trắc nghiệm nào khác!</h4>');
                        action = 'active';
                }else{
                    data.forEach(function (obj) {
                        prepareItemData(obj.topic, obj.title, obj.total, obj.duration, obj.highest, obj.joiner);
                        action = 'inactive';
                    });
                }
            }
        })
    };

    function prepareItemData(topic, title, questionNum, duration, topScore, joinNum) {
        var item = `
                                <div class="grid-item">
                                <div class="quiz-name">
                                <h5>` + topic + `</h5>
                                <h3>` + title + `</h3>
                                </div>
                                <div class="quiz-content">
                                <div class="quiz-channel">
                                    <div class="quiz-channel-icon">
                                    <img src="/app/Assets/avatar-icon.jpg" alt="" />
                                    </div>
                                    <p>Số câu hỏi: <b>` + questionNum + ` câu</b></p>
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
                                    <span>` + duration + ` phút</span>
                                    </p>
                                    <p>
                                    <span>Cao nhất</span><br />
                                    <span>` + topScore + `</span>
                                    </p>
                                    <p>
                                    <span>Tham gia</span><br />
                                    <span>` + joinNum + `</span>
                                    </p>
                                </div>
                                </div>
                            </div>
        `;
        $('.grid-subjects').append(item);
    }
});




