<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Показать админ-панель
     */
    public function index()
    {
        $sections = [
            'header' => 'Заголовок',
            'purpose' => 'Цель канала',
            'content' => 'Содержание',
            'purchase' => 'Покупка',
            'footer' => 'Колонтитул',
        ];

        $contents = SiteContent::all()->groupBy('section');

        return view('admin.index', compact('sections', 'contents'));
    }

    /**
     * Обновить контент
     */
    public function update(Request $request, $id)
    {
        $content = SiteContent::findOrFail($id);

        $validated = $request->validate([
            'value' => 'required|string',
        ]);

        $content->update($validated);

        return redirect()->route('admin.index')->with('success', 'Контент обновлен успешно!');
    }

    /**
     * Обновить несколько элементов контента (AJAX)
     */
    public function updateMultiple(Request $request)
    {
        $updates = $request->input('updates', []);

        foreach ($updates as $id => $value) {
            $content = SiteContent::find($id);
            if ($content) {
                $content->update(['value' => $value]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Контент обновлен']);
    }
}
