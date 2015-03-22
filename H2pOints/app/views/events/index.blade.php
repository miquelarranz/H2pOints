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



            <div class="container-fluid marginTop"  style="margin-bottom: 20px !important;">
                <div class="elements-list">
                        <div class="col-xs-12 col-md-offset-2 col-md-8">
                          <h1 style="text-align:left;"><span class="glyphicon glyphicon-calendar"></span> Esdeveniments</h1>
                        </div>

                        <a href="{{ URL::route('event_path', ['id' => 1]) }}"><div class="col-xs-12 col-md-offset-2 col-md-8 element-container">
                          <div class="col-xs-4" style="padding-top:40px">
                            <img src="img/hidraulica.png"><br><br>
                            <span class="label label-success">Dilluns 23 Març</span>
                            <span class="label label-warning">16:00</span>
                            <span class="label label-danger">100 H2pOints</span>

                          </div>
                          <div class="col-xs-8 text-products">
                          <h2>Taller d'energia hidràulica</h2>
                          <h4><span class="glyphicon glyphicon-map-marker"></span> Museu de les aigües</h4>
                          <p>Taller d'energia hidràulica al museu de les aigües. Molt divertida i recomenada per a totes les edats.</p></div>
                        </div></a>
                             <a href="{{ URL::route('event_path', ['id' => 2]) }}"><div class="col-xs-12 col-md-offset-2 col-md-8 element-container">
                          <div class="col-xs-4" style="padding-top:40px">
                            <img src="img/visita-nocturna.jpg"><br><br>
                            <span class="label label-success">Dimarts 24 Març</span>
                            <span class="label label-warning">22:00</span>
                            <span class="label label-danger">100 H2pOints</span>

                          </div>
                          <div class="col-xs-8 text-products">
                          <h2>Visita guiada nocturna</h2>
                          <h4><span class="glyphicon glyphicon-map-marker"></span> Museu de les aigües</h4>
                          <p>Visita guiada nocturna al museu de les aigües.</p></div>
                        </div></a>
                              <a href="{{ URL::route('event_path', ['id' => 3]) }}"><div class="col-xs-12 col-md-offset-2 col-md-8 element-container">
                          <div class="col-xs-4" style="padding-top:40px">
                            <img src="img/consum-aigua.jpg"><br><br>
                            <span class="label label-success">Dimecres 25 Març</span>
                            <span class="label label-warning">16:00</span>
                            <span class="label label-danger">100 H2pOints</span>

                          </div>
                          <div class="col-xs-8 text-products" >
                          <h2>Conferència sobre el consum de l'aigua</h2>
                          <h4><span class="glyphicon glyphicon-map-marker"></span> Universitat de Barcelona</h4>
                          <p>Conferència sobre el consum de l'aigua a la sala àgora del museu.</p></div>
                        </div></a>
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

