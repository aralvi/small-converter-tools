<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image to PDF</title>
    <style>
        .page-break{
            page-break-after: always !important;
        }
    </style>
</head>
<body>
    @foreach ($images as $image)
    <div style="text-align: center;">
        <img class="page-break" src="{{public_path('uploaded/'.$image->getClientOriginalName())}}"
        style="max-width: 100%;max-height:100%;page-break-after:always;">

    </div>
    @endforeach
</body>
</html>
