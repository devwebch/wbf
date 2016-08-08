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
        return view('leads.list');
    }

    public function insertLead(Request $request)
    {
        $lead = new Lead();
        $lead->name     = 'Galerie Alice Pauli';
        $lead->address  = 'Rue du Port-Franc 9, 1003 Lausanne';
        $lead->url      = 'galeriealicepauli.ch';
        $lead->lat      = 46.521276;
        $lead->lng      = 6.6286718;

        $lead->save();
    }
}