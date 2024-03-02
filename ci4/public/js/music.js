var clair = new Audio("ost/Clair De Lune.mp3");
var req = new Audio("ost/Requiem.mp3");
var glory = new Audio("ost/Glory.mp3");
var dune = new Audio("ost/Dune Eternal.mp3");
var deep = new Audio("ost/Deep Blue.mp3");
var sangue = new Audio("ost/Tenebre Rosso Sangue.mp3");
var red = new Audio("ost/The World Looks Red.mp3");
var lake = new Audio("ost/Lakeside Songbook.mp3");

function empty() {};

function musicLoad(layer) {
	switch(layer) {
		case "limbo":
			clair.loop = true;
			clair.volume = 0.6;
			clair.play();
			break;
		case "about":
			clair.loop = true;
			clair.volume = 0.6;
			clair.play();
			break;
		case "lust":
			req.loop = true;
			req.volume = 0.3;
			req.play();
			break;
		case "gluttony":
			glory.loop = true;
			glory.volume = 0.3;
			glory.play();
			break;
		case "greed":
			dune.loop = true;
			dune.volume = 0.4;
			dune.play();
			break;
		case "wrath":
			deep.loop = true;
			deep.volume = 0.6;
			deep.play();
			break;
		case "heresy":
			sangue.loop = true;
			sangue.volume = 0.2;
			sangue.play();
			break;
		case "violence":
			red.loop = true;
			red.volume = 0.4;
			red.play();
			break;
		case "contact":
			lake.loop = true;
			lake.volume = 0.4;
			lake.play();
			break;
	};
	musicLoad = empty;
}