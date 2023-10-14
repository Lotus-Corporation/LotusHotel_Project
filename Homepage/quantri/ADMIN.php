<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="css/font-awesome.min.css" rel="stylesheet"/>
</head>
<style>

body {
	background: linear-gradient(rgb(193, 233, 244),white) 	
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
    margin-top: 70px;
}

.khung_ngoai {		
	background:linear-gradient(white,rgb(193, 233, 244)); 	
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px rgb(35, 95, 112);
    border-radius:45px
}

.login {
	width: 320px;
	padding: 40px;
	padding-top: 156px;
}

.icon {
	position: absolute;
	top: 25px;
	color:  rgb(35, 95, 112);
    font-size:22px
}

.khung_dangnhap {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 85%;
}

.khung_dangnhap:focus,
.khung_dangnhap:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.button_dangnhap {
	background: white;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 0.5px solid rgb(35, 95, 112);
	font-weight: 700;
	width: 85%;
	color: rgb(37, 105, 132);
	box-shadow: 0px 2px 2px rgb(35, 95, 112);
	cursor: pointer;
	
}

.button_dangnhap:active {
    background-color:rgb(193, 233, 244)}
.button_dangnhap:hover {
	border-color: white;
	outline: none;
}

</style>
<div class="container">
<div style="font-family:Garamond; font-size:50px; margin-bottom:15%;padding: 50px">LOTUS HOTEL</div>
	<div class="khung_ngoai">
			<form action="index_menu_admin.php" method="post" class="login">
				<div style="padding: 20px 0px;position: relative;">
					<i class="icon fa fa-user"></i>
					<input type="text" class="khung_dangnhap" placeholder="User name / Email" name="TEN_DN">
				</div>
				<div style="padding: 20px 0px;position: relative;">
					<i class="icon fa fa-lock"></i>
					<input type="password" class="khung_dangnhap" placeholder="Password" name="PASS">
                </div>
				<input type="submit" value="LOG IN NOW" class="button_dangnhap" name="dangnhap">
			</form>
	</div>
</div>

