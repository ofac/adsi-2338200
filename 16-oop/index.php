<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP (Object Oriented Programming)</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
    <style>
        body {
            background-color: #302D81;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 100 60'%3E%3Cg %3E%3Crect fill='%23302D81' width='11' height='11'/%3E%3Crect fill='%23312e83' x='10' width='11' height='11'/%3E%3Crect fill='%23322f85' y='10' width='11' height='11'/%3E%3Crect fill='%23333086' x='20' width='11' height='11'/%3E%3Crect fill='%23333088' x='10' y='10' width='11' height='11'/%3E%3Crect fill='%2334318a' y='20' width='11' height='11'/%3E%3Crect fill='%2335328c' x='30' width='11' height='11'/%3E%3Crect fill='%2336338e' x='20' y='10' width='11' height='11'/%3E%3Crect fill='%2337348f' x='10' y='20' width='11' height='11'/%3E%3Crect fill='%23383591' y='30' width='11' height='11'/%3E%3Crect fill='%23383693' x='40' width='11' height='11'/%3E%3Crect fill='%23393795' x='30' y='10' width='11' height='11'/%3E%3Crect fill='%233a3797' x='20' y='20' width='11' height='11'/%3E%3Crect fill='%233b3898' x='10' y='30' width='11' height='11'/%3E%3Crect fill='%233c399a' y='40' width='11' height='11'/%3E%3Crect fill='%233d3a9c' x='50' width='11' height='11'/%3E%3Crect fill='%233d3b9e' x='40' y='10' width='11' height='11'/%3E%3Crect fill='%233e3ca0' x='30' y='20' width='11' height='11'/%3E%3Crect fill='%233f3da2' x='20' y='30' width='11' height='11'/%3E%3Crect fill='%23403ea3' x='10' y='40' width='11' height='11'/%3E%3Crect fill='%23413fa5' y='50' width='11' height='11'/%3E%3Crect fill='%234240a7' x='60' width='11' height='11'/%3E%3Crect fill='%234241a9' x='50' y='10' width='11' height='11'/%3E%3Crect fill='%234341ab' x='40' y='20' width='11' height='11'/%3E%3Crect fill='%234442ad' x='30' y='30' width='11' height='11'/%3E%3Crect fill='%234543af' x='20' y='40' width='11' height='11'/%3E%3Crect fill='%234644b1' x='10' y='50' width='11' height='11'/%3E%3Crect fill='%234745b2' x='70' width='11' height='11'/%3E%3Crect fill='%234746b4' x='60' y='10' width='11' height='11'/%3E%3Crect fill='%234847b6' x='50' y='20' width='11' height='11'/%3E%3Crect fill='%234948b8' x='40' y='30' width='11' height='11'/%3E%3Crect fill='%234a49ba' x='30' y='40' width='11' height='11'/%3E%3Crect fill='%234b4abc' x='20' y='50' width='11' height='11'/%3E%3Crect fill='%234c4bbe' x='80' width='11' height='11'/%3E%3Crect fill='%234c4cc0' x='70' y='10' width='11' height='11'/%3E%3Crect fill='%234d4dc2' x='60' y='20' width='11' height='11'/%3E%3Crect fill='%234e4ec4' x='50' y='30' width='11' height='11'/%3E%3Crect fill='%234f4fc6' x='40' y='40' width='11' height='11'/%3E%3Crect fill='%23504fc8' x='30' y='50' width='11' height='11'/%3E%3Crect fill='%235150c9' x='90' width='11' height='11'/%3E%3Crect fill='%235151cb' x='80' y='10' width='11' height='11'/%3E%3Crect fill='%235252cd' x='70' y='20' width='11' height='11'/%3E%3Crect fill='%235353cf' x='60' y='30' width='11' height='11'/%3E%3Crect fill='%235454d1' x='50' y='40' width='11' height='11'/%3E%3Crect fill='%235555d3' x='40' y='50' width='11' height='11'/%3E%3Crect fill='%235656d5' x='90' y='10' width='11' height='11'/%3E%3Crect fill='%235657d7' x='80' y='20' width='11' height='11'/%3E%3Crect fill='%235758d9' x='70' y='30' width='11' height='11'/%3E%3Crect fill='%235859db' x='60' y='40' width='11' height='11'/%3E%3Crect fill='%23595add' x='50' y='50' width='11' height='11'/%3E%3Crect fill='%235a5bdf' x='90' y='20' width='11' height='11'/%3E%3Crect fill='%235a5ce1' x='80' y='30' width='11' height='11'/%3E%3Crect fill='%235b5de3' x='70' y='40' width='11' height='11'/%3E%3Crect fill='%235c5ee5' x='60' y='50' width='11' height='11'/%3E%3Crect fill='%235d5fe7' x='90' y='30' width='11' height='11'/%3E%3Crect fill='%235e60e9' x='80' y='40' width='11' height='11'/%3E%3Crect fill='%235f61eb' x='70' y='50' width='11' height='11'/%3E%3Crect fill='%235f62ed' x='90' y='40' width='11' height='11'/%3E%3Crect fill='%236063ef' x='80' y='50' width='11' height='11'/%3E%3Crect fill='%236164F1' x='90' y='50' width='11' height='11'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="
             overflow-hidden
             min-h-screen">
    
    <main class="my-20 
                 mx-auto
                 max-w-lg 
                 p-5 
                 border-2 
               border-indigo-400 
               bg-white/5 
                 rounded">
        <h1 class="m-5 
                   text-center 
                   text-2xl 
                 text-white 
                   text-opacity-50 
                   font-medium">
            OOP (Object Oriented Programming)
        </h1>
        <section class="text-white 
                          max-h-[590px] 
                          overflow-y-scroll
                          text-opacity-50
                          p-5
                          mt-10
                          rounded">
            <ol class="flex 
                       flex-col 
                       justify-center 
                       items-center 
                       gap-1">
                <li class="text-xl 
                         text-white/70">
                    <a href="01-class.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        01 - Class
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="02-construct.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        02 - Construct
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="03-private.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        03 - Private
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="04-collaboration.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        04 -  Collaboration
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="05-parameters.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        05 - Parameters
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="06-extends.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        06 - Extends
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="07-overwrite-method.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        07 - Overwrite Method
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="08-overwrite-construct.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        08 - Overwrite Construct
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="09-class-abstract.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        09 - Class Abstract
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="10-method-abstract.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        10 - Method Abstract
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="11-class-final.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        11 - Class Final
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="12-method-final.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        12 - Method Final
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="13-clone-object.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        13 - Clone Object
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="14-instanceof.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        14 - Instance Of
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="15-destruct.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        15 - Destruct
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="16-method-static.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        16 - Method Static
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="17-interface.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        17 - Interface
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="18-name-space.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        18 - Name Space
                    </a>
                </li>
                <li class="text-xl 
                         text-white/70">
                    <a href="19-trait.php" class="bg-black 
                                        bg-opacity-40 
                                        w-96 
                                        p-4 
                                        text-xl 
                                        flex 
                                        text-white/70 
                                        rounded
                                        transition
                                        hover:bg-opacity-50
                                        hover:scale-105">
                                        19 - Trait
                    </a>
                </li>
            </ol>
            
        </section>
    </main>
    
</body>
</html>