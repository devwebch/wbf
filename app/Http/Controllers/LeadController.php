<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 08.08.2016
 * Time: 16:45
 */

namespace App\Http\Controllers;


use App\Lead;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LeadController extends Controller
{

    public function getLeads()
    {
        // retrieve all entries
        $leads  = Lead::all();

        return view('leads.list', ['leads' => $leads]);
    }

    public function newLead(Request $request)
    {
        return view('leads.new');
    }

    public function storeLead(Request $request)
    {
        // set validation rules
        $this->validate($request, [
            'leadName'      => 'required',
            'leadAddress'   => 'required',
            'leadUrl'       => 'required|url',
            'leadLat'       => 'required|numeric',
            'leadLng'       => 'required|numeric'
        ]);


        // create a new Lead model
        $lead   = new Lead;
        $lead->name        = $request->leadName;
        $lead->address     = $request->leadAddress;
        $lead->url         = $request->leadUrl;
        $lead->lat         = $request->leadLat;
        $lead->lng         = $request->leadLng;

        // insert the model in DB
        $lead->save();

        // redirect to Leads list
        return redirect('leads/list');
    }

    public function deleteLead($id)
    {
        $lead   = Lead::find($id);
        $lead->delete();

        return redirect('leads/list');
    }
}