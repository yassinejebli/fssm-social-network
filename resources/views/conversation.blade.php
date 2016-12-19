@extends('layouts.master')

@section('content')
<div class="sidebar sidebar-secondary sidebar-default">
    <div class="sidebar-content">

        <!-- Search messages -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Rechercher un messages</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <form action="#">
                    <div class="has-feedback has-feedback-left">
                        <input type="search" class="form-control" placeholder="Tappez un message ...">
                        <div class="form-control-feedback">
                            <i class="icon-search4 text-size-base text-muted"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /search messages -->


        <!-- Actions -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Actions</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <a href="#" data-toggle="modal" data-target="#newConversationModal" class="btn bg-pink-400 btn-rounded btn-block btn-xs">Nouvelle conversation</a>
                <a href="#" data-toggle="modal" data-target="#newConferenceModal" class="btn bg-teal-400 btn-rounded btn-block btn-xs">Nouvelle conference</a>
            </div>
        </div>
        <!-- /actions -->


        <!-- Sub navigation -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Navigation</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-alt navigation-accordion">
                    <li class="navigation-header">Actions</li>
                    <li><a href="#"><i class="icon-compose"></i> Compose message</a></li>
                    <li><a href="#"><i class="icon-collaboration"></i> Conference</a></li>
                    <li><a href="#"><i class="icon-users"></i> Créer un groupe</a></li>
                    <li class="navigation-divider"></li>
                </ul>
            </div>
        </div>
        <!-- /sub navigation -->


        <!-- Latest updates -->
        <!-- /latest updates -->


        <!-- Online users -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Utilisteurs en lignes</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="media-list media-list-linked">

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Beatrix Diaz</span>
                                <span class="text-size-small text-muted display-block">Facebook</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-warning-400"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Richard Vango</span>
                                <span class="text-size-small text-muted display-block">Microsoft</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-grey-300"></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /online users -->


        <!-- Latest messages -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Dérniers messages</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="media-list media-list-linked">
                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Will Samuel</span>
                                <span class="text-muted">And he looked over at the alarm clock, ticking..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Margo Baker</span>
                                <span class="text-muted">However hard he threw himself onto..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Monica Smith</span>
                                <span class="text-muted">Yes, but was it spanossible to quietly sleep through..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Jordana Mills</span>
                                <span class="text-muted">What should he do now? The next train went at..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">John Craving</span>
                                <span class="text-muted">Gregor then turned to look out the window..</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /latest messages -->

    </div>
</div>
<!-- /secondary sidebar -->


<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Conversation</span></h4>
            </div>


        </div>

        <div class="breadcrumb-line">


            <ul class="breadcrumb-elements">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- /inside tabs -->
        <div class="tabbable tab-content-bordered content-group-lg">
            <ul class="nav nav-tabs nav-lg nav-tabs-highlight">
                <li ng-class="{'active': c == conversations[0]}" ng-repeat="c in conversations">
                    <a href="#@{{c.user2._id}}" data-toggle="tab">
                        <img src="assets/images/placeholder.jpg" alt="" class="img-circle tab-img position-left"> @{{c.user2.fullName}} <span class="status-mark position-right border-danger"></span>
                    </a>
                </li>
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog7"></i> <span class="visible-xs-inline-block position-right">Options</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#chat-tab3" data-toggle="tab">Dropdown tab</a></li>
                        <li><a href="#chat-tab4" data-toggle="tab">Another tab</a></li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in has-padding" id="@{{c.user2._id}}" ng-class="{' active': c == conversations[0]}" ng-repeat="c in conversations" >
                    <ul class="media-list chat-list content-group">


                       <span ng-repeat="m in c.messages">
                            <span ng-if="m.isSender == 'true' || m.isSender == true">
                                 <li class="media reversed">
                                     <div class="media-body">
                                         <div class="media-content">@{{m.message}} </div>
                                         <span class="media-annotation display-block mt-10">@{{m.created_at}} <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                     </div>
                                     <div class="media-right">
                                         <a href="assets/images/placeholder.jpg">
                                             <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                         </a>
                                     </div>
                                 </li>
                            </span>

                           <span ng-if="m.isSender != 'true' && m.isSender != true">
                              <li class="media">
                                  <div class="media-left">
                                      <a href="assets/images/placeholder.jpg">
                                          <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                      </a>
                                  </div>

                                  <div class="media-body">
                                      <!--<div class="media-content">@{{c.user2.fullName}}.</div>-->
                                      <div class="media-content">@{{m.message}}</div>
                                      <span class="media-annotation display-block mt-10">@{{m.created_at}} <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                                  </div>
                              </li>
                           </span>

                       </span>

                    </ul>

                    <textarea ng-model="message.message" name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Tapez votre message..."></textarea>

                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="icons-list icons-list-extended mt-10">
                                <li><a href="#" data-popup="tooltip" title="Send photo" data-container="body"><i class="icon-file-picture"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send video" data-container="body"><i class="icon-file-video"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send file" data-container="body"><i class="icon-file-plus"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-xs-6 text-right">
                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right" ng-click="ajouterMessage(c)"><b><i class="icon-circle-right2"></i></b> Envoyer</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- /inside accordion -->
