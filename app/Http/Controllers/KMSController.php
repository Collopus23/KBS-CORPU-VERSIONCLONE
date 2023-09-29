<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KMSController extends Controller
{
    public function index()
    {
        return view('kms/beranda', [
            'nav' => 'verse-2',
        ]);
    }

    public function ensiKepegUmum()
    {
        return view('kms/ensiklopedia-kepegawaian-umum', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel1()
    {
        return view('kms/artikel1', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel2()
    {
        return view('kms/artikel2', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel3()
    {
        return view('kms/artikel3', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel4()
    {
        return view('kms/artikel4', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel5()
    {
        return view('kms/artikel5', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel6()
    {
        return view('kms/artikel6', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel7()
    {
        return view('kms/artikel7', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel8()
    {
        return view('kms/artikel8', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel9()
    {
        return view('kms/artikel9', [
            'nav' => 'verse-2',
        ]);
    }

    public function artikel10()
    {
        return view('kms/artikel10', [
            'nav' => 'verse-2',
        ]);
    }
}
