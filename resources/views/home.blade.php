@extends('base')

@section('content')
    <style>
        body {
            background-color: azure;
        }
        .intro {
            padding: 50px;
        }
        .image {
            background-image: url(background2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        height: 500px;
	        width: 1380px;
        }
        .txt {
            position: relative;
	        top: 10000px;
            left: 60px;
        }
        h1{

            color: white;
        }
    </style>

    <body>
        <div>
            <div class="container">
                <div class="row">
                    <div class="image">
                    <div class="container intro" style="text-align: center">
                   <h1><b>Welcome to CheapTalk</b></h1>
                   </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
