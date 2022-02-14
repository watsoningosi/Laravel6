<form action="/create" method="post">

@csrf
<label for="title">Title</label>
<input type="text" name="title">
<label for="body">Body</label>
<textarea name="body"  cols="30" rows="10"></textarea>
<button>Send</button>

</form>