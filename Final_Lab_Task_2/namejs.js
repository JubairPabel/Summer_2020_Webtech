 function emt()
 {
    var name = document.getElementById("name").value;
    var length =name.length;
    
    if(name == "")
    {  
        document.getElementById("name_Msg").innerHTML="name field can't be empty";
        
    }

    else if( (name>='A' && name<='Z' || name>='a'&& name<='z') && length< 2)
    {   
         document.getElementById("name_Msg").innerHTML=" Name length can't be less then 2";  
        
    }
    
    else if(name>= '0' && name<= '9'||name=='+'||name=='-'||name=='*'||name=='/'||name=='='||name=='@'||name=='$'||name=='%'||name=='!'||name=='|'||name=='?' )
    {
        document.getElementById("name_Msg").innerHTML="name must be characters not special characters. enter valid name";
        
    }
    
 
    else if( name>='A' && name<='Z' || name>='a'&& name<='z')
    {
        Validate();
        
    } 

    
 }
  
function rmv()
{
    document.getElementById('name_Msg').innerHTML = "";
    
}

 


function Validate()
{
   
      return true;
    
    
}