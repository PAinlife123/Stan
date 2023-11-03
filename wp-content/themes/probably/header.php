<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?= bloginfo('charset');?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= bloginfo('discription');?>">
    <meta name="author" content="">

     <title><?= bloginfo('name');?>|<?= is_front_page()? bloginfo('discription') : wp_title();?></title> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet"  href="<?= bloginfo('stylesheet_url');?>">   
</head>
<body>
   <nav class="navbar">
        <div class="navbar-sad">

                <div class="navbar-trid">
                      <h1>Essense</h1>
                </div>

             <div class="Search">
                 <input type="text" class="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                 <button  class="submit" style=" background: #2d2d30; font-size: 17px;     border-radius: 7px;  color: #f1f1f1; "><i class="fa fa-search" ></i></button>
             </div>

       </div>
     </nav>
<main>