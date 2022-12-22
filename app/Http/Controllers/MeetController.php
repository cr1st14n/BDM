<?php

namespace App\Http\Controllers;

use App\Models\meet;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function store_12(Request $request)
    {
        return $request;
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

        return $res = $n->save();
    }
    public function list_1()
    {
        $data = meet::orderby('id', 'asc')->get();
        $meet = array();

        foreach ($data as $key => $value) {
            $campo_1 = Carbon::parse($value->fecha)->format('d/m/y');
            $campo_2 = Carbon::parse($value->gg)->format('H:i');
            $campo_3 = $retVal = (Carbon::parse($value->gg)->format('i') == '00') ? 'METAR' : 'SPECI';
            $campo_4 = $value->oaci;
            $campo_5 = Carbon::parse($value->fecha)->format('d') . '' . Carbon::parse($value->gg)->format('Hi') . 'Z';
            $tr = $value->dd;
            if (strlen($value->dd) == 1) {
                $tr = '00' . $value->dd;
            }
            if (strlen($value->dd) == 2) {
                $tr = '0' . $value->dd;
            }
            if ($value->dd == 999) {
                $tr = 'VRB';
            }
            $dt = $value->ff;
            if (strlen($value->ff) == 1) {
                $dt = '0' . $value->ff;
            }
            $fmfm='';
            if ($value->fmfm >0 ) {
                $fmfm2 = $value->fmfm;
                if (strlen($value->fmfm) == 1) {
                    $fmfm2 = '0' . $value->fmfm;
                }
                $fmfm = 'G' . $fmfm2;
            }
            $campo_6 = $tr . $dt . $fmfm . 'KT';
            $campo_7 = $value->gg;
            $campo_8 = $value->gg;
            $campo_9 = $value->gg;
            $campo_10 = $value->gg;
            $campo_11 = $value->gg;
            $campo_12 = $value->gg;
            $campo_13 = $value->gg;
            $campo_14 = $value->gg;
            $campo_15 = $value->gg;
            $campo_16 = $value->gg;
            $campo_17 = $value->gg;
            $campo_18 = $value->gg;
            $campo_19 = $value->gg;
            $campo_20 = $value->gg;
            $campo_21 = $value->gg;
            array_push($meet, $campo_6);
        }

        $ttt=['9'=>'FG','11'=>'-RA'];
        return $ttt['11'];

    }
}
