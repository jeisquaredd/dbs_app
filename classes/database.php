<?php

class database{

    function opencon(){

        return new PDO(
            'mysql:host=localhost; dbname=dbs_app',
            username: 'root',
            password: '');
        }
    }
