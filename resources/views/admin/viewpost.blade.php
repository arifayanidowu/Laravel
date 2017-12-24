@extends('layout.admin-home-master')

@section('content')

    <div id="stream">
			<table id="tab">
				<thead>
					<tr>
						<th>post title</th>
						<th>post author</th>
						<th>date created</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<tbody>

                    @if(count($posts) > 0)
                        
                        @foreach($posts as $post)

                            <tr>
						        <td>{{ $post->title}}</td>
						        <td>{{ $post-> author}}</td>
						        <td>{{ $post->created_at->diffForHumans() }}</td>
						        <td><a href="/editpost/{{ $post->id }}">edit</a></td>
						        <td><a href="/viewpost/{{ $post->id }}">delete</a></td>
					        </tr>

                        @endforeach

                    @endif

          		</tbody>
			</table>
		</div>
    
   @stop  
