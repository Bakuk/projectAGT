@extends('admin.layouts.app')

@section('title', 'dashboard')

@section('content')
    <div class="row">
        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Пользователь Management</b>
                    </div>
                </div>

                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">person</i>
                            <span class="indigo-text text-lighten-1"><h5>Админы</h5></span>
                        </div>
                    </a>
                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">people</i>
                            <span class="indigo-text text-lighten-1"><h5>Сотрудники</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Новости Management</b>
                    </div>
                </div>
                <div class="row">
                    <a href="/admin/news">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                            <span class="indigo-text text-lighten-1"><h5>Новости</h5></span>
                        </div>
                    </a>

                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                            <span class="indigo-text text-lighten-1"><h5>Картинки</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Документы Management</b>
                    </div>
                </div>

                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                            <span class="indigo-text text-lighten-1"><h5>Документы</h5></span>
                        </div>
                    </a>

                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                            <span class="indigo-text text-lighten-1"><h5>Категории</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Организация Management</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                            <span class="indigo-text text-lighten-1"><h5>Организация</h5></span>
                        </div>
                    </a>
                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Специальности Management</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons ">view_list</i>
                            <span class="indigo-text text-lighten-1"><h5>Специальности</h5></span>
                        </div>
                    </a>
                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large pink waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>

        <ul>
            <li>
                <a class="btn-floating red"><i class="material-icons">note_add</i></a>
                <a href="" class="btn-floating fab-tip">Add a note</a>
            </li>

            <li>
                <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
                <a href="" class="btn-floating fab-tip">Add a photo</a>
            </li>

            <li>
                <a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
                <a href="" class="btn-floating fab-tip">Add an alarm</a>
            </li>

            <li>
                <a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
                <a href="" class="btn-floating fab-tip">Add a master password</a>
            </li>
        </ul>
    </div>

@endsection


