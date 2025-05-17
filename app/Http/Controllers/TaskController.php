namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::orderBy('created_at', 'desc')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        return Task::create([
            'title' => $request->title,
            'completed' => $request->completed ?? false,
        ]);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->only(['title', 'completed']));
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Tarea eliminada']);
    }
}