//This file is not uploaded the fontastic_syncing is the one that works. Use this only for reference.

var current = 0;
var done = false;
var fonts = ["Adobe Caslon", "Adobe Garamond", "Adobe Jenson", "Avenir", "Baskerville", "Bell", "Bembo", "Bodoni", "Centaur Regular", "ITC Cheltenham Book", "Clarendon Light", "ITC Fenice Regular", "Frutiger-55", "Gill Sans", "Goudy Oldstyle", "Helvetica Regular Roman", "ITC Avant Garde Gothic Book", "ITC Franklin Gothic Book", "Melior", "Memphis Medium", "Minion", "Myriad", "New Century Schoolbook", "Palatino", "Rockwell", "Sabon Roman", "Scala Sans Pro Regular", "Syntax", "Times New Roman", "Trade Gothic", "Univers-55"];
var seq = new Array(fonts.length);
var counterWrong = 0;
var needsWork = "";
var count = 0;
var numFails = 0;
var userAnswers = new Array(fonts.length);

function initSeq() {
    for (var i = 0; i < seq.length; i++) {
        // test to make sure it is not duplicate
        while (true) {
            var randomNum = Math.floor((Math.random() * fonts.length)); // 6 = fonts[] length
            if (isUsed(randomNum, seq)) {
                continue;
            }
            else {
                seq[i] = randomNum;
                break;
            }
        }
    }
    //alert('Random Numbers: ' + seq[0]+ seq[1]+ seq[2]+ seq[3]+ seq[4]+ seq[5]);
}

function setAnswers() {
    var buttons = document.getElementsByClassName('button');
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i].id == 'mordor') {
            //alert('button' + i + ' is mordor');
            continue;
        }
        var rand = Math.floor((Math.random() * (fonts.length)));
        //alert('set answers random: ' + rand);
        while (true) {

            if (isFontUsed(rand, buttons)) {
                //alert('font' + rand + ' was used');
                // fonts[rand] is being used by another button
                rand = Math.floor((Math.random() * (fonts.length)));
                continue;
            }
            else {
                //fonts[rand] not being used by another button
                buttons[i].firstChild.innerText = fonts[rand];
                //alert('buttons' + i + ': ' + buttons[i].firstChild.innerText);
                break;
            }
        }
    }
}

function isFontUsed(rand, buttons) {
    for (var i = 0; i < buttons.length; i++) {
        //alert('buttons' + i + ': ' + buttons[i].firstChild.innerText + '\n fonts[' + rand + ']: ' + fonts[rand]);
        if (buttons[i].firstChild.innerText == fonts[rand]) {
            return true;
        }
    }
    return false;
}

function isUsed(randNum, array) {
    for (var i = 0; i < fonts.length; i++) {
        if (randNum == array[i]) {
            return true;
        }
    }
    return false;
}

function setFlashCard() {
    //alert ('got to flashcard' + fonts[seq[count]]);
    if (count == seq.length) {
        showReport();
    }
    else {
        var preview = document.getElementById('fontPreview');
        preview.style.fontFamily = fonts[seq[count]];
        //alert ('preview font family: ' + preview.style.fontFamily);
        setMordorButton();
        setAnswers();
    }
}

function setMordorButton() {
    var random = Math.floor((Math.random() * 4));
    //alert('mordor random number: ' + random);
    document.getElementsByClassName('button')[random].id = 'mordor';
    document.getElementsByClassName('button')[random].firstChild.innerText = fonts[seq[count]];
    //alert('mordor button: ' + document.getElementsByClassName('button')[random].firstChild.innerText);
}

function checkAnswer(button) {
    if (button.id == 'mordor') {
        // correct answer
        showSuccess();
        userAnswers[count] = "correct";
    }
    else {
        // wrong answer
        numFails++;
        if (numFails > 1) {
            userAnswers[count] = fonts[count];
        }
        showFail();
    }
}

function showSuccess() {
    var success = document.getElementById('response');
    success.style.width = '100%';
    var image = document.getElementById('response-image').firstChild;
	image.setAttribute('src', 'images/checkmark.png');
	var text = success.querySelector('#response-text');
	text.innerHTML = "<h1 style='font-family:"+fonts[seq[count]]+"'>"+fonts[seq[count]]+"</h1><p> is correct!</p>";
	var button = document.getElementById('response-button');
	button.innerHTML = '<span style="padding-top:20px;padding-bottom:20px;color:#fff;font-size:30px">Next</span>';
	document.getElementById('response-image').style.display = 'block';
	button.style.display = 'block';
	image.style.display = 'block';
	text.style.display = 'block';
	button.onclick = function() {
		count++;
		document.getElementById('mordor').id = "";
		success.style.width = '0%';
		setTimeout(function(){
			document.getElementById('response-image').style.display = 'none';
			button.style.display = 'none';
			image.style.display = 'none';
			text.style.display = 'none';
		}, 250);

		setFlashCard();
	};
}

function showFail() {
    var fail = document.getElementById('response');
    fail.style.width = '100%';
    var image = document.getElementById('response-image').firstChild;
    image.setAttribute('src', 'images/wrong-icon.png');
    var text = success.querySelector('#response-text');
    text.innerHTML = "<h1>Incorrect!</h1>";
    var button = document.getElementById('response-button');
	if (numFails == 0) {
		button.innerHTML = '<span style="padding-top:20px;padding-bottom:20px;color:#fff;font-size:30px">Try Again</span>';
	}
	else {
		button.innerHTML = '<span style="padding-top:20px;padding-bottom:20px;color:#fff;font-size:30px">Next</span>';
	}
    document.getElementById('response-image').style.display = 'block';
    button.style.display = 'block';
    image.style.display = 'block';
    text.style.display = 'block';
    button.onclick = function() {
        document.getElementById('mordor').id = "";
        fail.style.width = '0%';
        setTimeout(function(){
            document.getElementById('response-image').style.display = 'none';
            button.style.display = 'none';
            image.style.display = 'none';
            text.style.display = 'none';
        }, 250);

    };
}

function showReport() {
    var report = document.getElementById('report');
    report.style.width = '100%';
    var resultsTable = document.getElementById('resultsTable');
    for (var i = 0; i < fonts.length; i++) {
        
    }
}

