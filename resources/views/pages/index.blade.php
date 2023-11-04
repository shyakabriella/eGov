<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>e_Gov</title>
</head>
<body> 
    <div class="container min-h-screen bg-[url('bg2.png')] bg-center bg-no-repeat bg-cover px-28 py-5 relative from-gray-100">
        <nav class="flex items-center"> 
            <img  src="logo.png" class="h-24">
            <ul class="flex-1 text-right ">
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white bg-sky-500 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-green-300 hover:text-white duration-300 hover:border border border-transparent text-xl">Home</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white bg-sky-500 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent text-xl">About</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white bg-sky-500 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent text-xl">Services</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white bg-sky-500 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent text-xl">Contact</a></li>
                <li class="list-none inline-block px-5"><a href="login" class="no-underline text-white bg-yellow-300 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent ">Adimin <span class="text-lg inline-block">&#x21aa;</span></a></li> 
            </ul>
            
        </nav>

        <div class="text-white mt-30 max-w-lg">
            <h1 class="text-6xl font-semibold leading-normal">e_Goverment<br> Management <span class="font-light"> System </span></h1>
            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, placeat non esse illum iste, ipsum quam soluta quae, hic vel ab reprehenderit. 
                Perspiciatis delectus explicabo, aliquid molestiae expedita ipsum odio.</P>

                <div class="mt-10">
                    <a href="" class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent">Get Start</a>
                    <a href="/login">Register Now <span class="text-lg inline-block rotate-90">&#10148</span></a>
                </div>
                    </div>
                    <img src="govv.png" class="w-full xl:w-1/2 xl:absolute bottom-0 right-20" >
                    <img src="govv2.png" class="w-full xl:w-1/2 xl:absolute bottom-0 right-20" >
                    <img src="govv3.png" class="w-full xl:w-1/2 xl:absolute bottom-0 right-20" >
                </div>

    <script>
            var firstIndex=1;
            function automaticSlide(){
                setTimeout(automaticSlide, 2000);
                var pics;
                const img=document.querySelectorAll('img');
                for(pics=1; pics<img.length; pics++){
                    img[pics].style.display="none";
                }


            firstIndex++;
            if(firstIndex > img.length){
                firstIndex = 1;
            }
            img[firstIndex -1].style.display="block";
            }
            automaticSlide();
    </script>
</body>
</html>