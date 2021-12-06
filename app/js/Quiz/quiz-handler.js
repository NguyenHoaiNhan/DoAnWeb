$(document).ready(function(){
    var quiz = [
        
    ];
    
   TimeHandler();
//    NavigationQuestion();
    a = ['hoainhan', 'ngocthuy', 'minhthanh'];
    SetQuiz(10, 12, a);
});

function TimeHandler(){
    var timeLeft = 60;
    var counter = 0;
    var timer = $("#timer");

    timer.html(timeLeft - counter);

    function timeIT(){
        counter++;
        timer.html(timeLeft - counter);
    }

    setInterval(timeIT, 1000);
}

function loadSideBar(Duration, QuestNum){
    for(var i = 1; i <= QuestNum; i++){
        $('.quiz-num').append(
            `
                <div class="num" id="">
                    <p></p>
                </div>
            `
        );
    }
//    OptList.forEach(function(){
//        var c = ` <div class="num" id="quest1"><p>1</p></div>`;
//    });
}

function NavigationQuestion(){
    $('.num').click(function(){
        var QuestionID = $(this).attr('id');
        console.log(QuestionID);

        loadQuestion(QuestionID);
        loadOption(QuestionID);
        loadChoosenAnswer(QuestionID);

    })
}

function loadQuestion(quesID){
    $('.quiz-question').html(
        `   
            <h1>` +  + `</h1>
        `
    );
}

function loadOption(){

}

function loadChoosenAnswer(){

}
