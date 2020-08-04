<form action="" method="POST">
    {{ csrf_field() }}
    <input name="title" value="{{ $post->title }}">
    <input name="desc" value="{{ $post->desc }}">
    <input name="date" value="{{ $post->date }}">
    <textarea name="text">{{ $post->text }}</textarea>
    <input name="submit" type="submit">
</form>
