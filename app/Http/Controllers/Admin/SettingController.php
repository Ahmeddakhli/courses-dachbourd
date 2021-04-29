<?php


namespace App\Http\Controllers\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $data= Setting::all()->where('page',"services");
        $link= Setting::all()->where('page',"link");
        return view('admin/setting',compact('data','link'));
    } 


    public function addtoservices(Request $request)
    {
        $request->validate([
            'value_ar' =>  'required|string |max:255',
            'value_en' =>  'required|string |max:255',
            'sub' => 'required|string |max:255',
            'name' => 'required|string |max:255',
        ]);
         
        Setting::create( $request->all());
        
        return redirect()->route('settings')
                        ->with('success','setting created successfully.');
        
    }
    public function addtolinks(Request $request)
    {
        $request->validate([
            'value_ar' =>  'required|string |max:255',
         
            'name' => 'required|string |max:255',
        ]);
         
        Setting::create( $request->all());
        
        return redirect()->route('settings')
                        ->with('success','setting created successfully.');
        
    }
    public function updatesetting(Request $request, $id)
    {
        $request->validate([
            'text' => [ 'string'],
            'text1' =>[ 'string'] ,
            'sub' =>[ 'string'] ,
        ]);
         
        Setting::find($id)->update([
            'value_ar' => $request->text,
            'value_en' => $request->text1,
            'sub' => $request->sub,
        ]);
        
        return redirect()->route('settings')
                        ->with('success','sting created successfully.');
        
    }
}
