<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('sort_order')->get();
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $partner = Partner::create([
            'name'       => $request->name,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('image')) {
            $partner->addMedia($request->image)
                ->usingFileName(SlugHelper::imageSlugName($request->image))
                ->toMediaCollection('image');
        }

        return redirect()->route('partner.index')->with('success', 'Kurum eklendi.');
    }

    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $partner = Partner::findOrFail($id);
        $partner->update([
            'name'       => $request->name,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('image')) {
            $partner->clearMediaCollection('image');
            $partner->addMedia($request->image)
                ->usingFileName(SlugHelper::imageSlugName($request->image))
                ->toMediaCollection('image');
        }

        return redirect()->route('partner.index')->with('success', 'Kurum güncellendi.');
    }

    public function destroy(string $id)
    {
        Partner::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Silme Başarılı!']);
    }
}
