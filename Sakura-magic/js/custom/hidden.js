// <!-- 标题动态切换代码 Start -->
window.onload = function () {
  let hour = new Date().getHours()
  let str = ''
  if (hour < 6) {
    str = '修仙中……'
  } else if (hour < 9) {
    str = '早上好！'
  } else if (hour < 12) {
    str = '上午好！'
  } else if (hour < 14) {
    str = '中午好！'
  } else if (hour < 17) {
    str = '下午好！'
  } else if (hour < 19) {
    str = '傍晚好！'
  } else if (hour < 22) {
    str = '晚上好！'
  } else {
    str = '夜深了，要早点休息哦！'
  }
 
  function c () {
    document.title = document[a] ? str + '[' + d + ']' : d
  }
 
  let a = document.title
  let b = document.title
  let d = document.title
  typeof document.hidden !== 'undefined' ? (a = 'hidden', b = 'visibilitychange')
    : typeof document.mozHidden !== 'undefined' ? (a = 'mozHidden', b = 'mozvisibilitychange')
    : typeof document.webkitHidden !== 'undefined' && (a = 'webkitHidden', b = 'webkitvisibilitychange')
  typeof document.addEventListener === 'undefined' && typeof document[a] === 'undefined' || document.addEventListener(b, c, !1)
}


/*<script>var OriginTitile=document.title;
var jiao;
document.addEventListener('visibilitychange',function(){
if(location.href != "https://blog.ukenn.top/")(document.hidden){
document.title="(つェ⊂)誒呀，網站崩潰了";
clearTimeout(jiao);
console.log('hide');
}else{
document.title='(*´∇｀*) 咦,又好了~ '+OriginTitile;
console.log('show');
jiao=setTimeout(function(){
document.title=OriginTitile;
},4000);
console.log('endChange=');
}
});
</script>*/




