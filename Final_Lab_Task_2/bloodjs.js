
function Validate()
{ 
    var blood = document.getElementById("bloodgroup").value;

    if(blood== NULL)
    {
        document.getElementById("blood_Msg").innerHTML="please select blood group";
       
    }
    else
    {
        return true;
    }
}

