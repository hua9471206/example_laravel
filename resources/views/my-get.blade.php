<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        padding: 0 0.5rem;
        text-align: center;
    }
</style>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>title</td>
            <td>content</td>
            <td>start_time</td>
            <td>end_time</td>
            <td>-</td>
            <td>-</td>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><a href="/my-update/{{$item->id}}">編輯</a></td>
                <td><a href="/my-delete/{{$item->id}}">刪除</a></td>
            </tr>
        @endforeach
    </table>

    <form action="/my-post" method="post">
        <h2>ToDoList</h2>
        <p>
            <input type="text" name="title" placeholder="標題">
        </p>
        <P>
            <input type="text" name="content" placeholder="內容">
        </P>
        <P>
            <label for="">開始時間</label>
            <input name="created_at" type="date">
        </P>
        <p>
            <label for="">結束時間</label>
            <input name="updated_at" type="date">
        </p>
        @csrf()
        <p>
            <button type="submit">新增</button>
        </p>
    </form>
</body>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
</html>