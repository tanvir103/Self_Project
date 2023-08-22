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
