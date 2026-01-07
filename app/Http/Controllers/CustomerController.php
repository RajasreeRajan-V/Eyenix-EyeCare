<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EyeCamp;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Appointment;
use App\Models\Collection;
use App\Models\Brand;
use App\Models\ContactLens;
use App\Models\Shape;
use App\Models\Frame;
use App\Models\ProductColor;
use App\Models\LensSolution;
use App\Models\Service;
use App\Models\Review;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $about = About::latest()->first();
        $services = Service::all();
        $shapes = Shape::all();
        $brands = Brand::all();
        $eyeglasses = Collection::all();
        $collections = Collection::orderBy('created_at', 'desc')->get();
        $reviews = Review::all();
        return view('customer.dashboard', compact('about','services', 'shapes', 'brands', 'eyeglasses', 'collections', 'reviews'));
    }
    public function about()
    {
        $about = About::latest()->first();
        $services = Service::all();
        return view('customer.about',compact('about','services'));
    }
    public function gallery()
    {
         $gallerys = Gallery::all();
        return view('customer.gallery', compact('gallerys'));
    }
    public function service()
    {
        $services = Service::all();
        return view('customer.service', compact('services'));
    } 
    public function eyecamp()
    {
        $eyeCamps = EyeCamp::all();
        $services = Service::all();
        return view('customer.eyecamp',compact('eyeCamps','services'));
    }  
    public function AppointmentStore(Request $request)
    {
        $request->validate([
            'eye_camp_id' => 'required|exists:eye_camps,id',
            'name'        => 'required|string|max:255',
            'phone'       => 'required|string|max:20',
        ]);

        Appointment::create([
            'eye_camp_id' => $request->eye_camp_id,
            'name'        => $request->name,
            'phone'       => $request->phone,
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function eyeglass()
    {
        // All Eye Glass collections
        $eyeglasses = Collection::where('type', 'EyeGlass')->get();

        // Filters
        $brands = Brand::whereHas('collections', fn($q) => $q->where('type', 'EyeGlass'))->get();
        $shapes = Shape::whereHas('collections', fn($q) => $q->where('type', 'EyeGlass'))->get();
        $frames = Frame::whereHas('collections', fn($q) => $q->where('type', 'EyeGlass'))->get();
        $colors = ProductColor::whereHas('collections', fn($q) => $q->where('type', 'EyeGlass'))->get();

        return view('customer.eyeglass', compact('eyeglasses', 'brands', 'shapes', 'frames', 'colors'));
    }

    public function filterEyeglasses(Request $request)
    {
        $query = Collection::query()->where('type', 'EyeGlass');

        if ($request->brand) {
            $query->where('brand_id', $request->brand);
        }
        if ($request->shape) {
            $query->where('shape_id', $request->shape);
        }
        if ($request->frame) {
            $query->where('frame_id', $request->frame);
        }
        if ($request->gender) {
            $query->where('gender', $request->gender);
        }
        if ($request->color) {
            $query->whereHas('colors', fn($q) => $q->where('product_colors.id', $request->color));
        }

        $eyeglasses = $query->get();

        return view('customer.eyeglass-ajax', compact('eyeglasses'))->render();
    }
    public function sunglass()
    {
        // All Eye Glass collections
        $sunglasses = Collection::where('type', 'SunGlass')->get();

        // Filters
        $brands = Brand::whereHas('collections', fn($q) => $q->where('type', 'SunGlass'))->get();
        $shapes = Shape::whereHas('collections', fn($q) => $q->where('type', 'SunGlass'))->get();
        $frames = Frame::whereHas('collections', fn($q) => $q->where('type', 'SunGlass'))->get();
        $colors = ProductColor::whereHas('collections', fn($q) => $q->where('type', 'SunGlass'))->get();

        return view('customer.sunglass', compact('sunglasses', 'brands', 'shapes', 'frames', 'colors'));
    }

    public function filterSunglasses(Request $request)
    {
        $query = Collection::query()->where('type', 'SunGlass');

        if ($request->brand) {
            $query->where('brand_id', $request->brand);
        }
        if ($request->shape) {
            $query->where('shape_id', $request->shape);
        }
        if ($request->frame) {
            $query->where('frame_id', $request->frame);
        }
        if ($request->gender) {
            $query->where('gender', $request->gender);
        }
        if ($request->color) {
            $query->whereHas('colors', fn($q) => $q->where('product_colors.id', $request->color));
        }

        $eyeglasses = $query->get();

        return view('customer.sunglass-ajax', compact('sunglasses'))->render();
    }
    public function contactlens()
    {
        $contactlens = ContactLens::all();
        return view('customer.contactlens', compact('contactlens'));
    } 
    public function contactlensSolutions(Request $request)
    {
        $contactLenses = ContactLens::select('id', 'name','img')->get();

        $contactSolutions = LensSolution::with('contactLens')
            ->when($request->contact_lens_id, function ($query) use ($request) {
                $query->where('contact_lens_id', $request->contact_lens_id);
            })
            ->get();

        return view(
            'customer.lens-solution',
            compact('contactSolutions', 'contactLenses')
        );
    }
}
