var button = document.getElementById('counter');
var counter= 0;

button.onclick = function (){
    
    counter=counter+1;
    var span = document.getElementById('count');
    span.innerHTML = counter.toString(); 
    
};

var namse= document.getElementById('name');
var names=namse.value;
var submitid= document.getElementById('submit');
submitid.onclick = function(){
  var name=['name1','name2','name2'];
  var list='';
  for(var i=0;i<name.length;i++)
  {
      list+= '<li>'+name[i]+'</li>';
  }
  var ul= document.getElementById('idd');
  ul.innerHTML=list;
};