<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: rgb(255, 255, 255);
            background: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 1) 0%, rgba(243, 246, 255, 1) 100%);
            background: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 1) 0%, rgba(243, 246, 255, 1) 100%);
            background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(243, 246, 255, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f3f6ff', GradientType=1);
            font-family: "proxima-nova";
            padding-top: 100px;
            text-align: center;
        }

        .wrapper {
            animation: wrapperAni 230ms ease-in 200ms forwards;
            background: rgba(255, 255, 255, 1);
            border: 1px solid rgba(rgba(0, 0, 0, 1), .15);
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(rgba(0, 0, 0, 1), .1);
            display: inline-block;
            height: 400px;
            margin: 0 20px;
            opacity: 0;
            position: relative;
            vertical-align: top;
            width: 300px;
        }

        .header__wrapper {
            height: 200px;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .header {
            animation: headerAni 230ms ease-in 430ms forwards;
            border-radius: 0;
            height: 700px;
            left: -200px;
            opacity: 0;
            position: absolute;
            top: -500px;
            width: 700px;

            .sign {
                animation: signAni 430ms ease-in 660ms forwards;
                border-radius: 50%;
                bottom: 50px;
                display: block;
                height: 100px;
                left: calc(50% - 50px);
                opacity: 0;
                position: absolute;
                width: 100px;
            }
        }

        h1,
        p {
            margin: 0;
        }

        h1 {
            color: rgba(rgba(0, 0, 0, 1), .8);
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 10px;
            padding-top: 50px;
        }

        p {
            color: rgba(rgba(0, 0, 0, 1), .7);
            padding: 0 40px;
            font-size: 18px;
            line-height: 1.4em;
        }

        button {
            background: rgba(255, 255, 255, 1);
            border: 1px solid rgba(rgba(0, 0, 0, 1), .15);
            border-radius: 20px;
            bottom: -20px;
            box-shadow: 0 2px 4px rgba(rgba(0, 0, 0, 1), .1);
            color: rgba(rgba(0, 0, 0, 1), .7);
            cursor: pointer;
            font-family: inherit;
            font-size: 16px;
            font-weight: 600;
            height: 40px;
            left: calc(50% - 85px);
            outline: none;
            position: absolute;
            transition: all 170ms ease-in;
            width: 170px;
        }

        /*
 * COLOR SPECIFIC
*/
        .red {
            .header {
                background-color: rgba(255, 179, 179, 1);
            }

            .sign {
                background-color: rgba(255, 53, 53, 1);
                box-shadow: 0 0 0 15px rgba(255, 130, 130, 1), 0 0 0 30px rgba(255, 162, 162, 1);

                &:before,
                &:after {
                    background: rgba(255, 255, 255, 1);
                    border-radius: 2px;
                    content: "";
                    display: block;
                    height: 40px;
                    left: calc(50% - 2px);
                    position: absolute;
                    top: calc(50% - 20px);
                    width: 5px;
                }

                &:before {
                    transform: rotate(45deg);
                }

                &:after {
                    transform: rotate(-45deg);
                }
            }

            button {
                &:hover {
                    border-color: rgba(255, 53, 53, 1);
                }

                &:focus {
                    background-color: rgba(255, 179, 179, 1);
                    border-color: rgba(255, 53, 53, 1);
                }
            }
        }

        .green {
            .header {
                background-color: rgba(190, 240, 200, 1);
            }

            .sign {
                background-color: rgba(78, 196, 94, 1);
                box-shadow: 0 0 0 15px lighten(rgba(78, 196, 94, 1), 10), 0 0 0 30px lighten(rgba(78, 196, 94, 1), 20);

                &:before,
                &:after {
                    background: rgba(255, 255, 255, 1);
                    border-radius: 2px;
                    content: "";
                    display: block;
                    height: 40px;
                    left: calc(50% - 2px);
                    position: absolute;
                    top: calc(50% - 20px);
                    width: 5px;
                }

                &:before {
                    left: calc(50% + 5px);
                    transform: rotate(45deg);
                    top: calc(50% - 20px);
                }

                &:after {
                    height: 20px;
                    left: calc(50% - 15px);
                    transform: rotate(-45deg);
                    top: calc(50% - 5px);
                }
            }

            button {
                &:hover {
                    border-color: rgba(78, 196, 94, 1);
                }

                &:focus {
                    background-color: rgba(190, 240, 200, 1);
                    border-color: rgba(78, 196, 94, 1);
                }
            }
        }

        /*
 * ANIMATIONS
*/
        @keyframes wrapperAni {
            0% {
                opacity: 0;
                transform: scale(.95) translateY(40px);
            }

            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes headerAni {
            0% {
                border-radius: 0;
                opacity: 0;
                transform: translateY(-100px);
            }

            100% {
                border-radius: 50%;
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes signAni {
            0% {
                opacity: 0;
                transform: scale(.3) rotate(180deg);
            }

            60% {
                transform: scale(1.3);
            }

            80% {
                transform: scale(.9);
            }

            100% {
                opacity: 1;
                transform: scale(1) rotate(0);
            }
        }

        /*
 * EMBED STYLING
*/
        @media (max-width: 800px) {

            html,
            body {
                height: 600px;
                overflow: hidden;
                width: 800px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper green">
        <div class="header__wrapper">
            <div class="header">
                <div class="sign"><span></span></div>
            </div>
        </div>
        <h1>Thank You</h1>
        <p>Service ticket generated successfully !</p>
    </div>
</body>

</html>