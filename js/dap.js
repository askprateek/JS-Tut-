function check(){
  var a,show;
  a=document.getElementById("name").value;
  if(!isNaN(a)){
    show="Enter a Name LOL XD";
  }
  else{
    show ="Hello Master " + a +" XD.";
  }
  document.getElementById('InResult').innerHTML=show;
  window.alert(show);

}
function fill(){
  var x ;
  x=document.getElementById('name').value;
  if (!isNaN(x))
  {
    document.getElementById('InResult').innerHTML="Please Enter a name, Do not submit that fast :P";
  }

}

function hover(){
  window.alert("lolololol");
}
