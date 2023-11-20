<x-app-layout>

  <a href="{{url('/')}}" style=padding-left:93%;>home</a>
    <div style="padding-left:35%; padding-top:10%"> 
  <label style="padding-left:15%;font-weight:bold; font-size:20px;">Add A Post</label>
  <br>
  <form action="/uploadpost" enctype="multipart/form-data" method= "post">
    @csrf
    <label>Description</label>
    <input type="text" name ="description"><br> <br>
  <label>upload image</image>
  <input type = "file" name ="image"><br><br>
<input type="submit" name="" style="background-color:skyblue;cursor:pointer;padding:10px; border-radius:10px;">
</form>
</div>
</x-app-layout>
