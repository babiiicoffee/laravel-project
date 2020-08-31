<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="/css/style.css">


</head>

<body>
    <div id="app">
        <v-app>
            <div class="topnav">
                <v-app-bar app color="primary" dark>
                <v-spacer/>
                <div v-if="loginShow" @click="login">
                    <v-btn id="v-btn" color="primary" dark>Login</v-btn>
                </div>
                <div v-else-if="signUpShow" v-on:click="signUp">
                    <v-btn id="v-btn" color="primary" dark>Sign in</v-btn>
                </div>
                </v-app-bar>
            </div>