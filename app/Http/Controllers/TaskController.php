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
    public function index()
    {
        $data = [
            'title' => 'Home',
            'lists' => TaskList::all(),
            'tasks' => Task::orderBy('created_at', 'desc')->get(),
            'priorities' => Task::PRIORITIES
        ];

        return view('pages.home', $data);
    }

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
}
