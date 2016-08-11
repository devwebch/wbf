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

    public function __construct()
    {
        // require authentication for the whole Controller
        $this->middleware('auth');
    }

    public function getLeads()
    {
        // retrieve all entries
        $leads  = Lead::all();

        return view('leads.list', ['leads' => $leads]);
    }

    public function newLead(Request $request)
    {
        $lead = new Lead();
        return view('leads.form', ['lead' => $lead]);
    }

    public function editLead(Lead $lead, Request $request)
    {
        $request->request->add(['leadID' => $lead->id]);
        return view('leads.form', ['lead' => $lead, 'submit_label' => 'Save']);
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

        // if it is an update, we retrieve the Lead object
        if ($request->_id) {
            $lead = Lead::find($request->_id);
        } else {
            $lead   = new Lead;
        }

        // set the model value
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

    public function deleteLead(Lead $lead)
    {
        $lead->delete();
        return redirect('leads/list');
    }
}