<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app/css/Student/showresult.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.css" integrity="sha384-WsHMgfkABRyG494OmuiNmkAOk8nhO1qE+Y6wns6v+EoNoTNxrWxYpl5ZYWFOLPCM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.js" integrity="sha384-lhN3C1JSmmvbT89RGOy6nC8qFBS8X/PLsBWIqiNdD4WGNsYOWpS2Il0x4TBrK8E2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="MasterData" style="display: none">
        <?php
        foreach ($masterData as $ques) {
            echo "<div class='quiz-info'>";
            echo "<p id='ques-id'>" . $ques['QuestionID'] . "</p>";
            echo "<p id='ques-content'>" . $ques['QuestionContent'] . "</p>";
            echo "<p id='ques-opta'>" . $ques['OptA'] . "</p>";
            echo "<p id='ques-optb'>" . $ques['OptB'] . "</p>";
            echo "<p id='ques-optc'>" . $ques['OptC'] . "</p>";
            echo "<p id='ques-optd'>" . $ques['OptD'] . "</p>";
            echo "<p id='ques-keyans'>" . $ques['Answer'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="title">
        <div class="home-back">
            <h4>Trang chủ</h4>
        </div>
        <h1>ĐÁP ÁN BÀI TRẮC NGHIỆM</h1>
    </div>
    <div class="question-review">
        <div class="question">
            <!-- <div class="content">
                <p><b>Câu 1: </b>có bao nhiêu số a thoa di?</p>
            </div>
            <div class="a">
                <p>1 so</p>
            </div>
            <div class="b">
                <p>2 số</p>
            </div>
            <div class="c">
                <p>3 số</p>
            </div>
            <div class="d">
                <p>4 số</p>
            </div>
        </div>
        <div class="question">
            <div class="content">
                <p><b>Câu 1: </b>có bao nhiêu số a thoa di?</p>
            </div>
            <div class="a">
                <p>1 so</p>
            </div>
            <div class="b">
                <p>2 số</p>
            </div>
            <div class="c">
                <p>3 số</p>
            </div>
            <div class="d">
                <p>4 số</p>
            </div>
        </div>
        <div class="question">
            <div class="content">
                <p><b>Câu 1: </b>có bao nhiêu số a thoa di?</p>
            </div>
            <div class="a">
                <p>1 so</p>
            </div>
            <div class="b">
                <p>2 số</p>
            </div>
            <div class="c">
                <p>3 số</p>
            </div>
            <div class="d">
                <p>4 số</p>
            </div>
        </div>
        <div class="question">
            <div class="content">
                <p><b>Câu 1: </b>có bao nhiêu số a thoa di?</p>
            </div>
            <div class="a">
                <p>1 so</p>
            </div>
            <div class="b">
                <p>2 số</p>
            </div>
            <div class="c">
                <p>3 số</p>
            </div>
            <div class="d">
                <p>4 số</p>
            </div>
            <div class="ans">
                <p>Bạn chọn: </p>
            </div>
            <div class="key">
                <p>Đáp án: </p>
            </div>
        </div> -->
        </div>
</body>
<script>
    $(document).ready(function() {

        $('.home-back').click(function() {
            localStorage.removeItem('answerList');
            location.href = 'home';
        });

        console.log('Ready to perform');
        var Score = localStorage.getItem('Score');
        var AnswerList = localStorage.getItem('answerList');
        AnswerList = JSON.parse(AnswerList);

        var QuizList = [];
        $('.quiz-info').each(function(index) {
            QuizList.push({
                'id': $(this).children('#ques-id').text(),
                'content': $(this).children('#ques-content').text(),
                'opta': $(this).children('#ques-opta').text(),
                'optb': $(this).children('#ques-optb').text(),
                'optc': $(this).children('#ques-optc').text(),
                'optd': $(this).children('#ques-optd').text(),
                'ans': $(this).children('#ques-keyans').text(),
            })
        });

        console.log(AnswerList);
        console.log(QuizList);

        prepareView(QuizList, AnswerList);

        // CÁC HÀM HỖ TRỢ

        // Đưa câu hỏi và câu trả lời có đáp áp lên view
        function prepareView(quizList, ansList) {
            for (var i = 0; i < quizList.length; i++) {
                console.log(QuizList[i].content + " " + QuizList[i].optb + " " + QuizList[i].optc + " " + QuizList[i].optd);
                // prepareQuestion(QuizList[i].content, QuizList[i].opta, QuizList[i].optb, QuizList[i].optc, QuizList[i].optd, QuizList[i].ans, i+1, QuizList[i].id);
                prepareQuestion(quizList[i].content, quizList[i].opta, quizList[i].optb, quizList[i].optc, quizList[i].optd, quizList[i].ans, i + 1, quizList[i].id);

                // if (ansList.length != 0) {
                //     var ans = findAnsByID(ansList[i].id, ...ansList);

                //     var keyans = findAnsKeyByID(QuizList[i].id, ...QuizList);

                //     if (ans == keyans) {
                //         $('#' + QuizList[i].id).css('background-color', 'green');
                //     }
                // }
            }


            if (ansList.length != 0) {
                for (var i = 0; i < ansList.length; i++) {
                    var ans = findAnsByID(ansList[i].id, ...ansList);

                    var keyans = findAnsKeyByID(ansList[i].id, ...QuizList);

                    if (ans == keyans) {
                        $('#' + ansList[i].id).css('background-color', 'green');
                    }
                }
            }
        }

        function prepareQuestion(content, opta, optb, optc, optd, answer, i, id) {
            console.log('prepare question...');
            var data = `
                <div class="question">
                    <div class="content" id="` + id + `">
                        <h3><b>Câu ` + i + `: ` + katex.renderToString(content) + `</p>
                    </div>
                    <div class="a">
                        <p>A) ` + katex.renderToString(opta) + `</p>
                    </div>
                    <div class="b">
                        <p>B) ` + katex.renderToString(optb) + `</p>
                    </div>
                    <div class="c">
                        <p>C) ` + katex.renderToString(optc) + `</p>
                    </div>
                    <div class="d">
                        <p>D) ` + katex.renderToString(optd) + `</p>
                    </div>
                    <div class="key">
                        <h3>Đáp án:  ` + katex.renderToString(answer.toUpperCase()) + `</h3>
                    </div>
                </div>
            `;
            $('.question-review').append(data);

            console.log('after');
        }

        function findAnsByID(id, ...List) {
            var opt = '';
            for (var i = 0; i < List.length; i++) {
                if (List[i].id == id) {
                    opt = List[i].opt;
                    break;
                }
            }
            console.log('Ans: ' + opt + " ID: " + id);
            return opt;
        }

        function findAnsKeyByID(id, ...keyansList) {
            var opt = '';
            for (var i = 0; i < keyansList.length; i++) {
                if (keyansList[i].id == id) {
                    opt = keyansList[i].ans;
                    break;
                }
            }
            console.log('KeyAns: ' + opt + " ID: " + id);
            return opt;
        }
    })
</script>

</html>