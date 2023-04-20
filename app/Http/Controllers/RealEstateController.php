<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealEstateController extends Controller
{
    function index()
    {
        return view('/home');
    }
    function list(Request $request)
    {
        $data = Listing::all();
        // $list = DB::table('Listings')->get();
        // $type = DB::table('Listings')->where('type', $request->type)->get();
        // $status = DB::table('Listings')->where('status', $request->status)->get();
        return view('/list', ['listings' => $data]);
    }
    function admin()
    {
        // $data = DB::table('Listings');
        $data = DB::table('Listings')->count();
        $vaccant = DB::table('Listings')->select(DB::raw('count(*) as user_count, status'))
            ->where('status', 'Vaccant');
        return view('/admin', ['total' => $data, 'empty' => $vaccant]);
    }
    function create()
    {
        return view('/upload');
    }
    function store(Request $request)
    {
        // variables to be inserted here.
        $post = new Listing();
        $post->listing_name = $request->name;
        $post->location = $request->location;
        $post->type = $request->type;
        $post->rent = $request->rent;
        $post->size = $request->size;
        $post->save();
        return redirect('/upload')->with('status', 'Record updated successfully');
    }
    function show()
    {
        $data = Listing::all();
        return view('home', ['listings' => $data]);
    }
    function search(Request $request)
    {
        $phrase = $request->search_name;
        $payload = DB::table('Listing')->where('listing_name', $phrase);
        return view('/list', ['listing' => $payload]);
    }
    function update(Request $request)
    {
        $id = $request->id;
        $payload = DB::table('Listings')->where('id', $id)->get();
        return view('edit', ['post' => $id, 'payload' => $payload]);
    }
    function link_tenant()
    {
        $data = DB::table('Listings')->where('status', '=', 'Vaccant')->get();
        return view('/link_tenant', ['data' => $data]);
    }
    function tenant_reg(Request $request)
    {
        $name = $request->name;
        $id = $request->id;
        return view('tenant_reg')->with(['id' => $id, 'name' => $name]);
    }
    function tenant_store(Request $request)
    {

        DB::table('Tenant')->insert([
            'Tenant_Name' => $request->tenant_name,
            'Phone' => $request->phone,
            'Email' => $request->email,
            'Listing_ID' => $request->id
        ]);
        DB::table('Listings')->where('id', $request->id)->update(['status' => 'Occupied']);
        return redirect('/admin')->with('status', 'Tenant registered and linked succesfully');
    }
    function vaccant()
    {

        $payload = DB::table('Listings')->where('status', 'Vaccant')->get();
        return view('vaccant', ['payload' => $payload]);
    }
    function tenant()
    {
        $list = DB::table('Listings')->where('id', '')->get();
        // $list_name=DB::table('Tenant')->where('Listing_ID', $list->id)->get();
        $payload = DB::table('Tenant')->get();
        return view('/tenant')->with(['payload' => $payload, 'list' => $list,]);
    }
    function terminate(Request $request)
    {
        DB::table('Listings')->where('id', $request->id)->update(['status' => 'Vaccant']);
        DB::table('Tenant')->where('ID', $request->tenantID)->delete();
        return redirect('/admin')->with('status', 'Tenant Deleted and listing reverted to vaccant');
    }
    function details(Request $request)
    {
        $listing = DB::table('Listings')->where('id', $request->id)->get();
        $tenant = DB::table('Tenant')->where('Listing_ID', $request->id)->get();
        return view('/details', ['listing' => $listing, 'tenant' => $tenant]);
    }
    function update_listing(Request $request)
    {
        DB::table('Listings')->where('id', $request->id)->update([
            'listing_name' => $request->name,
            'location' => $request->location,
            'type' => $request->type,
            'rent' => $request->rent
        ]);
        return redirect('/admin')->with('status', 'Listing updated succesfully');
    }
    function delete(Request $request)
    {
        DB::table('Listings')->where('id', $request->id)->delete();
        DB::table('Tenant')->where('Listing_ID', $request->id)->delete();
        return redirect('/admin')->with('status', 'Listing deleted succesfully');
    }
    function table(Request $request)
    {
        $sort_column = $request->sort;
        $type_column = $request->type;
        $status_column = $request->status;
        $sort = DB::table('Listings')->orderBy($sort_column, 'asc')->get();
        $type = DB::table('Listings')->where('type', '=', $type_column)->get();
        $status = DB::table('Listings')->where('status', '=', $status_column)->get();
        if (isset($type_column)) {
            return view('/list', ['listings' => $type]);
        } elseif (isset($sort)) {
            return view('/list', ['listings' => $sort]);
        } else
            return view('/list', ['listings' => $status]);
    }
}
