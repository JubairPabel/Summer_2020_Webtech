
 function validate()
 {
 	str =document.getElementById('Email').value;

 var res = str.split(‘@’);
 var part1=res[0];
		var part2=res[1];
        var dotsplt=part2.split(‘.’);

if(document.getElementById('Email').value==”")
		{
		alert(“Empty”);

		}
        else if(str.split(‘@’).length!=2)
		{
			document.getElementById('emailMsg').innerHTML = "zero @ OR morethan one @";
		    return false;
		}


		
		else if(part1.length==0)
		{
				document.getElementById('emailMsg').innerHTML = "no content before @";
		    return false;
		}
		else if(part1.split(” “).length>2)
		{
			document.getElementById('emailMsg').innerHTML = "Space Befor @!";
		  return false;
		}

		
		  
		else if(part2.split(“.”).length<2)
		{
			document.getElementById('emailMsg').innerHTML = "dot missing";
			return false;
		
		}
		else if(dotsplt[0].length==0 )
		{
			document.getElementById('emailMsg').innerHTML = "no content b/w @ and dot";
			return false;
	
		}
		else if(dotsplt[1].length<2 ||dotsplt[1].length>4)
		{
			document.getElementById('emailMsg').innerHTML = "err aftr dot";
			return false;

		}


 }