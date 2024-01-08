<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        return view('admin.Banner.index', compact('banner'));
    }


    public function update(Request $request)
    {
        try {
            $banner = Banner::first();

            if ($request->hasfile('about_banner')) {
                if (file_exists($banner->about_banner) && $banner->about_banner != null) {
                    unlink($banner->about_banner);
                }
                $image = $request->file('about_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->about_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('message_banner')) {
                if (file_exists($banner->message_banner) && $banner->message_banner != null) {
                    unlink($banner->message_banner);
                }
                $image = $request->file('message_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->message_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('charter_banner')) {
                if (file_exists($banner->charter_banner) && $banner->charter_banner != null) {
                    unlink($banner->charter_banner);
                }
                $image = $request->file('charter_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->charter_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('mission_vision_banner')) {
                if (file_exists($banner->mission_vision_banner) && $banner->mission_vision_banner != null) {
                    unlink($banner->mission_vision_banner);
                }
                $image = $request->file('mission_vision_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->mission_vision_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('culture_banner')) {
                if (file_exists($banner->culture_banner) && $banner->culture_banner != null) {
                    unlink($banner->culture_banner);
                }
                $image = $request->file('culture_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->culture_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('sprit_banner')) {
                if (file_exists($banner->sprit_banner) && $banner->sprit_banner != null) {
                    unlink($banner->sprit_banner);
                }
                $image = $request->file('sprit_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->sprit_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('social_banner')) {
                if (file_exists($banner->social_banner) && $banner->social_banner != null) {
                    unlink($banner->social_banner);
                }
                $image = $request->file('social_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->social_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('news_event_banner')) {
                if (file_exists($banner->news_event_banner) && $banner->news_event_banner != null) {
                    unlink($banner->news_event_banner);
                }
                $image = $request->file('news_event_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->news_event_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('career_banner')) {
                if (file_exists($banner->career_banner) && $banner->career_banner != null) {
                    unlink($banner->career_banner);
                }
                $image = $request->file('career_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->career_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('terms_condition_banner')) {
                if (file_exists($banner->terms_condition_banner) && $banner->terms_condition_banner != null) {
                    unlink($banner->terms_condition_banner);
                }
                $image = $request->file('terms_condition_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->terms_condition_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('governance_banner')) {
                if (file_exists($banner->governance_banner) && $banner->governance_banner != null) {
                    unlink($banner->governance_banner);
                }
                $image = $request->file('governance_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->governance_banner = 'uploads/banner/' . $imageName;
            }
            if ($request->hasfile('managment_banner')) {
                if (file_exists($banner->managment_banner) && $banner->managment_banner != null) {
                    unlink($banner->managment_banner);
                }
                $image = $request->file('managment_banner');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/banner', $imageName);
                $banner->managment_banner = 'uploads/banner/' . $imageName;
            }

            $banner->update();

            return redirect()->back()->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }
}
