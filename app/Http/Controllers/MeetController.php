<?php

namespace App\Http\Controllers;

use App\Models\meet;
use illuminate\http\Request;


class MeetController extends Controller
{
    public function view_1()
    {
        return view('meet.view_1');
    }
    public function view_2()
    {
        return view('meet.view_form_create');
    }
    public function store_1(Request $request)
    {
        $n = new meet();
        $n->oaci = $request->input('m_1');
        $n->fecha = $request->input('m_2');
        $n->gg = $request->input('m_3');
        $n->dd = $request->input('m_4');
        $n->ff = $request->input('m_5');
        $n->fmfm = $request->input('m_6');
        $n->vVariable_i = $request->input('m_7_1');
        $n->vVariable_f = $request->input('m_7_2');
        $n->vvvv = $request->input('m_8');
        $n->dv = $request->input('m_9');
        $n->ww = $request->input('m_10');
        $n->ww1 = $request->input('m_11');
        $n->www = $request->input('m_12');
        $n->ns1 = $request->input('m_13');
        $n->hhh1 = $request->input('m_14');
        $n->cbtcu1 = $request->input('m_15');
        $n->ns2 = $request->input('m_16');
        $n->hhh2 = $request->input('m_17');
        $n->cbtcu2 = $request->input('m_18');
        $n->ns3 = $request->input('m_19');
        $n->hhh3 = $request->input('m_20');
        $n->cbtcu3 = $request->input('m_21');
        $n->ns4 = $request->input('m_22');
        $n->hhh4 = $request->input('m_23');
        $n->tt = $request->input('m_24');
        $n->td = $request->input('m_25');
        $n->qfe = $request->input('m_26');
        $n->qnh = $request->input('m_27');
        $n->pulghg = $request->input('m_28');
        $n->pcord = $request->input('m_29');
        $n->uuu = $request->input('m_30');
        $n->notas = $request->input('m_31');
    }
}
