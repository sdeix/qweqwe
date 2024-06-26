<h1>Создать новость</h1>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    Заголовок <input required type="text" name="title" id=""><br>
    Текст <input required ="text" name="text"><br>
    Изображение <input type="file" alt="" name="image"><br>
    <button type="submit">Создать</button>
</form>