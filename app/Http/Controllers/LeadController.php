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

    public function getLeads(Request $request)
    {
        // get the authenticated user
        $user   = $request->user();

        // retrieve all entries
        $leads  = Lead::where('user_id', $user->id)
                    ->orderBy('name', 'asc')
                    ->get();

        return view('leads.list', ['leads' => $leads]);
    }

    public function newLead(Request $request)
    {
        $lead = new Lead();
        return view('leads.form', ['lead' => $lead]);
    }

    public function editLead(Lead $lead, Request $request)
    {
        // get the authenticated user
        $user   = $request->user();

        // if the user ID of the lead matches the logged in user
        if ( $user->id == $lead->user_id ) {
            $request->request->add(['leadID' => $lead->id]);
            return view('leads.form', ['lead' => $lead, 'submit_label' => 'Save']);
        } else {
            return view('shared.error_page');
        }
    }

    public function storeLead(Request $request)
    {
        // get the authenticated user
        $user   = $request->user();

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
        $lead->notes       = $request->leadNotes;
        $lead->user_id     = $user->id;

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