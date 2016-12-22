//////////////////////////////
///INDEX/The butcher's menu///
//////////////////////////////

// stores the device context of the canvas we use to draw the outlines
// initialized in myInit, used in myHover and myLeave
var hdc;


// shorthand func
function byId(e){return document.getElementById(e);}

// takes a string that contains coords eg - "227,307,261,309, 339,354, 328,371, 240,331"
// draws a line from each co-ord pair to the next - assumes starting point needs to be repeated as ending point.
function drawPoly(coOrdStr)
{
	var mCoords = coOrdStr.split(',');
	var i, n;
	n = mCoords.length;

	hdc.beginPath();
	hdc.moveTo(mCoords[0], mCoords[1]);
	for (i=2; i<n; i+=2)
	{
		hdc.lineTo(mCoords[i], mCoords[i+1]);
	}
	hdc.lineTo(mCoords[0], mCoords[1]);

 
	hdc.fill();
}

function myHover(element)
{
	var hoveredElement = element;
	var coordStr = element.getAttribute('coords');
	var areaType = element.getAttribute('shape');	
	var text = element.getAttribute("name");
  	hdc.font = "48px 'Indie Flower'";	
       	hdc.fillText(text,15,40);
	drawPoly(coordStr);
	var arrayColor = ["#f44336", "#3f51b5", "#9c27b0",  "#8bc34a", "#ffc107"];
	var randomColor = arrayColor[Math.floor(Math.random() * arrayColor.length)];
	hdc.fillStyle= randomColor;
	}

function myLeave()
{
	var canvas = byId('myCanvas');
	hdc.clearRect(0, 0, canvas.width, canvas.height);
}

function myInit() {
	var x,y, w,h;

	var img = byId('butchermenu');

	var x,y, w,h;
	x = img.offsetLeft;
	y = img.offsetTop;
	w = img.clientWidth;
	h = img.clientHeight;

	// move the canvas, so it's contained by the same parent as the image
	var imgParent = img.parentNode;
	var can = byId('myCanvas');
	imgParent.appendChild(can);

	// place the canvas in front of the image
	can.style.zIndex = 1;

	// position it over the image
	can.style.left = x+'px';
	can.style.top = y+'px';

	// make same size as the image
	can.setAttribute('width', w+'px');
	can.setAttribute('height', h+'px');

	// get it's context
	hdc = can.getContext('2d');

	// set the 'default' values for the colour/width of fill/stroke operations
	hdc.closePath();

	hdc.globalAlpha=0.9;

        
	hdc.lineWidth = 2;
	hdc.fill();

};

//////////////////////////////
/////INDEX/I have chance//////
//////////////////////////////


 //Store the differents pages of the site in arrayPage 
var arrayPage = ["contact.html", "portfolio.html", "about.html"];
 //Select a random page and store the result in randomPage
var randomPage = arrayPage[Math.floor(Math.random() * arrayPage.length)];
 //Create a function to redirect to the randomPage URL
function randomRedirection() { 	
	document.location.href= randomPage;
}
 //Assign a variable to the button element
var randomButton = document.getElementById("random");
 //Call randomRedirection on randomButton click event
randomButton.onclick = randomRedirection;


