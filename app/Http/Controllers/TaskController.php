<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

// namespace App\Http\Controllers: Menempatkan controller di namespace yang sesuai dengan konvensi Laravel.
// use App\Models\Task: Mengimpor model Task untuk mengakses data task dari database.
// use App\Models\TaskList: Mengimpor model TaskList untuk mengakses data list task.
// use Illuminate\Http\Request: Mengimpor kelas Request untuk menangani input dari form atau URL.

class TaskController extends Controller
{
    //index() → Mengambil semua daftar tugas dan tugas yang ada untuk ditampilkan di halaman utama.

    // Mengambil input pencarian dari URL (?search=value).
    // Menggunakan query builder when() untuk memfilter daftar list (TaskList) dan task (Task) berdasarkan nama atau deskripsi.
    // Mengurutkan task berdasarkan waktu pembuatan (created_at) dalam urutan menurun (desc).
    // Mengirim data ke view pages.home:
    // title: Judul halaman.
    // lists: Data list yang difilter.
    // tasks: Data task yang difilter.
    // priorities: Prioritas task (diambil dari konstanta model Task::PRIORITIES).

    //store() → Menyimpan tugas baru ke database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'list_id' => 'required'
        ]);

        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id
        ]);


        return redirect()->back();
    }

    //complete() → Menandai tugas sebagai selesai (is_completed = true).
    public function complete($id)
    {
        Task::findOrFail($id)->update([
            'is_completed' => true
        ]);

        return redirect()->back();
    }

    //destroy() → Menghapus tugas berdasarkan ID.
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        $data = [
            'title' => 'Details',
            'task' => $task,
        ];

        return view('pages.details', $data);
    }
    public function dashboard()
    {
        return view('partials.dashboard');
    }

    public function alltask()
    {
        return view('partials.alltask');
    }

    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $tasks = Task::where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->latest()
                ->get();

            $lists = TaskList::where('name', 'like', "%{$query}%")
                ->orWhereHas('tasks', function ($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%");
                })
                ->with('tasks')
                ->get();


            if ($tasks->isEmpty()) {
                $lists->load('tasks');
            } else {
                $lists->load(['tasks' => function ($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%");
                }]);
            }
        } else {
            $tasks = Task::latest()->get();
            $lists = TaskList::with('tasks')->get();
        }

        $data = [
            'title' => 'Home',
            'lists' => $lists,
            'tasks' => $tasks,
            'priorities' => Task::PRIORITIES
        ];

        return view('pages.home', $data);
    }
}
