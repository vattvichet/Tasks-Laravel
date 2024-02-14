@foreach ($tasks as $task)
    <div>
        {{ $task->id }}. {{ $task->title }}
    </div>
    <br>
@endforeach
