@extends('layouts.master')
@section('style')
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato);
a {
  text-decoration: none;
}
a:hover {
  color: #3B50CE;
}

body {
  margin: 0;
  padding: 0;
  background-color: #222;
}

* {
  font-family: "Lato",Helvetica,sans-serif;
  color: #ddd;
  text-align: center;
}

main {
  width: 600px;
  position: relative;
  margin: 10px auto;
  transform: scale(0.7);
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  -o-transform: scale(0.7);
  -ms-transform: scale(0.7);
}
main > * {
  position: relative;
  z-index: -10;
}
main .head {
  width: 120px;
  background-color: #fff;
  height: 80px;
  margin: auto;
  border-radius: 100%;
  padding-top: 3px;
  z-index: 100;
  box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2) inset;
  -webkit-box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2) inset;
  -o-box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2) inset;
  -ms-box-shadow: 0 -3px 10px 3px rgba(0, 0, 0, 0.2) inset;
}
main .head .eye {
  width: 40px;
  position: relative;
  margin: 40px auto;
  background-color: #222;
  height: 3px;
}
main .head .eye::after {
  content: " ";
  position: absolute;
  left: 100%;
  width: 15px;
  height: 15px;
  background-color: #000;
  border-radius: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
main .head .eye::before {
  content: " ";
  position: absolute;
  right: 100%;
  width: 15px;
  height: 15px;
  background-color: #000;
  border-radius: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
main .body {
  width: 320px;
  height: 400px;
  margin: auto;
  background-color: #fff;
  border-radius: 100% 100% 90% 90%;
  margin-top: -20px;
  z-index: 80;
  box-shadow: 0 -10px 50px 10px rgba(0, 0, 0, 0.1) inset;
  -webkit-box-shadow: 0 -10px 50px 10px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0 -10px 50px 10px rgba(0, 0, 0, 0.1) inset;
  -o-box-shadow: 0 -10px 50px 10px rgba(0, 0, 0, 0.1) inset;
  -ms-box-shadow: 0 -10px 50px 10px rgba(0, 0, 0, 0.1) inset;
}
main .body .logo {
  width: 40px;
  height: 37px;
  border: 1px solid #aaa;
  border-radius: 50%;
  position: absolute;
  top: 40px;
  right: 80px;
}
main .body .logo .line {
  width: 100%;
  height: 1px;
  background-color: #aaa;
  transform: translateY(18.5px);
  -webkit-transform: translateY(18.5px);
  -moz-transform: translateY(18.5px);
  -o-transform: translateY(18.5px);
  -ms-transform: translateY(18.5px);
}
main .body .logo .bord {
  width: 12px;
  border: 10px solid transparent;
  height: 0;
  border-bottom-color: #aaa;
  position: relative;
  left: 50%;
  margin-left: -16px;
}
main .body .logo .bord:after {
  content: "";
  position: absolute;
  top: -10px;
  left: -11px;
  width: 10px;
  border: 12px solid transparent;
  height: 0;
  border-bottom-color: #fff;
}
main .body .abdo {
  z-index: 90;
  position: absolute;
  bottom: -80px;
  left: -20px;
  width: 360px;
  height: 400px;
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 0 -30px 30px 3px rgba(0, 0, 0, 0.2) inset;
  -webkit-box-shadow: 0 -30px 30px 3px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: 0 -30px 30px 3px rgba(0, 0, 0, 0.2) inset;
  -o-box-shadow: 0 -30px 30px 3px rgba(0, 0, 0, 0.2) inset;
  -ms-box-shadow: 0 -30px 30px 3px rgba(0, 0, 0, 0.2) inset;
}
main .hands {
  position: relative;
  top: 0px;
  width: 100%;
}
main .hands .hand {
  width: 100px;
  height: 350px;
  background-color: #fff;
  position: absolute;
  left: 80px;
  border-radius: 40%;
  transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  -moz-transform: rotate(30deg);
  -o-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  box-shadow: -20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -webkit-box-shadow: -20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: -20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -o-box-shadow: -20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -ms-box-shadow: -20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
}
main .hands .hand:nth-child(2) {
  left: 420px;
  transform: rotate(-30deg);
  -webkit-transform: rotate(-30deg);
  -moz-transform: rotate(-30deg);
  -o-transform: rotate(-30deg);
  -ms-transform: rotate(-30deg);
  box-shadow: 20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -webkit-box-shadow: 20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: 20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -o-box-shadow: 20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
  -ms-box-shadow: 20px 20px 30px 2px rgba(0, 0, 0, 0.2) inset;
}
main .hands .hand:nth-child(2) .fingers {
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
}
main .hands .hand .fingers {
  position: absolute;
  bottom: 20px;
  right: 0;
  left: 0;
  margin: auto;
  width: 50px;
}
main .hands .hand .fingers .finger {
  width: 15px;
  background-color: #fff;
  height: 35px;
  position: absolute;
  border-radius: 5px 5px 40% 40%;
  transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  right: 0;
}
main .hands .hand .fingers .finger:nth-child(2), main .hands .hand .fingers .finger:nth-child(3) {
  height: 27px;
  left: 7px;
  top: 12px;
  transform: rotate(-10deg);
  -webkit-transform: rotate(-10deg);
  -moz-transform: rotate(-10deg);
  -o-transform: rotate(-10deg);
  -ms-transform: rotate(-10deg);
}
main .hands .hand .fingers .finger:nth-child(3) {
  top: 25px;
  left: 13.2px;
  width: 13px;
  border-radius: 0 40% 60% 20%;
  transform: rotate(-30deg);
  -webkit-transform: rotate(-30deg);
  -moz-transform: rotate(-30deg);
  -o-transform: rotate(-30deg);
  -ms-transform: rotate(-30deg);
}
main .lower {
  margin-top: 0px;
  z-index: 0;
}
main .lower .leg {
  background-color: #fff;
  position: absolute;
  left: 0;
  width: 130px;
  height: 200px;
  border-radius: 80px 30% 50% 110%;
  left: 50%;
  transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  box-shadow: 0 -30px 30px 1px rgba(0, 0, 0, 0.2) inset;
  -webkit-box-shadow: 0 -30px 30px 1px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: 0 -30px 30px 1px rgba(0, 0, 0, 0.2) inset;
  -o-box-shadow: 0 -30px 30px 1px rgba(0, 0, 0, 0.2) inset;
  -ms-box-shadow: 0 -30px 30px 1px rgba(0, 0, 0, 0.2) inset;
}
main .lower .leg:nth-child(2) {
  border-radius: 30% 80px 110% 50%;
  transform: translateX(0);
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -o-transform: translateX(0);
  -ms-transform: translateX(0);
}


</style>
@endsection
@section('content')
<h1 style="color:azure;">BAYMAX- Your personal health care companion</h1>
<h3 style="color:azure;">Honestly not sure what happened...</h3>
<main>
  <div class='head'>
    <div class='eye'></div>
  </div>

  <div class='hands'>
    <div class='hand'>
      <div class='fingers'>
        <div class='finger'></div>
        <div class='finger'></div>
        <div class='finger'></div>
      </div>
    </div>
    <div class='hand'>
      <div class='fingers'>
        <div class='finger'></div>
        <div class='finger'></div>
        <div class='finger'></div>
      </div>
    </div>
  </div>

  <div class='body'>
    <div class='logo'>
      <div class='line'></div>
      <div class='bord'></div>
    </div>
    <div class='abdo'></div>
  </div>

  <div class='lower'>
    <div class='leg'></div>
    <div class='leg'></div>
  </div>

</main>
@stop