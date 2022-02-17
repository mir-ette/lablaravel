<table border=2>
<tr>

<th>#</th>
<th>name</th>
<th>body</th>
<th>title</th>

</tr>
@foreach ($posts as $post)

<tr>
<td>{{ $post['id']}}</td>
<td>{{ $post['name']}}</td>
<td>{{ $post['body']}}</td>
<td>{{ $post['title']}}</td>
<td> <a href="/show/{{ $post['id']}}" >show</a></td>
</tr>


@endforeach

















</table>