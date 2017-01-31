<div ng-controller="ChatCtrl" class="container bootstrap snippet">

    <div class="row">
        <div class="col-md-4 bg-white ">
            <div class=" row border-bottom padding-sm" style="height: 40px;">

            </div>

            <!-- =============================================================== -->
            <!-- member list -->
            <ul class="friend-list">
                <li class="active bounceInDown"    ng-repeat="user in users | filter:search" id="<%post.id%>">

                        <div class="friend-name">
                            <button ng-click="GetUserMessage(user.id)"   style="margin-bottom: 20px"   class="form-control"><span style="color: #880000;font-size: 20px"><%user.name%></span> Send Message
                            </button>
                        </div>
                    <small class="chat-alert label label-danger"></small>
                </li>
            </ul>
        </div>

        <!--=========================================================-->
        <!-- selected chat -->
        <div class="col-md-8 bg-success myscrol" >
            <div class="chat-message">
                <ul class="chat" ng-repeat="msg in result.messages">

                    @if(Auth::id() == '<%msg.from_user%>')
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"><h3 style="color: #880000"><%msg.name%></h3></strong>
                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                </div>
                                <p>
                                    <h4><%msg.msg%></h4>
                                </p>
                            </div>
                        </li>

                    @else
                    <li class="right clearfix">
                    	<span class="chat-img pull-right">
                    		<img src="http://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                    	</span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font"><h3 style="color: #880000"><%msg.name%></h3></strong>
                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <%msg.created_at%></small>
                            </div>
                            <p>
                                <h4><%msg.msg%></h4>
                            </p>
                        </div>
                    </li>
                    @endif


                </ul>
            </div>
            <div class="chat-box bg-white">
                <div class="input-group">
                    <input class="form-control border no-shadow no-rounded" ng-model="message" placeholder="Type your message here">
                    <span class="input-group-btn">
            			<button ng-click="SendMsg()" class="btn btn-success no-rounded send_msg" type="button" disabled>Send</button>
            		</span>
                </div><!-- /input-group -->
            </div>
        </div>
    </div>
</div>