<form action="{{route('store')}}" method="post">

    @csrf

    <div>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject">
    </div>

    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Send!</button>

</form>
