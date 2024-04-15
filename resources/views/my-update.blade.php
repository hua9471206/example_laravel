<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/my-update/{{$data->id}}" method="post">
    <h2>編輯</h2>
    <p>
        <label for="">title</label>
        <input type="text" name="title" value="{{$data->title}}">

    </p>
    <p>
        <label for="">content</label>
        <input type="text" name="content" value="{{$data->content}}">
    </p>
    <p>

        <label for="">開始日期</label>
        <input type="date" name="created_at" value="{{date('Y-m-d',strtotime($data->created_at))}}">
    </p>
    @csrf()
    <p>
        <label for="">結束時間</label>
        <input type="date" name="updated_at" value="{{date('Y-m-d',strtotime($data->updated_at))}}">
    </p>
    <input type="submit" value="送出">
</form>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>