<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class QuranController extends Controller
{
    function index(){
        $client = new Client();
        $dataJournal = Journal::get();
        $data = [];
        foreach ($dataJournal as $key => $value) {
            $no =  $value['surah'];
            $noAyat =  $value['ayat'];
            $namapenulis =  $value['nama'];
            $journal =  $value['journal'];
            $url = "https://equran.id/api/v2/surat/$no";
            $response = $client->request("GET",$url);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content,true);
            $nama = $contentArray['data']['nama'];
            $namaLatin = $contentArray['data']['namaLatin'];
            $ayat = $contentArray['data']['ayat'][$noAyat]['teksArab'];            
            $terjemahan = $contentArray['data']['ayat'][$noAyat]['teksIndonesia'];
            $nomorAyat = $contentArray['data']['ayat'][$noAyat]['nomorAyat'];
            $data[] = [
                "nama" => $namapenulis,
                "surah"=> $nama,
                "namaLatin"=> $namaLatin,
                "ayat"=> $ayat,
                "nomorAyat"=> $nomorAyat,
                "terjemahan"=> $terjemahan,
                "journal"=> $journal,
            ];
        }
        return view('pages.index', ['data' => $data]);
    }

    function listQuran(){
        $client = new Client();
        $url = "https://equran.id/api/v2/surat";
        $response = $client->request("GET",$url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content,true);
        $data = $contentArray['data'];        
        return view('pages.listquran', ['data' => $data]);
    }
    function readQuran($no){
        $client = new Client();
        $url = "https://equran.id/api/v2/surat/$no";
        $response = $client->request("GET",$url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content,true);
        $data = $contentArray['data'];        
        return view('pages.quran',['data'=>$data]);
    }
    function readTafsir(){
        return view('pages.index');
    }
    function readJournal(){
        $client = new Client();
        $dataJournal = Journal::get();
        $data = [];
        foreach ($dataJournal as $key => $value) {
            $no =  $value['surah'];
            $noAyat =  $value['ayat'];
            $namapenulis =  $value['nama'];
            $journal =  $value['journal'];
            $url = "https://equran.id/api/v2/surat/$no";
            $response = $client->request("GET",$url);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content,true);
            $nama = $contentArray['data']['nama'];
            $namaLatin = $contentArray['data']['namaLatin'];
            $ayat = $contentArray['data']['ayat'][$noAyat]['teksArab'];            
            $terjemahan = $contentArray['data']['ayat'][$noAyat]['teksIndonesia'];
            $nomorAyat = $contentArray['data']['ayat'][$noAyat]['nomorAyat'];
            $data[] = [
                "nama" => $namapenulis,
                "surah"=> $nama,
                "namaLatin"=> $namaLatin,
                "ayat"=> $ayat,
                "nomorAyat"=> $nomorAyat,
                "terjemahan"=> $terjemahan,
                "journal"=> $journal,
            ];
        }
        return view('pages.journal',['data'=>$data]);
    }
    function writeJournal(){
        $client = new Client();
        $url = "https://equran.id/api/v2/surat";
        $response = $client->request("GET",$url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content,true);
        $data = $contentArray['data'];
        return view('pages.journaling', ['data' => $data]);
    }
    function submitJournal(Request $request){
        $journal = New Journal();
        $journal->nama = $request->name;
        $journal->surah = $request->surah;
        $journal->ayat = $request->ayat;
        $journal->journal = $request->journal;
        $journal->save();
        return redirect()->route('quran.readJournal');
    }
}
