
var mywindow;
function datapass() {
	let fullname = document.myform.fullname.value;
	let address  = document.myform.message.value;
		
	 mywindow = window.open("","","width=500,height=500,left=200,top=400 , resiable=no");
	// mywindow.document.write(" <h2>My information </h2>");
	// mywindow.document.write(" <p>My Name  = :"+ fullname+" </p>");
	// mywindow.document.write(" <p>My Address = : "+ address+" </p>");

// first ar window dile just document.write dite hobe    new document a open korate chaile 
	// mywindow.write dite hobe  

let allinfo;
	allinfo  = "<h2> all my information</h2>";
	allinfo  += "<p>Your fullname : "+ fullname +"</p>";
	allinfo  += "<p>your message : "+ address +"</p>";
	
	mywindow.document.write(allinfo);
}

