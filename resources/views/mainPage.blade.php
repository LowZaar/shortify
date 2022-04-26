<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        .container .row{
            height: 100vh;
        }
    </style>
    <link href = {{ asset("/css/app.css") }} rel="stylesheet" />

</head>
<body class="antialiased">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 form-group">
            <div class="mx-auto pb-5" id="homepageDiv" style="width: 300px;">
                <video loop id="homepageVideo">
                    <source src="{{asset("/assets/homeIcon.mp4")}}">
                </video>
            </div>

            <input type="text" class="form-control" id="url">
        </div>
    </div>
</div>
</div>


<script src="{{asset("/js/app.js")}}"></script>
<script>
    $(document).ready(function(){
        $('#homepageVideo').trigger('pause');
        $('#homepageDiv').hide();
        $('#url').keyup(function(e){
            var code = e.key;
            if(code === "Enter"){
                console.log("asdf");
                $('#homepageDiv').fadeIn();
                $('#homepageVideo').trigger('play');
            }
        })
    })
</script>
</body>
</html>
