<form action="{{Route('postForm1')}}" method="post">
    <input type="text" name="HoTen">
    {!! csrf_field() !!}
    <input type="submit">
</form>
