function addstu(){
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    

    $.ajax({
        url:'Student/addstudent.php',
        method: "POST",
        dataType: "json",
        data:{
            stusignup: "stusignup",
            stuname: stuname,
            stuemail: stuemail,
            stupass: stupass,
        },
        success:function(data){
            console.log(data);
            if(data == "ok"){
                $('#successMsg').html("<span>Registration Successful !</span>");
            }   else if(data == "failed"){
                $('#successMsg').html("<span>Unable to Register !</span>");
            } 
            
        },
    });

}