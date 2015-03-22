@extends('layouts.default')

@section('content')

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="container-fluid" style="margin-top:20px; margin-bottom: 20px;">
                <div class="row">
                    <div class="col-xs-5 user_menu_container">
                        <img id="user_menu" src="img/user.png">
                    </div>

                    <div class="col-xs-7">
                        <br>
                        <p>Xavi Sánchez Mir</p>
                        <span class="label label-h2O">90 H2pOints</span>
                    </div>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home"></span> &nbsp;Home</a>
                </li>
                <li>
                    <a href="{{ URL::route('profile_path') }}"><span class="glyphicon glyphicon-user"></span> &nbsp;Perfil</a>
                </li>
                <li>
                    <a href="{{ URL::route('events_path') }}"><span class="glyphicon glyphicon-calendar"></span> &nbsp;Esdeveniments</a>
                </li>
                <li>
                    <a href="{{ URL::route('products_path') }}"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Botiga</a>
                </li>
                <li>
                    <a href="{{ URL::route('achievements_path') }}"><span class="glyphicon glyphicon-thumbs-up"></span> &nbsp;Reptes</a>
                </li>
                <li>
                    <a href="{{ URL::route('tickets_path') }}"><span class="glyphicon glyphicon-bookmark"></span> &nbsp;Tiquets</a>
                </li>
                <li>
                    <a href=""><span class="glyphicon glyphicon-cog"></span> &nbsp;Configuració</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="row navbar_h2O">
            <div class="col-xs-4 aligned_left">
                <a onclick="change_glyph()" href="#menu-toggle" class="btn btn-default btn-h2O" id="menu-toggle"><span id="change_glyph" font-size="50px" class=""></span></a>
            </div>
            <div class="col-xs-4 centered">
                <img id="menu_logo" src="img/Logo.svg">
            </div>
            <div class="col-xs-4 aligned_left"></div>
            <div class="col-xs-4 aligned_right">
                <div class="drop_points">
                    90
                </div>
            </div>
        </div>



            <div class="container-fluid marginTop">
                    <div class="row event">
                        <div class="col-xs-4">
                            <img class="gray" src="img/agbar.png">
                            <div class="type">
                                Event
                            </div>
                        </div>
                        <div class="col-xs-8 border-left">
                            <div class="titl">
                                Taller d'energia hidràulica
                            </div>
                            <div class="hashtag">
                                @Agbar
                            </div>
                            <div class="description">
                                Taller d'energia hidràulica al museu de les aigües. Molt divertida i recomenada per a totes les edats.
                            </div>
                            <a href="{{ URL::route('ticket_path', ['id' => 1]) }}" class="go gray">
                                <span class="glyphicon glyphicon-ok"></span> Asistiré
                            </a>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-xs-4">
                            <img class="red" src="img/gencat.png">
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
                            <a class="go red">
                                <span class="glyphicon glyphicon-ok"></span> Llegir
                            </a>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-xs-4">
                            <img class="yellow" src="img/cart.png">
                            <div class="type">
                                Botiga
                            </div>
                        </div>
                        <div class="col-xs-8 border-left">
                            <div class="titl">
                                Difusor
                            </div>
                            <div class="hashtag">
                                @Agbar
                            </div>
                            <div class="description">
                                Lorem ipsum sit amte asdlm lñaskd alsd asdh asdk askdjh asdh askdjh asd
                            </div>
                            <a class="go yellow">
                                <span class="glyphicon glyphicon-ok"></span> Visitar
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').css('height', $(window).height());
        });
        if($(window).width()<762){
            if($("#wrapper").attr('class') == 'toggled') {
                $("#change_glyph").addClass('glyphicon glyphicon-remove');
            }
            else {
                $("#change_glyph").addClass('glyphicon glyphicon-menu-hamburger');
            }
        }
        else {
            if($("#wrapper").attr('class') == 'toggled') {
                $("#change_glyph").addClass('glyphicon glyphicon-menu-hamburger');
            }
            else {
                $("#change_glyph").addClass('glyphicon glyphicon-remove');
            }
        }



        function change_glyph() {
            if($("#change_glyph").attr('class') == 'glyphicon glyphicon-menu-hamburger'){
                $("#change_glyph").addClass('glyphicon-remove');
                $("#change_glyph").removeClass('glyphicon-menu-hamburger');
            }

            else{
                $("#change_glyph").removeClass('glyphicon-remove');
                $("#change_glyph").addClass('glyphicon-menu-hamburger');
            }
        }

    </script>


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

@endsection


