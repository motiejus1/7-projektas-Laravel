<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors= Author::all();

        return view("author.index", ["authors" =>$authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {

        $books = $author->authorBooks; //visas knygas kurios priklauso autoriui
        //kokio tipo yra kintamasis $books?
        //1 objektas = 1 irasas
        // 2 ir daugiau objektai

        // objektu masyvas / kolekcija(collection) - masyva filtruoti

        //count($books);
        $books_count = $books->count();

        return view("author.show",["author"=>$author, "books"=> $books, "books_count" => $books_count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author, Request $request)
    {
        //kaip patikrinti ar autorius turi knygu ir neleisti jo istrinti?

        //jei negalima trinti, parodytu alert

        //sesija = cookie


        //destroy - jinai turi sugeneruoti pranesima(isitryne sekmingai/nesekmingai)
        //index faila
        //i sesija(session)
        //globalus kintamasis, sukuriamas narsykleje
        //i sesija mes galime irasyti bet kokio tipo kintamaji


        $books_count = $author->authorBooks->count(); //gausiu knygu skaiciu
        //count - funkcija ()
        //priklauso modeliui, ir jinai grazina tam tikra objektu sarasa



        if($books_count!=0) {
            return redirect()->route("author.index")->with('error_message','Ištrinti negalima, nes autorius turi knygų');
        }

        $author->delete();
        return redirect()->route("author.index")->with('success_message','Autorius sėkmingai ištrintas');
    }
}
