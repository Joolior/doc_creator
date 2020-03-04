<?php

include 'function.php';

//форма импутов и чекбокса
$project_name = $_POST['name'];
$project_title = $_POST['title'];
$mas_name = [];
$mas_title = [];


echo $_POST['name'];
echo "\t";
echo $_POST['title'];
echo "\n";

$path = 1;

$chb = isset($_POST['chb_array']) ? $_POST['chb_array'] : ''; //массив будет хранить значить чекнутых чекбоксов

// if ($chb != '') {
//     foreach ($chb as $k => $v) {

//         echo $chb[$k];
//     }
// }





$arr_plug = array(
    'JetElements Plugin' => 'jet-elements',
    'JetThemeCore' => 'jet-themecore',
    'JetBlocks Plugin' => 'jet-blocks',
    'JetBlog Plugin' => 'jet-blog',
    'JetMenu Plugin' => 'jet-menu',
    'JetReviews Plugin' => 'jet-reviews',
    'JetTabs Plugin' => 'jet-tabs',
    'JetTricks Plugin' => 'jet-tricks',
    'JetWooBuilder Plugin' => 'jet-woobuilder',
    'JetSmartFilter Plugin' => 'jet-smartfilters',
    'JetPopup Plugin' => 'jet-popup',
    'JetProductGallery Plugin' => 'jet-product-gallery',
    'JetCompareWishlist Plugin' => 'jet-comparewishlist',
    'JetSearch Plugin' => 'jet-search',
    'JetEngine Plugin' => 'jet-engine'
);
$arr_plug_c = array(
    'JetElements Plugin' => 'JetElements Plugin',
    'JetThemeCore' => 'JetThemeCore',
    'JetBlocks Plugin' => 'JetBlocks Plugin',
    'JetBlog Plugin' => 'JetBlog Plugin',
    'JetMenu Plugin' => 'JetMenu Plugin',
    'JetReviews Plugin' => 'JetReviews Plugin',
    'JetTabs Plugin' => 'JetTabs Plugin',
    'JetTricks Plugin' => 'JetTricks Plugin',
    'JetWooBuilder Plugin' => 'JetWooBuilder Plugin',
    'JetSmartFilter Plugin' => 'JetSmartFilter Plugin',
    'JetPopup Plugin' => 'JetPopup Plugin',
    'JetProductGallery Plugin' => 'JetProductGallery Plugin',
    'JetCompareWishlist Plugin' => 'JetCompareWishlist Plugin',
    'JetSearch Plugin' => 'JetSearch Plugin',
    'JetEngine Plugin' => 'JetEngine Plugin'
);


echo "<br>";
echo "<br>";

$col = 0;




// перезаписываю масивы полученые с импута 
for ($i = 0; $i < 15; $i++) {
    foreach ($arr_plug as $k => $v) {




        if ($chb[$i] == $arr_plug[$k]) {
            $col++;
            echo $col . "<br>";
            $mas_name[$col] = $arr_plug[$k];
            $mas_title[$col] = $arr_plug_c[$k];
            //break;
        }
    }
    echo $mas_name[$col] . "   ";
    echo $mas_title[$col] . "<br>";
    if ($col == count($chb)) {
        break;
    }
}


//создаем директорию проекта
$path_f =  "../projects/" . "$project_name" . "/img";
mkdir($path_f, 0777, true);


//-------------вызов функций
sections($project_name);
project($project_name, $project_title);
basic_setup($project_name);
extras($project_name);
iam_pro($project_name);
installation($project_name);
introdaction($project_name);
localization_multilanguage($project_name);
theme_dashboard($project_name);
website_customization($project_name);
plugins_overview($project_name, $mas_name, $mas_title);