<!-- Modaaaaaaaaaaaal-->
        <div class="modal fade" id="newConversationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nouvelle Conversation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <label style="">Sélectionnez un utilisateur</label>
                                </div>
                                <div class="row">
                                <div class="col-md-8">
                                    <select id="usersSelect" ng-model="conversation.user2_id" class="selectpicker" data-live-search="true">
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="button" ng-click="ajouterConversation()"
                                    class="btn btn-primary">Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>


<div class="row">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" id="chat-app">
                <h1>
                    BrainSocket.js Example Chat App
                </h1>
                <form class="form-inline">
                    <input type="text" class="input" id="chat-message" placeholder="Typez un message ...">
                </form>
                <div id="chat-log">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection






    @section('script')
<script type="text/javascript" src="../assets/js/brain-socket.min.js"></script>
    <script type="text/javascript">
        $(function () {
            app.controller("ctrl", ['$scope', 'notificationFactory', '$http','$timeout', function ($scope, notificationFactory, $http,$timeout) {
                var user_id = '{{Auth::user()->id}}';
                app = {};
                $scope.message = new Object({"_token": "{{ csrf_token() }}"});
                $scope.conversations = [];
                $scope.conversation = new Object({"_token": "{{ csrf_token() }}"});


                $scope.ajouterMessage = function(conversation)
                {
                    $scope.message.isSender = true;
                    $scope.message.conversation_id = conversation._id;
                    console.log($scope.message);

                    $.ajax({
                        url: "{{route('ajouterMessage')}}",
                        data: $scope.message,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            if(conversation.messages == undefined) conversation.messages = [];
                            conversation.messages.push(result);

                            app.BrainSocket.message('generic.event',
                                {
                                    'message':$scope.message.message,
                                    'conversationObject':conversation,
                                    'messageObject':result,
                                    'user_id':user_id,
                                }
                            );
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de la message !", "Erreur");
                        }
                    });
                    $scope.message = new Object({"_token": "{{ csrf_token() }}"});


                }


                $scope.ajouterConversation = function()
                {
                    console.log($scope.conversation);

                    $.ajax({
                            url: "{{route('ajouterConversation')}}",
                            data: $scope.conversation,
                            type: "post",
                            dataType: 'json',
                            cache: false,
                            async: false,
                            success: function (result) {
                                notificationFactory.success();
                                $scope.conversation.user2 = result.user2;
                                $scope.conversation._id = result._id;
                                $scope.conversations.unshift($scope.conversation);
                            },
                            error: function (error) {
                                notificationFactory.error("Erreur lors de l'ajout de la conversation !", "Erreur");
                            }
                        });
                    $scope.conversation = new Object({"_token": "{{ csrf_token() }}"});


                }



                $scope.getConversations = function () {
                        $.ajax({
                            url: "{{route('listeConversations')}}", type: "get", dataType: 'json', cache: false, async: false,
                            success: function (result) {
                                console.log(result);
                                $scope.conversations = result;
                            }, error: function (error) {
                                notificationFactory.error("Erreur lors du chargement des conversations !", "Erreur");
                            }
                        });

                }

                    $scope.getConversations();




                $scope.getUsers = function () {
                    $.ajax({
                        url: "{{route('listeUsers')}}", type: "get", dataType: 'json', cache: false, async: false,
                        success: function (result) {
                            console.log(result);
                            $('#usersSelect').empty();
                            for(i=0;i<result.length;i++){
                                user = result[i];
                                if(user._id != undefined && user.fullName != undefined)
                                {
                                    $('#usersSelect').append(
                                        $('<option></option>').val(user._id).html(user.fullName));
                                }

                            }

                        }, error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des membres !", "Erreur");
                        }
                    });


                }

                $scope.getUsers();















                ///////////////////////////////////////////////////// Socket



                app.BrainSocket = new BrainSocket(
                    new WebSocket('ws://localhost:8080'),
                    new BrainSocketPubSub()
                );


                // modifié par jebli
                app.BrainSocket.Event.listen('generic.event',function(msg){
                    console.log(msg);
                    if(msg.client.data.user_id == user_id){
                        $('#chat-log').append('<div class="alert alert-success">Me: '+msg.client.data.message+'</div>');
                    }else{

                        for(i=0;i<$scope.conversations.length;i++){
                            c = $scope.conversations[i];
                            if(c._id == msg.client.data.conversationObject._id)
                            {
                                msg.client.data.messageObject.isSender = false;
                                c.messages.push(msg.client.data.messageObject);
                                break;
                            }
                        }
                        $scope.$apply();
                       // msg.client.data.conversationObject.messages.push(msg.client.data.messageObject);
                      //  $('#chat-log').append('<div class="alert alert-info">Them: '+msg.client.data.message+'</div>');
                    }
                });


                app.BrainSocket.Event.listen('app.success',function(data){
                    console.log('An app success message was sent from the ws server!');
                    console.log(data);
                });
                app.BrainSocket.Event.listen('app.error',function(data){
                    console.log('An app error message was sent from the ws server!');
                    console.log(data);
                });
                $('#chat-message').keypress(function(event) {
                    if(event.keyCode == 13){
                        app.BrainSocket.message('generic.event',
                            {
                                'message':$scope.message,
                                'user_id':user_id,
                            }
                        );
                        $(this).val('');
                    }
                    return event.keyCode != 13; }
                );

            }]);
            angular.bootstrap(document, ['AdminModule']);
        });

    </script>

    @endsection