
 <style>
    .error{
      border:2px solid red;
    }
  </style>
<p><abbr title="World Wide Web">WWW</abbr> must know about IT Fields.</p>
<form action="/create" method="post">
  @csrf

  <input type="text" class="@error('title') error @enderror" name="name" placeholder="Name">
  <input type="submit" value="Create"><br>(

   @error('title')
  {{$message}}
  @enderror

</form>
