<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<body>

    <form  action="/posts" method="post">
        @csrf
        
      
          <div class="mb-3">
            <label  class="form-label">title</label>
            <input type="text"  value="{{old('title')}}"class="form-control" name="title">
          </div>
          <div class="mb-3">
            <label  class="form-label">description</label>
            <input type="text"  value="{{old('description')}}" class="form-control" name="description">
          </div>
        
        <button type="submit" class="btn btn-primary">add</button>
      </form>

@if($errors->any())
<div class="alert alert-danger">
<ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif



















</body>
</html>