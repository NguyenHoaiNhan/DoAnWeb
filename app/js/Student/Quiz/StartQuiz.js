$(document).ready(function () {
    var QuizList = [];
    var StudentChoice = [];
    var remainingHour = parseInt($('#hour').text());
    var remainingMinute = parseInt($('#minute').text());
    var remainingSecond = parseInt($('#second').text());
    var remainingTimeInSecond = takeDurationInSecond(remainingHour, remainingMinute, remainingSecond);

    countdownTime(remainingTimeInSecond);
    
    $('.quiz-info').each(function(index){
        QuizList.push({
            'id': $(this).children('#ques-id').text(),
            'content': $(this).children('#ques-content').text(),
            'opta': $(this).children('#ques-opta').text(),
            'optb': $(this).children('#ques-optb').text(),
            'optc': $(this).children('#ques-optc').text(),
            'optd': $(this).children('#ques-optd').text(),

        })
    })

    var DefautQuestionView = $('.quiz-num > :first').attr('id');
    console.log(DefautQuestionView);
    LoadQuestionView(DefautQuestionView, ...QuizList);
    
    $('.num').click(function(){
        var clickedItem = $(this).attr('id');
        LoadQuestionView(clickedItem, ...QuizList)
    });


});

//  OBJECT ĐỂ LƯU TRỮ THÔNG TIN BÀI TRẮC NGHIỆM LẤY VỀ TỪ SERVER

function Question(id, content, opta, optb, optc, optd){
    this.id = id;
    this.content = content;
    this.opta = opta; 
    this.optb = optb;
    this.optc = optc;
    this.optd = optd;
}

function Choice(id, opt){
    this.id = id;
    this.opt = opt;
}

// XỬ LÝ THỜI GIAN NỘP BÀI

function countdownTime(remainingQuizTimeInSecond) {
    console.log('countdownTime...');
    setInterval(() => {
        remainingQuizTimeInSecond--;
        setQuizTime(takeHour(remainingQuizTimeInSecond), takeMinute(remainingQuizTimeInSecond), takeSecond(remainingQuizTimeInSecond));
    }, 1000);
}

function takeDurationInSecond(hour, minute, second) {
    return (hour * 60 * 60) + (minute * 60) + second;
}

function takeHour(duration) {
    return parseInt(duration / 3600);
}

function takeMinute(duration) {
    return parseInt(
        parseInt((duration - takeHour(duration) * 3600) / 60)
    );
}

function takeSecond(duration) {
    return duration - takeHour(duration) * 3600 - takeMinute(duration) * 60;
}

function setQuizTime(hour, minute, second) {
    if (hour >= 10) {
        $('#hour').text(hour);
    } else {
        $('#hour').text('0' + hour);
    }
    if (minute >= 10) {
        $('#minute').text(minute);
    } else {
        $('#minute').text('0' + minute);
    }
    if (second >= 10) {
        $('#second').text(second);
    } else {
        $('#second').text('0' + second);
    }
}

// LOAD CÂU HỎI, LỰA CHỌN LÊN PAGE

function LoadQuestionView(clickedItem, ...questionList) {
    console.log('You clicked ' + clickedItem);
    loadQuestion(clickedItem, ...questionList);
    loadOption(clickedItem, ...questionList);
}

function loadSideBar(Duration, QuestNum) {
    for (var i = 1; i <= QuestNum; i++) {
        $('.quiz-num').append(
            `
                <div class="num" id="">
                    <p></p>
                </div>
            `
        );
    }
}

function loadQuestion(quesID, ...questionList) {
    var question = '';

    for(var i = 0; i < questionList.length; i++){
        if(quesID == questionList[i].id){
            question = questionList[i].content;
            break;
        }
    }

    $('.quiz-question').html(
        `   
            <h1>` + katex.renderToString(question) + `</h1>
        `
    );
}

function loadOption(quesID, ...questionList) {
    var opta = '';
    var optb = '';
    var optc = '';
    var optd = '';

    for(var i = 0; i < questionList.length; i++){
        if(quesID == questionList[i].id){
            opta = questionList[i].opta;
            optb = questionList[i].optb;
            optc = questionList[i].optc;
            optd = questionList[i].optd;
            break;
        }
    }

    $('#opta h2').text('A) ' + opta);
    $('#optb h2').text('B) ' + optb);
    $('#optc h2').text('C) ' + optc);
    $('#optd h2').text('D) ' + optd);
}

function setChoicePointer(quesID, oldOpt, newOpt, ...ChoosenAnswer){

}   

function hightlightChoosenQuestion(){

}

function hightlightChoosenOption(){
    
}

