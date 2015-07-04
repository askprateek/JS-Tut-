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

}
