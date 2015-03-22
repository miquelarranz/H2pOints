@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row event">
            <div class="col-xs-4">
                <img class="gray" src="img/icon.png">
                <div class="type">
                    Event
                </div>
            </div>
            <div class="col-xs-8 border-left">
                <div class="titl">
                    Aigues de Barcelona
                </div>
                <div class="hashtag">
                    @Agbar
                </div>
                <div class="description">
                    Lorem ipsum sit amte asdlm lñaskd alsd asdh asdk askdjh asdh askdjh asd
                </div>
                <button class="go gray">
                    <span class="glyphicon glyphicon-ok"></span> Asistiré
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row event">
            <div class="col-xs-4">
                <img class="red" src="img/icon.png">
                <div class="type">
                    Consell
                </div>
            </div>
            <div class="col-xs-8 border-left">
                <div class="titl">
                    Generalitat de Catalunya
                </div>
                <div class="hashtag">
                    @gencat
                </div>
                <div class="description">
                    Lorem ipsum sit amte asdlm lñaskd alsd asdh asdk askdjh asdh askdjh asd
                </div>
                <button class="go red">
                    <span class="glyphicon glyphicon-ok"></span> Llegir
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row event">
            <div class="col-xs-4">
                <img class="yellow" src="img/icon.png">
                <div class="type">
                    Tenda
                </div>
            </div>
            <div class="col-xs-8 border-left">
                <div class="titl">
                    Tenda
                </div>
                <div class="hashtag">
                    @Agbar
                </div>
                <div class="description">
                    Lorem ipsum sit amte asdlm lñaskd alsd asdh asdk askdjh asdh askdjh asd
                </div>
                <button class="go yellow">
                    <span class="glyphicon glyphicon-ok"></span> Visitar
                </button>
            </div>
        </div>
    </div>
@endsection


