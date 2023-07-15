<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div aria-label = "Aschy running in a metal wheel" role = "img" class = "wheel-and-hamster">
        <div class = "wheel"></div>
        <div class = "hamster">
            <div class = "hamster_body">
                <div class = "hamster_head">
                    <div class = "hamster_ear"></div>
                    <div class = "hamster_eye"></div>
                    <div class = "hamster_nose"></div>
                </div>
                <div class = "hamster_limb hamster_limb--fr"></div>
                <div class = "hamster_limb hamster_limb--f1"></div>
                <div class = "hamster_limb hamster_limb--br"></div>
                <div class = "hamster_limb hamster_limb--b1"></div>
                <div class = "hamster_tail"></div>
            </div>
        </div>
        <div class = "spoke"></div>
    </div>
</body>
</html>
<style>
    .wheel-and-hamster{
        --dur:1s;
        position: relative;
        width: 12em;
        height: 12em;
        font-size: 14px;
    }
    .wheel, .hamster, .hamster div, .spoke{
        position: absolute;
    }
    .wheel, .spoke{
        border-radius: 50%;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .wheel{
        background: radial-gradient(100% 100% at center, hsla(0,0%,60%,0)47.8%, hsl(0,0%,60%)48%);
        z-index: 2;
    }
    .hamster{
        animation: hamster var(--dur) ease-in-out infinite;
        top: 50%;
        left: calc(50% -3.5em);
        width: 7em;
        height: 3.75em;
        transform: rotate(4deg) translate(-0.8em,1.85em);
        transform-origin: 50% 0;
        z-index: 1;
    }
    .hamster_head{
        animation: hamsterHead var(--dur) ease-in-out infinite;
        background: hsl(30,90%,55%);
        border-radius: 70% 30% 0 100% / 40% 25% 25% 60%;
        box-shadow: 0 -0.25em 0 hsl(30,90%,80%) inset, 0.75em -1.55em 0 hsl(30,90%,90%) inset;
        top: -4px;
        left: -2.4em;
        width: 2.75em;
        height: 2.5em;
        transform-origin: 100% 50%;
    }
    .hamster_ear{
    animation: hamsterEar var(--dur) ease-in-out infinite;
    background: hsl(0,90%,85%);
    border-radius: 50%;
    box-shadow: 0 -0.25em 0 hsl(30,90%,55%) inset;
    top: -0.25em;
    right: -0.25em;
    width: 0.75em;
    height: 0.75em;
    transform-origin: 50% 75%;
    }
    .hamster_eye{
    animation: hamsterEye var(--dur) linear infinite;
    background-color: hsl(0,0,0);
    border-radius: 50%;
    box-shadow: 0 -0.25em 0 hsl(0, 0%, 34%)	inset, 0.75em -1.55em 0 hsl(30,90%,90%) inset;
    top: 0.375em;
    left: 1.25em;
    width: 0.5em;
    height: 0.5em;
    }
    .hamster_nose{
        background: hsl(0,90%,75%);
        border-radius: 35% 65% 85% 15% / 70% 50% 50% 30%;
        top: 0.75em;
        left: 0;
        width: 0.2em;
        height: 0.25em;
    }
    .hamster_body{
        animation: hamsterBody var(--dur) ease-in-out infinite;
        background: hsl(30,90%,90%);
        border-radius: 50% 30% 50% 30% / 15% 60% 40% 40%;
        box-shadow: 0.1em 0.75em 0 hsl(30,90%,55%) inset, 0.15em -0.5em 0 hsl(30,90%,80%) inset;
        top: 0.25em;
        left: 5em;
        width: 4.5em;
        height: 3em;
        transform-origin: 17% 50%;
        transform-style: preserve-3d;
    }
    .hamster_limb--fr, .hamster_limb--f1{
        clip-path: polygon(0 0,100% 0,70% 80%,60% 100%,0% 100%,40% 80%);
        top: 2em;
        left: 1em;
        width: 1em;
        height: 1.5em;
        transform-origin: 50% 0;
    }
    .hamster_limb--fr{
        animation: hamsterFRLimb var(--dur) linear infinite;
        background: linear-gradient(hsl(30,90%,80%)80%, hsl(0,90%,75%)80%);
        transform: rotate(15deg) translateZ(-1px);
    }
    .hamster_limb--f1{
    animation: hamsterFLLimb var(--dur) linear infinite;
    background: linear-gradient(hsl(30,90%,90%)80%, hsl(0,90%,85%)80%);
    transform: rotate(15deg);
    }
    .hamster_limb--br,.hamster_limb--b1{
        border-radius: 0.75em 0.75em 0 0;
        clip-path: polygon(0 0,100% 0,100% 30%,70% 90%,70% 100%,30% 100%,40% 90%,0% 30%);
        top: 1em;
        left: 2.5em;
        width: 1.5em;
        height: 2.5em;
        transform-origin: 50% 30%;
    }
    .hamster_limb--br{
        animation: hamsterBRLimb var(--dur) linear infinite;
        background: linear-gradient(hsl(30,90%,80%)90%, hsl(0,90%,75%)90%);
        transform: rotate(-25deg) translateZ(-1px);
    }
    .hamster_limb--b1{
        animation: hamsterBLLimb var(--dur) linear infinite;
        background: linear-gradient(hsl(30,90%,90%)90%, hsl(0,90%,85%)90%);
        transform: rotate(-25deg);
    }
    .hamster_tail{
        animation: hamsterTail var(--dur) linear infinite;
        background: hsl(30,90%,55%);
        border-radius: 0.25em 50% 50% 0.25em;
        box-shadow: 0 -0.25em 0 hsl(30,90%,55%) inset;
        top: 0.5em;
        right: -0.4em;
        width: 1.1em;
        height: 0.5em;
        transform: rotate(70deg) translateZ(-6px);
        transform-origin: 17% 50%;
    }
    .spoke{
        animation: spoke var(--dur) linear infinite;
        background: radial-gradient(100% 100% at center, hsl(0,0%,60%)4.8%, hsla(0,0%,60%,0)5%), 
                    linear-gradient(hsla(0,0%,55%,0)46.9%, hsl(0,0%,65%)47% 52.9%, hsla(0,0%,65%,0)53%)50% 50% / 99% 99% no-repeat;
    }
    /* Animations */
    @keyframes hamster{
        from, to{
            transform: rotate(4deg) translate(-0.8em, 1,85em);
        }
        50%{
            transform: rotate(0) translate(-0.8em, 1,85em);
        }
    } 
    @keyframes hamsterHead{
        from, 25%, 50%, 75%, to{
            transform: rotate(0);
        }
        12.5%, 37.5%, 62.5%, 87.5%{
            transform: rotate(8deg);
        }
    } 
    @keyframes hamsterEye{
        from, 90%, to{
            transform: scaleY(1);
        }
        95%{
            transform: scaleY(0);
        }
    } 
    @keyframes hamsterEar{
        from, 25%, 50%, 75%, to{
            transform: rotate(0);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(12deg);
        }
    }
    @keyframes hamsterBody{
        from, 25%, 50%, 75%, to{
            transform: rotate(0);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(-2deg);
        }
    }
    @keyframes hamsterFRLimb{
        from, 25%, 50%, 75%, to{
            transform: rotate(50deg) translateZ(-1px);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(-30deg) translateZ(-1px);
        }
    } 
    @keyframes hamsterF1Limb{
        from, 25%, 50%, 75%, to{
            transform: rotate(-30deg);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(50deg);
        }
    }
    @keyframes hamsterBRLimb{
        from, 25%, 50%, 75%, to{
            transform: rotate(-60deg) translateZ(-1px);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(20deg) translateZ(-1px);
        }
    }
    @keyframes hamsterB1Limb{
        from, 25%, 50%, 75%, to{
            transform: rotate(20deg);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(-60deg);
        }
    }
    @keyframes hamsterTail{
        from, 25%, 50%, 75%, to{
            transform: rotate(30deg) translateZ(-1px);
        }
        12.5%, 37.5%, 62.5%, 87.5% {
            transform: rotate(10deg) translateZ(-1px);
        }
    } 
    @keyframes spoke{
        from{
            transform: rotate(0);
        }
        to{
            transform: rotate(-1turn);
        }
    } 

</style>