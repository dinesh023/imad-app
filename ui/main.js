var button = document.getElementById('counter');
var counter=0;
button.onclick = funtion(){
    counter=counter+1;
    var span = document.getElementById('count');
    span.innerhtml = counter.toString(); 
    
}