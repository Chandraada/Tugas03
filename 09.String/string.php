<body>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
    
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card p-3">

            <div class="d-flex align-items-center">

                <div class="image">
            <img src="ChaChan.jpg" class="rounded" width="150" >
            </div>

            <div class="ml-3 w-100">
                
               <h4 class="mb-0 mt-0">CHANDRA APRIANSYAH</h4>
               <span>SOFTWARE ENGINEERING</span>


               <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                <div class="d-flex flex-column">

                    <span class="articles">belajar php dasar</span>
                    <span class="number1">string</span>
                    </div>
               </div>
              <div class="button mt-2 d-flex flex-row align-items-center">
                <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button>  
               </div>           
            </div>     
    </div>       
        </div>    
     </div>
</div>

<div class="row">
<div class="col-6 mx-auto p-4 bg-white rounded">

<?php
echo "CONTOH STRING";
echo "<hr>";
echo "Hello";
echo "<br>";
print "World";

echo "<br>";

$arr = array('hello','world!','beautiful','day');
echo join (" ",$arr);
// Slicing
// $n = "Hello World!";
// echo substr($n, 6, 5);
?>