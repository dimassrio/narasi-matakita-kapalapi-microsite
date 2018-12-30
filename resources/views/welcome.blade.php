<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:200,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
			h2, h1, p{
				color: white;
				font-family: 'Lato', Arial, sans-serif;
			}
			h2{
				font-weight: 200;
			}
			p{
				font-weight: 600;
			}
			.welcome--flex{
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}
			.welcome--content{
				text-align: center;
				/* background: #222; */
				/* padding: 40px 20px; */
			}
			h2{
				font-size: 2em;
			}
			h1{
				font-size: 4em;
			}
			h1 span{
				color: red;
			}
			p{
				font-size: 1em;
			}
			.welcome--wrapper{
				background: url('../image/communities.jpg');
				background-size: cover;
				min-height: 100vh;
				min-width: 100vw;
				max-height: 100vh;
				max-width: 100vw;
			}
			.welcome--featured{
				width: 100%;
			}
        </style>
    </head>
    <body>
        <div class="welcome--wrapper">
			<div class="container">
				<div class="col-md-8 offset-md-2">
					<div class="welcome--flex">
						<div class="welcome--content">
							<h2>Secangkir Semangat</h2>
							<img src="{{asset('image/logo-matakita.png')}}" alt="" class="welcome--featured">
							<!-- <p>Jadilah bagian dari komunitas kreatif Narasi dan Kapal Api</p> -->
							<a href="/login" class="btn btn-light btn-ghost btn-blank btn-lg">Login</a>
							<a href="/register" class="btn btn-danger btn-ghost btn-lg">Daftar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
