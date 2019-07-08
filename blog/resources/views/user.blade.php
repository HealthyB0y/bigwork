<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
</style>
</head>
<body style="background-color: #2e3b41;margin: 0px;color: white; ">
	<div class="box">
  		<div class="box__inner">
  			
    		<div id="head" style="height: 35px; background-color:#106705;">
				
				<a href="" style="margin-left: 5px;"><img src="{{asset('img/a.jpeg')}}"></a>
				
				<a href="{{url('login')}}" 
				style="float: right; margin-top: 4px; margin-right: 10px;">Logout</a>

				<a href="" style="float: right; margin-top: 4px; margin-right: 10px;">
					<img src="{{asset('img\messenger.png')}}"></a>

				<a style="float: right; margin-top: 4px; margin-right: 10px;">
					<img src="{{asset('img\notification.png')}}"></a>
				
				<a href="" class="a" 
				style="float: right; margin-top: 4px; margin-right: 50px;">UserName	</a>
				<a href="" style="float: right; margin-top: 4px; margin-right: 10px;"><img src="{{asset('img\anh.jpg')}}"></a>
				
			</div>
			<div id="body" style="margin-left: 10px;
				margin-top: 5px; ">
				<form action="" method="POST" enctype="multipart/form-data">	
					<div style="width: 10%;float: left;">
						<a href="{{url('personal')}}"><img src="{{asset('img/anh.jpg')}}">Username</a>
						<ul style="">
							<li><a href="" >Portrait</a></li>
							<li><a href="" >Anime</a></li>
							<li><a href="" >Movie</a></li>
							<li><a href="" >Nature</a></li>
							<li><a href="" >Khác</a></li>
						</ul>	
					</div>	
					
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<div style="width: 90% ; float: right;  ">
						<table>
							<div>
							<label>Tiêu đề</label>
							<input class="form-control" name="tieude" placeholder="nhập tiêu đề"/>
							</div>
							<div>
							<label>Nội dung</label>
							<input class="form-control" name="noidung" placeholder="nhập tiêu đề"/>
							</div>
							<div>
							<label>Hình ảnh</label>
							<br>	
							<input type="file" name="hinh" />
							</div>
							<form>
								<p>Thể loại
								<input type="radio" name="theloai" value="Portrait" style="margin-left: 25px;"/>Portrait
								<input type="radio" name="theloai" value="Anime" style="margin-left: 25px;"/>Anime
								<input type="radio" name="theloai" value="Movie" style="margin-left: 25px;"/>Movie
								<input type="radio" name="theloai" value="Nature" style="margin-left: 25px;"/>Nature
								<input type="radio" name="theloai" value="khac" style="margin-left: 25px;"/>Khác
								</p>
								<input type="submit" name="Submit">
							</form>
						</table>
						@foreach($post as $sd)
							<table>
								<div>
									@foreach($user as $us)
										@if($us->id == $sd->iduser)
											<p >{{$us->name}}</p>
										@endif										
									@endforeach
									<p>#{{$sd->genre}}</p>
									<h5>{{$sd->heading}}</h5>
									<p>{{$sd->content}}</p>
									<img width="400px" src="http://localhost:8000/img/{{$sd->img}}"/>
								</div>
								<br>
								<br>
							</table>	
						@endforeach
					</div>
				</form>
			</div>
			<div id="end">
				
			</div>
  		</div>
	</div>
	
</body>
</html>