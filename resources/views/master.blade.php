<html>
<head>
<title></title>
<style>
  body
  {
    color: #fff;
  }

img.slider_img{
    height: 400px !important;
}
.custom{
    height: 200px !important;
}
.trending{
    
}
.trending_item {
    float: left;
    width: 20%;
}
.t_img{
    height: 200px;
}
 /*Header Menu*/

/* .nav li {
 display: block;
 padding-left: 12px;
 padding-right: 12px;
 transition-duration:0.5s;
}*/
.nav li:hover > a
{
  color: red!important;

}
ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
}


.nav li:hover >ul li a
{
  font-size: 13px;
  font-weight: 900;
  text-align: left;
  padding-left: 20px!important;
  padding-top: 5px!important;
  padding-bottom: 1px!important;

}
.nav li:hover >ul
{
   width: 240px;
  position: absolute;
  left: 1%;
  border-top: 3px solid #000000;
}

ul li{
    font-size: 16px;
    font-weight: 600;
}
.navbar-brand >a
{
 padding-top: 20px;
}

.nav
{
  padding-top: 20px;
  padding-right: 20px;
}
.nav li>a
{
   padding: 8px 30px!important;
   color: #000000!important;

} 

.nav li ul li:hover >a
{
  color: red!important;
}
 .section1
 {
  background: white;
 }
 .seperator
 {
  height: 3px;
  display: block;
  width: 60px;
  background: red;
  font-size: 3px;
  color: black;
 }
 .contact
 {
  padding-top: 33px;
  padding-left: 83px!important;
}
.contact h1
{
  font-weight: bold;
}
.contact-form h1,h3,h4
{
 font-weight: bold;
}
.address h4
{
  font-weight: bold;
}
.card-body
{
  margin: 33px;
}
.card-body ul li
{
     font-family: inherit;
    font-size: 100%;
    font-style: inherit;
    font-weight: inherit;
}
.footer
{
    width: 100%;
    height: 350px;
    background: black;
}
.footer h1
{
  font-size: 32px;
}
.footer h4
{
  font-size: 20px;
}
.footer h1,.footer h4
{

    color: #ffffff;
    padding: 6px;
}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('kualityheader') }}
        @yield('content')
    {{ View::make('kualityfooter') }}
</body>
<script>
</script>
</html>