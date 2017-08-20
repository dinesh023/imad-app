var button = document.getElementById('counter');
var counter= 0;

button.onclick = function (req,res){
    res.sendFile(path.join(__dirname, 'ui', 'dinesh.html'));
    counter=counter+1;
    var span = document.getElementById('count');
    span.innerHTML = counter.toString(); 
    
};