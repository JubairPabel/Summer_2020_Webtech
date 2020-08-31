 function empty()
 {
    var date = document.getElementById("date").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    if(date ==null|| month==null||year==null)
    {  
        document.getElementById("dob_msg").innerHTML=" date field can't be empty";
        
    }

    else if((date>=1 && date<=31) && (month >=1 && month<=12) && (year >=1900 && year <=2016))
    {   
         
         return true;
        
    }
    
 
    else 
    {
        document.getElementById("dob_msg").innerHTML="enter valid date. sample:(dd: 0-31, mm: 1-12, yyyy: 1900-2016)";  
    } 

    
 }
