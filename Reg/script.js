function search(str){
            if(str==""){
                document.getElementById('message').innerHTML="";
                return;
            }
            let xhttp=new XMLHttpRequest();
            xhttp.open('post','search.php',true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('name='+str);
            xhttp.onload=function(){
                document.getElementById('message').innerHTML=this.responseText;
            }
}
function searchuser(str){
    if(str==""){
        document.getElementById('message').innerHTML="No User found";
        return;
    }

    let username=document.getElementById('live').value;
   
    let data=JSON.stringify(username);
    let xhttp=new XMLHttpRequest();
    xhttp.open('post','user.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+data);
    xhttp.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            let user = JSON.parse(this.responseText);
            document.getElementById('message').innerHTML=user.fullname;

        }
    }
}