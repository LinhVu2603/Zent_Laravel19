<form method="POST" action="{{ route('task.store') }}">
	{{ csrf_field()}}
	<input type="text" name="task_name">
	<input type="text" name="username">
	<input type="text" name="email">
	<input type="submit" name="">
</form>