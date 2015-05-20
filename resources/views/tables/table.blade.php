@extends('app')

@section('title', 'Table')

@section('content')

<table>
	@for ($i = 0; $i < count($values); $i++)
	<tr>
		@for ($j = 0; $j < count($values[$i]); $j++))
		<td>{{ $values[$i][$j] }}</td>
		@endfor
	</tr>
	@endfor 
</table>

@endsection