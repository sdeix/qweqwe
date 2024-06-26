@if (Auth::user())
    <h1><a href="/logout">Выйти</a></h1>
    <h1><a href="/makenew">Сделать новость</a></h1>
@else
    <h1><a href="/register">Регистрация</a></h1>
    <h1><a href="/login">Войти</a></h1>
@endif

{{Auth::user()->login ?? ''}}
<br>
@if ($news)
<h1>Новости </h1>
    @foreach ($news as $new)
        <h2><a href="new/{{$new->id}}">{{ $new->title }}</a></h2> 
        {{ $new->created_at }}<br><br>
    @endforeach 
@endif
