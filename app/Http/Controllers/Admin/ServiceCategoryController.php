<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order', 'ASC')->get();
        return view('admin.service-category.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('admin.service-category.create');
    }

    public function store(Request $request)
    {
        $serviceCategory = new ServiceCategory();
        $serviceCategory->title       = $request->title;
        $serviceCategory->slug             = SlugHelper::generateUniqueSlug(ServiceCategory::class, $request->title);
        $serviceCategory->meta_description = $request->meta_description;
        $serviceCategory->description      = $request->description;
        $serviceCategory->sort_order  = $request->sort_order;
        $serviceCategory->is_active   = $request->is_active;
        $serviceCategory->save();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $serviceCategory->tags()->sync($tagIds);

        if ($request->hasFile('banner_image')) {
            $serviceCategory->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->route('service-category.index')->with('success', 'Kategori eklendi.');
    }

    public function edit(string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $tags = $serviceCategory->tags->pluck('name')->toArray();
        return view('admin.service-category.edit', compact('serviceCategory', 'tags'));
    }

    public function update(Request $request, string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        if ($serviceCategory->title !== $request->title) {
            $serviceCategory->slug = SlugHelper::generateUniqueSlug(ServiceCategory::class, $request->title);
        }
        $serviceCategory->title            = $request->title;
        $serviceCategory->meta_description = $request->meta_description;
        $serviceCategory->description      = $request->description;
        $serviceCategory->sort_order  = $request->sort_order;
        $serviceCategory->is_active   = $request->is_active;
        $serviceCategory->update();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $serviceCategory->tags()->sync($tagIds);

        if ($request->hasFile('banner_image')) {
            $serviceCategory->clearMediaCollection('banner');
            $serviceCategory->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->route('service-category.index')->with('success', 'Kategori güncellendi.');
    }

    public function destroy(string $id)
    {
        ServiceCategory::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Silme Başarılı!']);
    }
}
