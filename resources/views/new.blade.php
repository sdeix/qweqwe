<a href="/">Назад</a>
<h1>{{$news->title}}</h1>
<p>Автор: {{$creator->login}}</p>
<p>{{$news->created_at}}</p>
<p>   {{$news->text}}</p>

@if ($img)
<img src={{asset('images/'.$img->url)}}?? alt="">
@endif

<br>
@if (count($comments)!=0)
@foreach ($comments as $com)

<div>
    {{$com->text}}
    <p>{{$com->created_at}}</p>
</div>
@endforeach
@endif
<br>
<form action="" method="post">
    <p>Напишите комментарий</p>
    @csrf
    <input type="text" name="text">
    <input type="text" hidden name="new_id" value={{$news->id}}>
    <button type="submit">Отправить</button>

</form>
