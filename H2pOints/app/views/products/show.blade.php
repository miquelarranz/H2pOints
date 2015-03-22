@extends('layouts.default')

@section('content')

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="container-fluid" style="margin-top:20px; margin-bottom: 20px;">
                <div class="row">
                    <div class="col-xs-5 user_menu_container">
                        <img id="user_menu" src="../img/user.png">
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
                <img id="menu_logo" src="../img/Logo.svg">
            </div>
            <div class="col-xs-4 aligned_left"></div>
            <div class="col-xs-4 aligned_right">
                <div class="drop_points">
                    90
                </div>
            </div>
        </div>



        <div class="container-fluid marginTop">
            <div class="text-center col-sm-6 col-sm-offset-3">
                <h1 class="white text-center">Taller d'energia hidràulica</h1>
                <img class="profile-img img-rounded" src="../img/user.png" alt="Profile image">
                <table class="white profile-table text-left">
                    <tr>
                        <td>Descripció</td>
                        <td>Taller d'energia hidràulica al museu de les aigües. Molt divertida i recomenada per a totes les edats.</td>
                    </tr>
                    <tr>
                        <td>Lloc</td>
                        <td>Museu de les aigües</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>23 de Març de 2015</td>
                    </tr>
                    <tr>
                        <td>Hora</td>
                        <td>16:00h</td>
                    </tr>
                    <tr>
                        <td>Preu</td>
                        <td>Gratuït</td>
                    </tr>
                    <tr>
                        <td>Recompensa</td>
                        <td>100 H2pOints</td>
                    </tr>
                </table>
                <div class="col-xs-4 col-xs-offset-4" style="padding-right: 0; margin-bottom: 20px">
                    <a href="{{ URL::route('ticket_path', ['id' => 1]) }}" class="guardar-profile-button btn"><span class="glyphicon glyphicon-ok"> Assistiré</a>
                </div>
            </div>
        </div>

        <!-- /#page-content-wrapper -->
    </div>
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

