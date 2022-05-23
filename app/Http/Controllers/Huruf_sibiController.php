<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ava;
use Illuminate\Support\Facades\Session;

class Huruf_sibiController extends Controller
{
    //
    public function huruf(){
        $huruf01 = new \stdClass();
        $huruf01 -> abjad = "'A'";
        $huruf01 -> gambar = "/img/projek tasya/A.png";

        $huruf02 = new \stdClass();
        $huruf02 -> abjad = "'B'";
        $huruf02 -> gambar = "/img/projek tasya/B.png";

        $huruf03 = new \stdClass();
        $huruf03 -> abjad = "'C'";
        $huruf03 -> gambar = "/img/projek tasya/C.png";

        $huruf04 = new \stdClass();
        $huruf04 -> abjad = "'D'";
        $huruf04 -> gambar = "/img/projek tasya/D.png";

        $huruf05 = new \stdClass();
        $huruf05 -> abjad = "'E'";
        $huruf05 -> gambar = "/img/projek tasya/E.png";

        $huruf06 = new \stdClass();
        $huruf06 -> abjad = "'F'";
        $huruf06 -> gambar = "/img/projek tasya/F.png";

        $huruf07 = new \stdClass();
        $huruf07 -> abjad = "'G'";
        $huruf07 -> gambar = "/img/projek tasya/G.png";

        $huruf08 = new \stdClass();
        $huruf08 -> abjad = "'H'";
        $huruf08 -> gambar = "/img/projek tasya/H.png";

        $huruf09 = new \stdClass();
        $huruf09 -> abjad = "'I'";
        $huruf09 -> gambar = "/img/projek tasya/I.png";

        $huruf10 = new \stdClass();
        $huruf10 -> abjad = "'J'";
        $huruf10 -> gambar = "/img/projek tasya/J.png";

        $huruf11 = new \stdClass();
        $huruf11 -> abjad = "'K'";
        $huruf11 -> gambar = "/img/projek tasya/K.png";

        $huruf12 = new \stdClass();
        $huruf12 -> abjad = "'L'";
        $huruf12 -> gambar = "/img/projek tasya/L.png";

        $huruf13 = new \stdClass();
        $huruf13 -> abjad = "'M'";
        $huruf13 -> gambar = "/img/projek tasya/M.png";

        $huruf14 = new \stdClass();
        $huruf14 -> abjad = "'N'";
        $huruf14 -> gambar = "/img/projek tasya/N.jpg";

        $huruf15 = new \stdClass();
        $huruf15 -> abjad = "'O'";
        $huruf15 -> gambar = "/img/projek tasya/O.jpg";

        $huruf16 = new \stdClass();
        $huruf16 -> abjad = "'P'";
        $huruf16 -> gambar = "/img/projek tasya/P.jpg";

        $huruf17 = new \stdClass();
        $huruf17 -> abjad = "'Q'";
        $huruf17 -> gambar = "/img/projek tasya/Q.jpg";

        $huruf18 = new \stdClass();
        $huruf18 -> abjad = "'R'";
        $huruf18 -> gambar = "/img/projek tasya/R.jpg";

        $huruf19 = new \stdClass();
        $huruf19 -> abjad = "'S'";
        $huruf19 -> gambar = "/img/projek tasya/S.jpg";

        $huruf20 = new \stdClass();
        $huruf20 -> abjad = "'T'";
        $huruf20 -> gambar = "/img/projek tasya/T.jpg";

        $huruf21 = new \stdClass();
        $huruf21 -> abjad = "'U'";
        $huruf21 -> gambar = "/img/projek tasya/U.jpg";

        $huruf22 = new \stdClass();
        $huruf22 -> abjad = "'V'";
        $huruf22 -> gambar = "/img/projek tasya/V.jpg";

        $huruf23 = new \stdClass();
        $huruf23 -> abjad = "'W'";
        $huruf23 -> gambar = "/img/projek tasya/W.jpg";

        $huruf24 = new \stdClass();
        $huruf24 -> abjad = "'X'";
        $huruf24 -> gambar = "/img/projek tasya/X.jpg";

        $huruf25 = new \stdClass();
        $huruf25 -> abjad = "'Y'";
        $huruf25 -> gambar = "/img/projek tasya/Y.jpg";

        $huruf26 = new \stdClass();
        $huruf26 -> abjad = "'Z'";
        $huruf26 -> gambar = "/img/projek tasya/Z.jpg";

        $huruf = collect([$huruf01, $huruf02, $huruf03, $huruf04, $huruf05, $huruf06, $huruf07, $huruf08, $huruf09, $huruf10, $huruf11, $huruf12, $huruf13, $huruf14, $huruf15, $huruf16, $huruf17, $huruf18, $huruf19, $huruf20, $huruf21, $huruf22, $huruf23, $huruf24, $huruf25, $huruf26]);

        $hurufs = $huruf -> pluck('abjad') -> all();
        $gambars = $huruf -> pluck('gambar') -> all();

        return view('huruf')->with('huruf', $hurufs) ->with('gambar', $gambars);
    }

