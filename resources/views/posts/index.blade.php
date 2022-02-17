<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<body>
<a href="/posts/create"> add new post </a>
<table class="table" >

    <tr>
    
    <th>#</th>
    <th>user_name</th>
    <th>user_email</th>
<th>tile</th>
    <th>description</th>
    <th>created_at</th>
    
    </tr>
    @foreach ($posts as $post)
    
    <tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->user->name}}</td>
    <td>{{ $post->user->email}}</td>
    
    <td>{{ $post->title}}</td>
    <td>{{ $post->description}}</td>
    <td>{{ $post->created_at}}</td>
    <td> <a href="/posts/{{ $post->id}}" >show</a></td>
    <td> <a href="/posts/{{ $post->id}}/edit" >edit</a></td>
    <td>

        <form action="/posts/{{ $post->id}}"method="post">
            @csrf
            @method('DELETE')
           <input type="submit" name="delete" value="DELETE">
        </form>
    </td>
    </tr>
    
    
    @endforeach
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </table>
</body>
</html>