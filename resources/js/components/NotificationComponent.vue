<template>
    <div>
        <li class="nav-item dropdown">
            <a id="notificationDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Notification () <span class="caret"></span>
            </a>
            <ul class="dropdown-menu notify-drop">
                <!-- end notify title -->
                <!-- notify content -->
                <div class="drop-content">
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>

                            <hr>
                            <p class="time">Şimdi</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            <p>Lorem ipsum sit dolor amet consilium.</p>
                            <p class="time">1 Saat önce</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            <p>Lorem ipsum sit dolor amet consilium.</p>
                            <p class="time">29 Dakika önce</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            <p>Lorem ipsum sit dolor amet consilium.</p>
                            <p class="time">Dün 13:18</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                            <p>Lorem ipsum sit dolor amet consilium.</p>
                            <p class="time">2 Hafta önce</p>
                        </div>
                    </li>
                </div>
                <div class="notify-drop-footer text-center">
                    <a href=""><i class="fa fa-eye"></i> Tümünü Göster</a>
                </div>
            </ul>
        </li>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    .notify-drop {
        min-width: 330px;
        background-color: #fff;
        min-height: 360px;
        max-height: 360px;
    }
    .notify-drop .notify-drop-title {
        border-bottom: 1px solid #e2e2e2;
        padding: 5px 15px 10px 15px;
    }
    .notify-drop .drop-content {
        min-height: 280px;
        max-height: 280px;
        overflow-y: scroll;
    }
    .notify-drop .drop-content::-webkit-scrollbar-track
    {
        background-color: #F5F5F5;
    }

    .notify-drop .drop-content::-webkit-scrollbar
    {
        width: 8px;
        background-color: #F5F5F5;
    }

    .notify-drop .drop-content::-webkit-scrollbar-thumb
    {
        background-color: #ccc;
    }
    .notify-drop .drop-content > li {
        border-bottom: 1px solid #e2e2e2;
        padding: 10px 0px 5px 0px;
    }
    .notify-drop .drop-content > li:nth-child(2n+0) {
        background-color: #fafafa;
    }
    .notify-drop .drop-content > li:after {
        content: "";
        clear: both;
        display: block;
    }
    .notify-drop .drop-content > li:hover {
        background-color: #fcfcfc;
    }
    .notify-drop .drop-content > li:last-child {
        border-bottom: none;
    }
    .notify-drop .drop-content > li .notify-img {
        float: left;
        display: inline-block;
        width: 45px;
        height: 45px;
        margin: 0px 0px 8px 0px;
    }
    .notify-drop .allRead {
        margin-right: 7px;
    }
    .notify-drop .rIcon {
        float: right;
        color: #999;
    }
    .notify-drop .rIcon:hover {
        color: #333;
    }
    .notify-drop .drop-content > li a {
        font-size: 12px;
        font-weight: normal;
    }
    .notify-drop .drop-content > li {
        font-weight: bold;
        font-size: 11px;
    }
    .notify-drop .drop-content > li hr {
        margin: 5px 0;
        width: 70%;
        border-color: #e2e2e2;
    }
    .notify-drop .drop-content .pd-l0 {
        padding-left: 0;
    }
    .notify-drop .drop-content > li p {
        font-size: 11px;
        color: #666;
        font-weight: normal;
        margin: 3px 0;
    }
    .notify-drop .drop-content > li p.time {
        font-size: 10px;
        font-weight: 600;
        top: -6px;
        margin: 8px 0px 0px 0px;
        padding: 0px 3px;
        border: 1px solid #e2e2e2;
        position: relative;
        background-image: linear-gradient(#fff,#f2f2f2);
        display: inline-block;
        border-radius: 2px;
        color: #B97745;
    }
    .notify-drop .drop-content > li p.time:hover {
        background-image: linear-gradient(#fff,#fff);
    }
    .notify-drop .notify-drop-footer {
        border-top: 1px solid #e2e2e2;
        bottom: 0;
        position: relative;
        padding: 8px 15px;
    }
    .notify-drop .notify-drop-footer a {
        color: #777;
        text-decoration: none;
    }
    .notify-drop .notify-drop-footer a:hover {
        color: #333;
    }
</style>
