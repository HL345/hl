 var header = document.querySelector('header');
    var section = document.querySelector('section');
    var requestURL ='https://gist.githubusercontent.com/HL345/a581143bd2950f1619585aaff49ab7f6/raw/c3e0982d8764d587ded96f798b3eccc501ef22bf/author';//:""和''中的都是string	
    var request = new XMLHttpRequest();//API接口
    request.open('GET', requestURL);//获取URL中的内容
    request.responseType = 'json';
    request.send();//发送请求
request.onload = function() {
  var doupo = request.response;//superheroes 变量作用于函数中
  populateHeader(doupo);//前面无对象所以是函数/将superheros的内容填写到header中
  showbooks(doupo);//在网页上显示
}
function populateHeader(jsonObj) { //自定义populateheader函数
	

  var myH1 = document.createElement('h3');//创建h1元素并将给myH1赋值
  myH1.textContent ="笔名:   "+jsonObj['pen name'];
  header.appendChild(myH1);//将myh1节点添加到header节点后
   var myH2 = document.createElement('h3');//创建h1元素并将给myH1赋值
  myH2.textContent = "姓名:    "+jsonObj['name'];
  header.appendChild(myH2);//将myh1节点添加到header节点后
  
}
function showbooks(jsonObj){
	var books = jsonObj['books'];
	  var myp = document.createElement('p');
     myp.textContent = '代表作:';
     section.appendChild(myp);
    for (var i = 0; i < books.length; i++) {
      var listItem = document.createElement('li');
      listItem.textContent = books[i]; 
      section.appendChild(listItem);
    }
}
