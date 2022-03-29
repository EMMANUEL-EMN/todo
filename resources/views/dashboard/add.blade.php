<div class="create bg-white p-5 m-3">
    <form action="{{ route('todo.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <h4 class="text-center">ADD WHAT TO DO</h4>
        <hr>
        <p>Title</p>
        <p>
            <input type="text" name="title" id="title" required>
        </p>
        <p>Task</p>
        <p>
            <textarea name="task" id="task" rows="5"></textarea>
        </p>
        <p>Time</p>
        <p>
            <input type="date" name="date" id="date" required>
        </p>
        <p>
            <button class="btn btn-warning">ADD</button>
        </p>
    </form>
</div>
</div>
