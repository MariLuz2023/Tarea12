<x-app-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Roboto:wght@100&@700&display=swap');

        *{
            overflow: hidden;
        }

        .contenedor{
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            background-color: #151E3F;
            
        }

        :root{
            --color: #17ffa6;
        }

        .contenedor{
            display: flex;
            height: 100vh;
            gap: 25px;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }

        .btn{
            position: relative;
            padding: 20px 50px;
            text-decoration: none;
            color: #fff;
            letter-spacing: 10px;
            text-indent: 10px;
            z-index: 2;
        }

        /*-----------boton 1----------*/

        .btn-1{
            overflow: hidden;
            border: 3px solid #03cc57;
            z-index: 2;
        }


        .btn-1::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 200%;
            left: 0;
            top: -200%;
            background-color: #03cc57;
            border-radius: 50%;
            transition: all 0.6s ease;
            z-index: -1;
        }

        .btn-1:hover:before{
            top: 0;
            border-radius: 0%;
        }

        /*-----------boton 2----------*/

        .btn-2{
            border: 3px solid;
        }

        .btn-2:hover{
            background-color: #001a2b;
            box-shadow: 0 0 20px var(--color);
            border-color: var(--color);
        }

        .btn-2 span:nth-child(n){
            position: absolute;
            width: 10px;
            height: 10px;
            border: 3px solid;
            transition: all 0.6s ease;
        }

        .btn-2 span:nth-child(1){
            right: 10%;
            top: -10px;
            background-color: #fff;
        }

        .btn-2 span:nth-child(2){
            left: 10%;
            bottom: -10px;
        }

        .btn-2:hover span:nth-child(1){
            right: 80%;
            transform: rotate(90deg);
            color: var(--color);
            background-color: var(--color);
            
        }

        .btn-2:hover span:nth-child(2){
            left: 80%;
            transform: rotate(90deg);
            color: var(--color);
        }

        /*-----------boton 3----------*/

        .btn-3{
            transition: all 0.6s ease;
        }

        .btn-3::after{
            content: "";
            position: absolute;
            width: 10%;
            height: 110%;
            left: -10%;
            top: 0;
            transform: skew(20deg, 0deg);
            background-color: #ffffff;
            z-index: -1;
            transition: all 0.4s ease;
        }

        .btn-3::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            transform: skew(20deg, 0deg);
            border: 3px solid #03cc57;
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-3:hover::after{
            background-color: #ffffff31;
            transform: skew(20deg, 0deg) translateX(240px);
        }

        .btn-3:hover::before{
            background-color: #03cc57;
            border: 3px solid #029740;
            transform: skew(20deg, 0deg) scale(1.1);
        }

        /*-----------boton 4----------*/

        .btn-4::after{
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, rgb(255, 30, 143), rgb(19, 227, 255), rgb(251, 255, 20), rgb(255, 15, 15));
            background-size: 300%;
            border-radius: 5px;
            z-index: -1;
            transition: all 0.4s ease;
        }

        .btn-4:hover::after{
            background-position: 100%;
            filter: blur(15px);
        }

        .btn-4::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, rgb(255, 30, 143), rgb(19, 227, 255), rgb(251, 255, 20), rgb(255, 15, 15));
            background-size: 300%;
            border-radius: 5px;
            z-index: -1;
        }

        .btn-4:hover::before{
            background-position: 100%;
        }

        /*-----------boton 5----------*/

        .btn-5{
            border: 3px solid #17a2ff;
            
            overflow: hidden;
        }

        .btn-5::after{
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: rgb(10, 157, 255);
            z-index: -2;
        }

        .btn-5::before{
            content: "";
            position: absolute;
            width: 100%;
            height: 250px;
            left: 0;
            bottom: -150%;
            border-radius: 30%;
            background-color: #151E3F;
            
            z-index: -1;
        }

        .btn-5:hover::before{
            animation: btn-5 2s linear both;
        }


        @keyframes btn-5 {
            0%{
                transform: rotate(0deg);
            }
            100%{
                bottom: 100px;
                transform: rotate(360deg);
                
            }
        }
    </style>

    <div class="contenedor">

        <a href="/profiles" class="btn btn-2">Ingreso al trabajo
            <span></span>
            <span></span>
        </a>
    </div>
</x-app-layout>