    public function abjad(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $huruf01 = new \stdClass();
        $huruf01 -> abjad = "'A'";
        $huruf01 -> gambar = "/img/projek tasya/A.png";

        $huruf02 = new \stdClass();
        $huruf02 -> abjad = "'B'";
        $huruf02 -> gambar = "/img/projek tasya/B.png";

        $huruf03 = new \stdClass();
        $huruf03 -> abjad = "'C'";
        $huruf03 -> gambar = "/img/projek tasya/C.png";

        $huruf04 = new \stdClass();
        $huruf04 -> abjad = "'D'";
        $huruf04 -> gambar = "/img/projek tasya/D.png";

        $huruf05 = new \stdClass();
        $huruf05 -> abjad = "'E'";
        $huruf05 -> gambar = "/img/projek tasya/E.png";

        $huruf06 = new \stdClass();
        $huruf06 -> abjad = "'F'";
        $huruf06 -> gambar = "/img/projek tasya/F.png";

        $huruf07 = new \stdClass();
        $huruf07 -> abjad = "'G'";
        $huruf07 -> gambar = "/img/projek tasya/G.png";

        $huruf08 = new \stdClass();
        $huruf08 -> abjad = "'H'";
        $huruf08 -> gambar = "/img/projek tasya/H.png";

        $huruf09 = new \stdClass();
        $huruf09 -> abjad = "'I'";
        $huruf09 -> gambar = "/img/projek tasya/I.png";

        $huruf10 = new \stdClass();
        $huruf10 -> abjad = "'J'";
        $huruf10 -> gambar = "/img/projek tasya/J.png";

        $huruf11 = new \stdClass();
        $huruf11 -> abjad = "'K'";
        $huruf11 -> gambar = "/img/projek tasya/K.png";

        $huruf12 = new \stdClass();
        $huruf12 -> abjad = "'L'";
        $huruf12 -> gambar = "/img/projek tasya/L.png";

        $huruf13 = new \stdClass();
        $huruf13 -> abjad = "'M'";
        $huruf13 -> gambar = "/img/projek tasya/M.png";

        $huruf14 = new \stdClass();
        $huruf14 -> abjad = "'N'";
        $huruf14 -> gambar = "/img/projek tasya/N.jpg";

        $huruf15 = new \stdClass();
        $huruf15 -> abjad = "'O'";
        $huruf15 -> gambar = "/img/projek tasya/O.jpg";

        $huruf16 = new \stdClass();
        $huruf16 -> abjad = "'P'";
        $huruf16 -> gambar = "/img/projek tasya/P.jpg";

        $huruf17 = new \stdClass();
        $huruf17 -> abjad = "'Q'";
        $huruf17 -> gambar = "/img/projek tasya/Q.jpg";

        $huruf18 = new \stdClass();
        $huruf18 -> abjad = "'R'";
        $huruf18 -> gambar = "/img/projek tasya/R.jpg";

        $huruf19 = new \stdClass();
        $huruf19 -> abjad = "'S'";
        $huruf19 -> gambar = "/img/projek tasya/S.jpg";

        $huruf20 = new \stdClass();
        $huruf20 -> abjad = "'T'";
        $huruf20 -> gambar = "/img/projek tasya/T.jpg";

        $huruf21 = new \stdClass();
        $huruf21 -> abjad = "'U'";
        $huruf21 -> gambar = "/img/projek tasya/U.jpg";

        $huruf22 = new \stdClass();
        $huruf22 -> abjad = "'V'";
        $huruf22 -> gambar = "/img/projek tasya/V.jpg";

        $huruf23 = new \stdClass();
        $huruf23 -> abjad = "'W'";
        $huruf23 -> gambar = "/img/projek tasya/W.jpg";

        $huruf24 = new \stdClass();
        $huruf24 -> abjad = "'X'";
        $huruf24 -> gambar = "/img/projek tasya/X.jpg";

        $huruf25 = new \stdClass();
        $huruf25 -> abjad = "'Y'";
        $huruf25 -> gambar = "/img/projek tasya/Y.jpg";

        $huruf26 = new \stdClass();
        $huruf26 -> abjad = "'Z'";
        $huruf26 -> gambar = "/img/projek tasya/Z.jpg";

        $huruf = collect([$huruf01, $huruf02, $huruf03, $huruf04, $huruf05, $huruf06, $huruf07, $huruf08, $huruf09, $huruf10, $huruf11, $huruf12, $huruf13, $huruf14, $huruf15, $huruf16, $huruf17, $huruf18, $huruf19, $huruf20, $huruf21, $huruf22, $huruf23, $huruf24, $huruf25, $huruf26]);

        $hurufs = $huruf -> pluck('abjad') -> all();
        $gambars = $huruf -> pluck('gambar') -> all();

        return view('abjad')->with('huruf', $hurufs) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null);
    }

    public function abjad_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $huruf01 = new \stdClass();
        $huruf01 -> abjad = "'A'";
        $huruf01 -> gambar = "/img/projek tasya/A.png";

        $huruf02 = new \stdClass();
        $huruf02 -> abjad = "'B'";
        $huruf02 -> gambar = "/img/projek tasya/B.png";

        $huruf03 = new \stdClass();
        $huruf03 -> abjad = "'C'";
        $huruf03 -> gambar = "/img/projek tasya/C.png";

        $huruf04 = new \stdClass();
        $huruf04 -> abjad = "'D'";
        $huruf04 -> gambar = "/img/projek tasya/D.png";

        $huruf05 = new \stdClass();
        $huruf05 -> abjad = "'E'";
        $huruf05 -> gambar = "/img/projek tasya/E.png";

        $huruf06 = new \stdClass();
        $huruf06 -> abjad = "'F'";
        $huruf06 -> gambar = "/img/projek tasya/F.png";

        $huruf07 = new \stdClass();
        $huruf07 -> abjad = "'G'";
        $huruf07 -> gambar = "/img/projek tasya/G.png";

        $huruf08 = new \stdClass();
        $huruf08 -> abjad = "'H'";
        $huruf08 -> gambar = "/img/projek tasya/H.png";

        $huruf09 = new \stdClass();
        $huruf09 -> abjad = "'I'";
        $huruf09 -> gambar = "/img/projek tasya/I.png";

        $huruf10 = new \stdClass();
        $huruf10 -> abjad = "'J'";
        $huruf10 -> gambar = "/img/projek tasya/J.png";

        $huruf11 = new \stdClass();
        $huruf11 -> abjad = "'K'";
        $huruf11 -> gambar = "/img/projek tasya/K.png";

        $huruf12 = new \stdClass();
        $huruf12 -> abjad = "'L'";
        $huruf12 -> gambar = "/img/projek tasya/L.png";

        $huruf13 = new \stdClass();
        $huruf13 -> abjad = "'M'";
        $huruf13 -> gambar = "/img/projek tasya/M.png";

        $huruf14 = new \stdClass();
        $huruf14 -> abjad = "'N'";
        $huruf14 -> gambar = "/img/projek tasya/N.png";

        $huruf15 = new \stdClass();
        $huruf15 -> abjad = "'O'";
        $huruf15 -> gambar = "/img/projek tasya/O.png";

        $huruf16 = new \stdClass();
        $huruf16 -> abjad = "'P'";
        $huruf16 -> gambar = "/img/projek tasya/P.png";

        $huruf17 = new \stdClass();
        $huruf17 -> abjad = "'Q'";
        $huruf17 -> gambar = "/img/projek tasya/Q.png";

        $huruf18 = new \stdClass();
        $huruf18 -> abjad = "'R'";
        $huruf18 -> gambar = "/img/projek tasya/R.png";

        $huruf19 = new \stdClass();
        $huruf19 -> abjad = "'S'";
        $huruf19 -> gambar = "/img/projek tasya/S.png";

        $huruf20 = new \stdClass();
        $huruf20 -> abjad = "'T'";
        $huruf20 -> gambar = "/img/projek tasya/T.png";

        $huruf21 = new \stdClass();
        $huruf21 -> abjad = "'U'";
        $huruf21 -> gambar = "/img/projek tasya/U.png";

        $huruf22 = new \stdClass();
        $huruf22 -> abjad = "'V'";
        $huruf22 -> gambar = "/img/projek tasya/V.png";

        $huruf23 = new \stdClass();
        $huruf23 -> abjad = "'W'";
        $huruf23 -> gambar = "/img/projek tasya/W.png";

        $huruf24 = new \stdClass();
        $huruf24 -> abjad = "'X'";
        $huruf24 -> gambar = "/img/projek tasya/X.png";

        $huruf25 = new \stdClass();
        $huruf25 -> abjad = "'Y'";
        $huruf25 -> gambar = "/img/projek tasya/Y.png";

        $huruf26 = new \stdClass();
        $huruf26 -> abjad = "'Z'";
        $huruf26 -> gambar = "/img/projek tasya/Z.png";

        $huruf = collect([$huruf01, $huruf02, $huruf03, $huruf04, $huruf05, $huruf06, $huruf07, $huruf08, $huruf09, $huruf10, $huruf11, $huruf12, $huruf13, $huruf14, $huruf15, $huruf16, $huruf17, $huruf18, $huruf19, $huruf20, $huruf21, $huruf22, $huruf23, $huruf24, $huruf25, $huruf26]);

        $hurufs = $huruf -> pluck('abjad') -> all();
        $gambars = $huruf -> pluck('gambar') -> all();
        $z = $i;

        return view('abjad')->with('huruf', $hurufs) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z);
    }

    public function video(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $huruf01 = new \stdClass();
        $huruf01 -> abjad = "'A'";
        $huruf01 -> gambar = "/img/vidio abjad bisindo/A.gif";

        $huruf02 = new \stdClass();
        $huruf02 -> abjad = "'B'";
        $huruf02 -> gambar = "/img/vidio abjad bisindo/B.gif";

        $huruf03 = new \stdClass();
        $huruf03 -> abjad = "'C'";
        $huruf03 -> gambar = "/img/vidio abjad bisindo/C.gif";

        $huruf04 = new \stdClass();
        $huruf04 -> abjad = "'D'";
        $huruf04 -> gambar = "/img/vidio abjad bisindo/D.gif";

        $huruf05 = new \stdClass();
        $huruf05 -> abjad = "'E'";
        $huruf05 -> gambar = "/img/vidio abjad bisindo/E.gif";

        $huruf06 = new \stdClass();
        $huruf06 -> abjad = "'F'";
        $huruf06 -> gambar = "/img/vidio abjad bisindo/F.gif";

        $huruf07 = new \stdClass();
        $huruf07 -> abjad = "'G'";
        $huruf07 -> gambar = "/img/vidio abjad bisindo/G.gif";

        $huruf08 = new \stdClass();
        $huruf08 -> abjad = "'H'";
        $huruf08 -> gambar = "/img/vidio abjad bisindo/H.gif";

        $huruf09 = new \stdClass();
        $huruf09 -> abjad = "'I'";
        $huruf09 -> gambar = "/img/vidio abjad bisindo/I.gif";

        $huruf10 = new \stdClass();
        $huruf10 -> abjad = "'J'";
        $huruf10 -> gambar = "/img/vidio abjad bisindo/J.gif";

        $huruf11 = new \stdClass();
        $huruf11 -> abjad = "'K'";
        $huruf11 -> gambar = "/img/vidio abjad bisindo/K.gif";

        $huruf12 = new \stdClass();
        $huruf12 -> abjad = "'L'";
        $huruf12 -> gambar = "/img/vidio abjad bisindo/L.gif";

        $huruf13 = new \stdClass();
        $huruf13 -> abjad = "'M'";
        $huruf13 -> gambar = "/img/vidio abjad bisindo/M.gif";

        $huruf14 = new \stdClass();
        $huruf14 -> abjad = "'N'";
        $huruf14 -> gambar = "/img/vidio abjad bisindo/N.gif";

        $huruf15 = new \stdClass();
        $huruf15 -> abjad = "'O'";
        $huruf15 -> gambar = "/img/vidio abjad bisindo/O.gif";

        $huruf16 = new \stdClass();
        $huruf16 -> abjad = "'P'";
        $huruf16 -> gambar = "/img/vidio abjad bisindo/P.gif";

        $huruf17 = new \stdClass();
        $huruf17 -> abjad = "'Q'";
        $huruf17 -> gambar = "/img/vidio abjad bisindo/Q.gif";

        $huruf18 = new \stdClass();
        $huruf18 -> abjad = "'R'";
        $huruf18 -> gambar = "/img/vidio abjad bisindo/R.gif";

        $huruf19 = new \stdClass();
        $huruf19 -> abjad = "'S'";
        $huruf19 -> gambar = "/img/vidio abjad bisindo/S.gif";

        $huruf20 = new \stdClass();
        $huruf20 -> abjad = "'T'";
        $huruf20 -> gambar = "/img/vidio abjad bisindo/T.gif";

        $huruf21 = new \stdClass();
        $huruf21 -> abjad = "'U'";
        $huruf21 -> gambar = "/img/vidio abjad bisindo/U.gif";

        $huruf22 = new \stdClass();
        $huruf22 -> abjad = "'V'";
        $huruf22 -> gambar = "/img/vidio abjad bisindo/V.gif";

        $huruf23 = new \stdClass();
        $huruf23 -> abjad = "'W'";
        $huruf23 -> gambar = "/img/vidio abjad bisindo/W.gif";

        $huruf24 = new \stdClass();
        $huruf24 -> abjad = "'X'";
        $huruf24 -> gambar = "/img/vidio abjad bisindo/X.gif";

        $huruf25 = new \stdClass();
        $huruf25 -> abjad = "'Y'";
        $huruf25 -> gambar = "/img/vidio abjad bisindo/Y.gif";

        $huruf26 = new \stdClass();
        $huruf26 -> abjad = "'Z'";
        $huruf26 -> gambar = "/img/vidio abjad bisindo/Z.gif";

        $huruf = collect([$huruf01, $huruf02, $huruf03, $huruf04, $huruf05, $huruf06, $huruf07, $huruf08, $huruf09, $huruf10, $huruf11, $huruf12, $huruf13, $huruf14, $huruf15, $huruf16, $huruf17, $huruf18, $huruf19, $huruf20, $huruf21, $huruf22, $huruf23, $huruf24, $huruf25, $huruf26]);

        $hurufs = $huruf -> pluck('abjad') -> all();
        $gambars = $huruf -> pluck('gambar') -> all();

        return view('video')->with('huruf', $hurufs) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null);
    }

    public function video_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $huruf01 = new \stdClass();
        $huruf01 -> abjad = "'A'";
        $huruf01 -> gambar = "/img/vidio abjad bisindo/A.gif";

        $huruf02 = new \stdClass();
        $huruf02 -> abjad = "'B'";
        $huruf02 -> gambar = "/img/vidio abjad bisindo/B.gif";

        $huruf03 = new \stdClass();
        $huruf03 -> abjad = "'C'";
        $huruf03 -> gambar = "/img/vidio abjad bisindo/C.gif";

        $huruf04 = new \stdClass();
        $huruf04 -> abjad = "'D'";
        $huruf04 -> gambar = "/img/vidio abjad bisindo/D.gif";

        $huruf05 = new \stdClass();
        $huruf05 -> abjad = "'E'";
        $huruf05 -> gambar = "/img/vidio abjad bisindo/E.gif";

        $huruf06 = new \stdClass();
        $huruf06 -> abjad = "'F'";
        $huruf06 -> gambar = "/img/vidio abjad bisindo/F.gif";

        $huruf07 = new \stdClass();
        $huruf07 -> abjad = "'G'";
        $huruf07 -> gambar = "/img/vidio abjad bisindo/G.gif";

        $huruf08 = new \stdClass();
        $huruf08 -> abjad = "'H'";
        $huruf08 -> gambar = "/img/vidio abjad bisindo/H.gif";

        $huruf09 = new \stdClass();
        $huruf09 -> abjad = "'I'";
        $huruf09 -> gambar = "/img/vidio abjad bisindo/I.gif";

        $huruf10 = new \stdClass();
        $huruf10 -> abjad = "'J'";
        $huruf10 -> gambar = "/img/vidio abjad bisindo/J.gif";

        $huruf11 = new \stdClass();
        $huruf11 -> abjad = "'K'";
        $huruf11 -> gambar = "/img/vidio abjad bisindo/K.gif";

        $huruf12 = new \stdClass();
        $huruf12 -> abjad = "'L'";
        $huruf12 -> gambar = "/img/vidio abjad bisindo/L.gif";

        $huruf13 = new \stdClass();
        $huruf13 -> abjad = "'M'";
        $huruf13 -> gambar = "/img/vidio abjad bisindo/M.gif";

        $huruf14 = new \stdClass();
        $huruf14 -> abjad = "'N'";
        $huruf14 -> gambar = "/img/vidio abjad bisindo/N.gif";

        $huruf15 = new \stdClass();
        $huruf15 -> abjad = "'O'";
        $huruf15 -> gambar = "/img/vidio abjad bisindo/O.gif";

        $huruf16 = new \stdClass();
        $huruf16 -> abjad = "'P'";
        $huruf16 -> gambar = "/img/vidio abjad bisindo/P.gif";

        $huruf17 = new \stdClass();
        $huruf17 -> abjad = "'Q'";
        $huruf17 -> gambar = "/img/vidio abjad bisindo/Q.gif";

        $huruf18 = new \stdClass();
        $huruf18 -> abjad = "'R'";
        $huruf18 -> gambar = "/img/vidio abjad bisindo/R.gif";

        $huruf19 = new \stdClass();
        $huruf19 -> abjad = "'S'";
        $huruf19 -> gambar = "/img/vidio abjad bisindo/S.gif";

        $huruf20 = new \stdClass();
        $huruf20 -> abjad = "'T'";
        $huruf20 -> gambar = "/img/vidio abjad bisindo/T.gif";

        $huruf21 = new \stdClass();
        $huruf21 -> abjad = "'U'";
        $huruf21 -> gambar = "/img/vidio abjad bisindo/U.gif";

        $huruf22 = new \stdClass();
        $huruf22 -> abjad = "'V'";
        $huruf22 -> gambar = "/img/vidio abjad bisindo/V.gif";

        $huruf23 = new \stdClass();
        $huruf23 -> abjad = "'W'";
        $huruf23 -> gambar = "/img/vidio abjad bisindo/W.gif";

        $huruf24 = new \stdClass();
        $huruf24 -> abjad = "'X'";
        $huruf24 -> gambar = "/img/vidio abjad bisindo/X.gif";

        $huruf25 = new \stdClass();
        $huruf25 -> abjad = "'Y'";
        $huruf25 -> gambar = "/img/vidio abjad bisindo/Y.gif";

        $huruf26 = new \stdClass();
        $huruf26 -> abjad = "'Z'";
        $huruf26 -> gambar = "/img/vidio abjad bisindo/Z.gif";

        $huruf = collect([$huruf01, $huruf02, $huruf03, $huruf04, $huruf05, $huruf06, $huruf07, $huruf08, $huruf09, $huruf10, $huruf11, $huruf12, $huruf13, $huruf14, $huruf15, $huruf16, $huruf17, $huruf18, $huruf19, $huruf20, $huruf21, $huruf22, $huruf23, $huruf24, $huruf25, $huruf26]);

        $hurufs = $huruf -> pluck('abjad') -> all();
        $gambars = $huruf -> pluck('gambar') -> all();
        $z = $i;

        return view('video')->with('huruf', $hurufs) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z);
    }

    public function ganti_orang(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Aku";
        $kata01 -> gambar = "\img\Kata ganti orang\Aku.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Dia";
        $kata02 -> gambar = "\img\Kata ganti orang\Dia.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Kami";
        $kata03 -> gambar = "\img\Kata ganti orang\Kami.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Kamu";
        $kata04 -> gambar = "\img\Kata ganti orang\Kamu.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Kita";
        $kata05 -> gambar = "\img\Kata ganti orang\Kita.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Mereka";
        $kata06 -> gambar = "\img\Kata ganti orang\Mereka.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Saya";
        $kata07 -> gambar = "\img\Kata ganti orang\Saya.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null)->with('jenis','ganti');
    }

    public function ganti_orang_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

                $kata01 = new \stdClass();
        $kata01 -> abjad = "Aku";
        $kata01 -> gambar = "\img\Kata ganti orang\Aku.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Dia";
        $kata02 -> gambar = "\img\Kata ganti orang\Dia.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Kami";
        $kata03 -> gambar = "\img\Kata ganti orang\Kami.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Kamu";
        $kata04 -> gambar = "\img\Kata ganti orang\Kamu.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Kita";
        $kata05 -> gambar = "\img\Kata ganti orang\Kita.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Mereka";
        $kata06 -> gambar = "\img\Kata ganti orang\Mereka.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Saya";
        $kata07 -> gambar = "\img\Kata ganti orang\Saya.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();
        $z = $i;

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z)->with('jenis','ganti');
    }

    public function sifat(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Bahagia";
        $kata01 -> gambar = "\img\Kata sifat\Bahagia.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Bingung";
        $kata02 -> gambar = "\img\Kata sifat\Bingung.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Gembira";
        $kata03 -> gambar = "\img\Kata sifat\Gembira.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Kecewa";
        $kata04 -> gambar = "\img\Kata sifat\Kecewa.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Marah";
        $kata05 -> gambar = "\img\Kata sifat\Marah.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Sedih";
        $kata06 -> gambar = "\img\Kata sifat\Sedih.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Senang";
        $kata07 -> gambar = "\img\Kata sifat\Senang.png";

        $kata08 = new \stdClass();
        $kata08 -> abjad = "Takut";
        $kata08 -> gambar = "\img\Kata sifat\Takut.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07, $kata08]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null)->with('jenis','sifat');
    }

    public function sifat_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Bahagia";
        $kata01 -> gambar = "\img\Kata sifat\Bahagia.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Bingung";
        $kata02 -> gambar = "\img\Kata sifat\Bingung.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Gembira";
        $kata03 -> gambar = "\img\Kata sifat\Gembira.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Kecewa";
        $kata04 -> gambar = "\img\Kata sifat\Kecewa.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Marah";
        $kata05 -> gambar = "\img\Kata sifat\Marah.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Sedih";
        $kata06 -> gambar = "\img\Kata sifat\Sedih.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Senang";
        $kata07 -> gambar = "\img\Kata sifat\Senang.png";

        $kata08 = new \stdClass();
        $kata08 -> abjad = "Takut";
        $kata08 -> gambar = "\img\Kata sifat\Takut.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07, $kata08]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();
        $z = $i;

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z)->with('jenis','sifat');
    }

    public function tempat(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Bank";
        $kata01 -> gambar = "\img\kata tempat\Bank.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Kelas";
        $kata02 -> gambar = "\img\kata tempat\Kelas.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Pasar";
        $kata03 -> gambar = "\img\kata tempat\Pasar.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Rumah";
        $kata04 -> gambar = "\img\kata tempat\Rumah.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Sekolah";
        $kata05 -> gambar = "\img\kata tempat\Sekolah.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Taman";
        $kata06 -> gambar = "\img\kata tempat\Taman.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null)->with('jenis','tempat');
    }

    public function tempat_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

                $kata01 = new \stdClass();
        $kata01 -> abjad = "Bank";
        $kata01 -> gambar = "\img\kata tempat\Bank.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Kelas";
        $kata02 -> gambar = "\img\kata tempat\Kelas.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Pasar";
        $kata03 -> gambar = "\img\kata tempat\Pasar.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Rumah";
        $kata04 -> gambar = "\img\kata tempat\Rumah.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Sekolah";
        $kata05 -> gambar = "\img\kata tempat\Sekolah.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Taman";
        $kata06 -> gambar = "\img\kata tempat\Taman.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();
        $z = $i;

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z)->with('jenis','tempat');
    }
    public function keluarga(){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Adik";
        $kata01 -> gambar = "\img\Sehari hari keluarga\Adik.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Anak";
        $kata02 -> gambar = "\img\Sehari hari keluarga\Anak.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Ayah";
        $kata03 -> gambar = "\img\Sehari hari keluarga\Ayah.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Bibi";
        $kata04 -> gambar = "\img\Sehari hari keluarga\Bibi.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Ibu";
        $kata05 -> gambar = "\img\Sehari hari keluarga\Ibu.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Kakak";
        $kata06 -> gambar = "\img\Sehari hari keluarga\Kakak.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Kakek";
        $kata07 -> gambar = "\img\Sehari hari keluarga\Kakek.png";

        $kata08 = new \stdClass();
        $kata08 -> abjad = "Nenek";
        $kata08 -> gambar = "\img\Sehari hari keluarga\Nenek.png";

        $kata09 = new \stdClass();
        $kata09 -> abjad = "Paman";
        $kata09 -> gambar = "\img\Sehari hari keluarga\Paman.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07, $kata08, $kata09]);

        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', null)->with('jenis','keluarga');
    }

    public function keluarga_index($i){
        $db = ava::where('email_user', Session::get('email_user'))->first();
        $nama = $db->nama_user;
        $gambar = $db->path;

        $kata01 = new \stdClass();
        $kata01 -> abjad = "Adik";
        $kata01 -> gambar = "\img\Sehari hari keluarga\Adik.png";

        $kata02 = new \stdClass();
        $kata02 -> abjad = "Anak";
        $kata02 -> gambar = "\img\Sehari hari keluarga\Anak.png";

        $kata03 = new \stdClass();
        $kata03 -> abjad = "Ayah";
        $kata03 -> gambar = "\img\Sehari hari keluarga\Ayah.png";

        $kata04 = new \stdClass();
        $kata04 -> abjad = "Bibi";
        $kata04 -> gambar = "\img\Sehari hari keluarga\Bibi.png";

        $kata05 = new \stdClass();
        $kata05 -> abjad = "Ibu";
        $kata05 -> gambar = "\img\Sehari hari keluarga\Ibu.png";

        $kata06 = new \stdClass();
        $kata06 -> abjad = "Kakak";
        $kata06 -> gambar = "\img\Sehari hari keluarga\Kakak.png";

        $kata07 = new \stdClass();
        $kata07 -> abjad = "Kakek";
        $kata07 -> gambar = "\img\Sehari hari keluarga\Kakek.png";

        $kata08 = new \stdClass();
        $kata08 -> abjad = "Nenek";
        $kata08 -> gambar = "\img\Sehari hari keluarga\Nenek.png";

        $kata09 = new \stdClass();
        $kata09 -> abjad = "Paman";
        $kata09 -> gambar = "\img\Sehari hari keluarga\Paman.png";

        $kata = collect([$kata01, $kata02, $kata03, $kata04, $kata05, $kata06, $kata07, $kata08, $kata09]);
        $katas = $kata -> pluck('abjad') -> all();
        $gambars = $kata -> pluck('gambar') -> all();
        $z = $i;

        return view('kata_sehari_hari')->with('katas', $katas) ->with('gambars', $gambars)->with('nama', $nama)->with('gambar', $gambar)->with('index', $z)->with('jenis','keluarga');
    }
}
