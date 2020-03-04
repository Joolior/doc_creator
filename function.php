<?php



//-----------------------------sections.json------------------------------------------

function sections($name)
{

    $project_name = ',' . '"' . $name . '"';
    $path_f =  "../sections.json";

    $all_file = file_get_contents($path_f);


    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -1));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $sections_jsn .= $project_name . ":  [" . "\n" . "\t" . '"introduction",' . "\n" . "\t" . '"installation",' . "\n" . "\t" . '"theme_dashboard",' . "\n" . "\t" . '"website-customization",' . "\n" . "\t" . '"basic-setup",' . "\n" . "\t" . '"plugins-overview",' . "\n" . "\t" . '"localization-multilanguage",' . "\n" . "\t" . '"iam-pro",' . "\n" . "\t" . '"extras"' . "\n" . "\t" . "]" . "\n" . "\t" . "\n" . "}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}




//--------------------------------project.json------------------------------

function project($name, $title)
{

    $project_name = ',' . '"' . $name . '"';
    $project_title = $title;

    $path_f =  "../projects.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -1));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $sections_jsn .= $project_name . ": {" . "\n" . "\t" . '"textLogo": "",' . "\n" . "\t" . '"title": ' . '"' . $project_title . '",' . "\n" . "\t" . '"titleCaption": "Crafted by Zemez",' . "\n" . "\t" . '"author": ""' . "\n" . "\t" . "}" . "\n" . "\n" . '}';
    fwrite($fd, $sections_jsn);
    fclose($fd);
}




//------------------------------basic-setup----------------------------

function basic_setup($name)
{

    $project_name = '"' . $name . '"' . ':';

    $path_f =  "../sections/basic-setup/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }

    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");



    $mas_id = ['"id": "logo_favicon",', '"id": "footer_copyright",', '"id": "managing_menu",', '"id": "slider",', '"id": "social_networks",'];
    $mas_en = ['"en": "Changing logo & favicon"', '"en": "Changing footer copyright"', '"en": "Managing menu"', '"en": "Editing slider"', '"en": "Changing social networks icons"'];



    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 5; $i++) {
        if ($i < 4) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }

    $sections_jsn .= "\n" . "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}


//-------------------------------extras-------------------------------------

function extras($name)
{

    $project_name = $name;
    $path_f =  "../sections/extras/section.json";




    $all_file = file_get_contents($path_f);


    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }



    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $sections_jsn .= "," . "\n" . "\t \t" . '"' . "$project_name" . '"' . ':' . " []  " . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}


//---------------------------iam-pro----------------------------------

function iam_pro($name)
{

    $project_name = '"' . $name . '"' . ':';
    $path_f =  "../sections/iam-pro/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $mas_id = ['"id": "filters_actions",', '"id": "speed_optimization",'];
    $mas_en = ['"en": "Filters and Actions"', '"en": "Website speed optimization"'];


    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 2; $i++) {
        if ($i < 1) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }


    $sections_jsn .= "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}
//---------------------------installation---------------------------------

function installation($name)
{

    $project_name = '"' . $name . '"' . ':';
    $path_f =  "../sections/installation/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $mas_id = ['"id": "engine_installation",', '"id": "theme_installation",', '"id": "manual_installation",', '"id": "manual_sdata_installation",', '"id": "installation_issues",', '"id": "theme_update",'];
    $mas_en = ['"en": "WordPress Engine Installation"', '"en": "Template installation"', '"en": "Manual installation"', '"en": "Manual installation of Elementor sample data"', '"en": "Installation issues"', '"en": "Theme update"'];


    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 6; $i++) {
        if ($i < 5) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }


    $sections_jsn .= "\n" . "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}



//---------------------------introdaction-------------------------------

