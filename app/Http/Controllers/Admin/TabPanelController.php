<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\TabPanel;
use Illuminate\Http\Request;

class TabPanelController extends Controller
{
    public function index()
    {
        $tabPanels = TabPanel::orderBy('sort_order', 'ASC')->get();
        return view('admin.tab-panel.index', compact('tabPanels'));
    }

    public function create()
    {
        return view('admin.tab-panel.create');
    }

    public function store(Request $request)
    {
        $tabPanel = TabPanel::create([
            'nav_button_text' => $request->nav_button_text,
            'title'           => $request->title,
            'description'     => $request->description,
            'bullet_1'        => $request->bullet_1,
            'bullet_2'        => $request->bullet_2,
            'bullet_3'        => $request->bullet_3,
            'button_text'     => $request->button_text,
            'button_link'     => $request->button_link,
            'sort_order'      => $request->sort_order ?? 0,
            'is_active'       => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('banner_image')) {
            $tabPanel->clearMediaCollection('banner');
            $tabPanel->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->route('tab-panel.index')->with('success', 'Tab Panel eklendi.');
    }

    public function edit(string $id)
    {
        $tabPanel = TabPanel::findOrFail($id);
        return view('admin.tab-panel.edit', compact('tabPanel'));
    }

    public function update(Request $request, string $id)
    {
        $tabPanel = TabPanel::findOrFail($id);
        $tabPanel->update([
            'nav_button_text' => $request->nav_button_text,
            'title'           => $request->title,
            'description'     => $request->description,
            'bullet_1'        => $request->bullet_1,
            'bullet_2'        => $request->bullet_2,
            'bullet_3'        => $request->bullet_3,
            'button_text'     => $request->button_text,
            'button_link'     => $request->button_link,
            'sort_order'      => $request->sort_order ?? 0,
            'is_active'       => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('banner_image')) {
            $tabPanel->clearMediaCollection('banner');
            $tabPanel->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->route('tab-panel.index')->with('success', 'Tab Panel güncellendi.');
    }

    public function destroy(string $id)
    {
        TabPanel::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Silme Başarılı!']);
    }
}
