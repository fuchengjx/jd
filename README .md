#jd

index页面:

![index页面](http://github.com/fuchengjx/jd/raw/master/readme/index.png)

这个页面是仿照京东主页写的前端页面。



****

##项目包括
![](http://github.com/fuchengjx/jd/raw/master/readme/1.png)

整个项目我采用了html，css，js，php，mysql等技术。

### 主页面（index.html）

使用了采用现行网站开发比较流行的技术，在元标签内有各种网页关键信息，定义了这是一个电商网站，url栏title内有自定义的图标

![元标签](http://github.com/fuchengjx/jd/raw/master/readme/2.png)




![f](http://github.com/fuchengjx/jd/raw/master/readme/3.png)

有些图标部分采用的是字体标签，这样可以减少图标图片，减小网页的大小。（这个广告的x可以将广告关闭）



绝大多数背景图片用的是精灵图，这样一张图片加载后，可以给多个标签做背景图，比把多张小图合在一起更节省内存。

![精灵图](http://github.com/fuchengjx/jd/raw/master/readme/sprite_fs@1x.png)



index主页用了一个懒加载的jquery插件，它能在网页载入多张图片时，先后加载，使用户体验更好。

还有一个标准的伪进度条。



![](http://github.com/fuchengjx/jd/raw/master/readme/4.png)

###其它页面

![链接](http://github.com/fuchengjx/jd/raw/master/readme/5.png)

因为时间紧，我就只写了这几个链接，一个注册页面（register.html），一个登陆（login.html）,一个电影（movie.html  这个真的丑不解释），一个游戏链接（这个是我以前做项目做的js原生的贪吃蛇）.



**register.html**这个是在网上随便找的一个注册表单，有点丑（那些表单信息，因为只想把各种表单技术用一下，所以没用统一的type，然后写表单处理的时候后悔死了）。我根据它的东西，写了一些表单验证（像正则表达及一些其它的功能），然后我根据它写了一个后端的处理页面（register.php），这个页面有着连接本地数据库，创建数据库，建立表，然后把表单提交的信息放入数据库的功能。

**login.html**这个是一个登陆页面，它的后端处理页面是login.php，它可以验证你是否注册过，密码或用户名是否正确，然后登陆。

**movie.html**这是一个我动态创建出的网页，我本打算用ajax请求豆瓣电影，然后它会返回json数据给我，然后我再渲染到页面上。但是因为跨域问题（以我目前的技术只用前端技术真的无法解决这个问题，jsonp还是需要后端配合返回数据），所以我把豆瓣返回的json数据放在movie.php文件里了。然后再进行读取数据再渲染（因为是第一次处理了这么复杂的数据，我犯了非常多的错误，花了很久的时间，第一次渲染页面也很没有经验，等以后再来渲染了）



整个注册和登录界面经过多次试验，完全有效。不过数据库存入的字符串会有乱码，暂时无法解决。



要想体验完整的网站效果可以到我的个人网站(时间过长链接可能无效)
[](我的个人网站 "www.fucheng360.top") 

***