function introdaction($name)
{

    $project_name = '"' . $name . '"' . ':';
    $path_f =  "../sections/introduction/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $mas_id = ['"id": "technical_requirements",', '"id": "template_structure_no-child",'];
    $mas_en = ['"en": "Technical Requirements"', '"en": "Template Structure"'];


    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 2; $i++) {
        if ($i < 1) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }


    $sections_jsn .= "\n" . "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}



//---------------------------localization-multilanguage------------------

function localization_multilanguage($name)
{

    $project_name = '"' . $name . '"' . ':';
    $path_f =  "../sections/localization-multilanguage/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");


    $mas_id = ['"id": "manual_localization",', '"id": "localization_loco",', '"id": "multilanguage_polylang",', '"id": "multilanguage_wpml",'];
    $mas_en = ['"en": "Manual Localization"', '"en": "Localization with LocoTranslate Plugin"', '"en": "Multilanguage with Polylang"', '"en": "Multilanguage with WPML"'];



    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";


    for ($i = 0; $i < 4; $i++) {
        if ($i < 3) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }

    $sections_jsn .= "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}



//---------------------------theme_dashboard---------------------------

function theme_dashboard($name)
{

    $project_name = '"' . $name . '"' . ":";
    $path_f =  "../sections/theme_dashboard/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $mas_id = ['"id": "license",', '"id": "plugin_updates",', '"id": "theme",', '"id": "skins",', '"id": "settings",', '"id": "user_guide",'];
    $mas_en = ['"en": "License"', '"en": "Plugin Updates"', '"en": "Theme"', '"en": "Skins"', '"en": "Settings"', '"en": "User Guide"'];



    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 6; $i++) {
        if ($i < 5) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }

    $sections_jsn .= "\n" . "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}


//---------------------------website-customization-------------------


function website_customization($name)
{

    $project_name = '"' . $name . '"' . ":";
    $path_f =  "../sections/website-customization/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");


    $mas_id = ['"id": "customizer",', '"id": "blog_layouts",', '"id": "widgets",', '"id": "posts_categories_formats",', '"id": "working_with_css",'];
    $mas_en = ['"en": "Customizer"', '"en": "Blog Layouts"', '"en": "Widgets"', '"en": "Posts, Categories and Post Formats"', '"en": "Working with CSS"'];



    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 0; $i < 5; $i++) {
        if ($i < 4) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . $mas_id[$i] . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . $mas_en[$i] . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }

    $sections_jsn .= "\n" . "]  " . "\n" . "}}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}






//---------------------------plugins-overview-------------------


function plugins_overview($name, $name_plug, $title_plug)
{

    $project_name = '"' . $name . '"' . ":";

    $path_f =  "../sections/plugins-overview/section.json";

    $all_file = file_get_contents($path_f);
    if (substr($all_file, -1, 1) == '}') {
        file_put_contents($path_f, substr($all_file, 0, -4));
    }
    //открываем файл
    $fd = fopen($path_f, 'a+') or die("не удалось создать файл");

    $sections_jsn = "," . "\n" . "\t" . $project_name . "[";

    for ($i = 1; $i < count($name_plug) + 1; $i++) {
        if ($i < count($name_plug)) {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . '"id": ' . '"' . $name_plug[$i] . '"' . ',' . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . '"en": ' . '"' . $title_plug[$i] . '"'  . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "," . "\n" . "\n" . "\t";
        } else {
            $sections_jsn .= "\n" . "\t" . '{' . "\t" . "\t" . "\n" . '"id": ' . '"' . $name_plug[$i] . '"' . ',' . "\n" . "\t" . "\t" . '"translations": {' . "\n" . "\t" . "\t" . '"en": ' . '"' . $title_plug[$i] . '"'  . "\n" . "\t" . "\t" . '}' . "\n" . '}' . "\n" . "\n" . "\t";
        }
    }

    $sections_jsn .= "\n" . "]  " . "\n" . "}" . "\n" . "}";
    fwrite($fd, $sections_jsn);
    fclose($fd);
}
