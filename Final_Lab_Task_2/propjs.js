

function Validate()
{
    var id = document.getElementById("id").value;
    var picture = document.getElementById("file").value;

    
    if(id=="")
    {
       document.getElementById("profile_Msg").innerHTML="user id field can't be empty";
       
    }

   
    else if (id<0) 
    {
        document.getElementById("profile_Msg").innerHTML="invalid !";
    }

    else if(picture=="")
    {
        document.getElementById("picture_Msg").innerHTML="picture can't be empty , please select any picture.";
        
    }
    else
    {
        
        return true;
    }
}