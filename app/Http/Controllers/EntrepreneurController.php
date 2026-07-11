<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrepreneur;

class EntrepreneurController extends Controller
{
    public function index()
    {
        $entrepreneurs = Entrepreneur::where('status', 'active')->latest()->get();
        return view('pages.entrepreneurs.index', compact('entrepreneurs'));
    }

    public function create()
    {
        return view('pages.entrepreneurs.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pin' => 'required|in:HIPMI2026',
            'name' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image|max:2048',
        ], [
            'pin.in' => 'PIN Rahasia yang Anda masukkan salah.',
        ]);

        $data = $request->except('pin');
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('entrepreneurs', 'public');
        }

        Entrepreneur::create($data);

        return redirect()->route('pengusaha.create')->with('success', 'Data Anda berhasil dikirim dan sedang menunggu persetujuan Admin.');
    }
}
