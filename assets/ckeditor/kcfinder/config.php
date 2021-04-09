<?php

$host = "localhost"; 
$user = "root";
$pass = "";
$nama_db = "db_algotechcoid"; 
//nama database
$koneksi = mysqli_connect($host,$user,$pass,$nama_db); 
  //pastikan urutan nya seperti ini, jangan tertukar


$query = "SELECT * FROM tbl_admin where username = 'eko.surya.php@gmail.com' ";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
}

$row =  mysqli_fetch_array($result);
//echo $row['username'] ;
if($row['kcfinder'] == "true")
{
    $kcfinder = true;
    $uploadURL= "upload";
    exit();
}
elseif($row['kcfinder'] == "false"){
    $kcfinder = false;
    $uploadURL= "upload";
}

$_CONFIG = array(

    'disabled' => $kcfinder,
    'denyZipDownload' => false,
    'denyUpdateCheck' => false,
    'denyExtensionRename' => false,

    'theme' => "oxygen",

    'uploadURL' => $uploadURL,
    'uploadDir' => "",

    'dirPerms' => 0755,
    'filePerms' => 0644,

    'access' => array(

        'files' => array(
            'upload' => true,
            'delete' => true,
            'copy' => true,
            'move' => true,
            'rename' => true
        ),

        'dirs' => array(
            'create' => true,
            'delete' => true,
            'rename' => true
        )
    ),

    'deniedExts' => "exe com msi bat php phps phtml php3 php4 cgi pl",

    'types' => array(

        // CKEditor & FCKEditor types
        'files'   =>  "doc",
        'flash'   =>  "swf",
        'images'  =>  "*img",

        // TinyMCE types
        'file'    =>  "doc",
        'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm",
        'image'   =>  "*img",
    ),

    'filenameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

    'dirnameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

        'mime_magic' => "",

        'maxImageWidth' => 0,
        'maxImageHeight' => 0,

        'thumbWidth' => 100,
        'thumbHeight' => 100,

        'thumbsDir' => ".thumbs",

        'jpegQuality' => 90,

        'cookieDomain' => "",
        'cookiePath' => "",
        'cookiePrefix' => 'KCFINDER_',

    // THE FOLLOWING SETTINGS CANNOT BE OVERRIDED WITH SESSION CONFIGURATION
        '_check4htaccess' => false,
        '_tinyMCEPath' => "/tinymcpuk/jscripts/tiny_mce",

        '_sessionVar' => &$_SESSION['KCFINDER'],
    //'_sessionLifetime' => 30,
    //'_sessionDir' => "/full/directory/path",

    //'_sessionDomain' => ".mysite.com",
    //'_sessionPath' => "/my/path",
    );


// $_CONFIG = array(

//     'disabled' => false,
//     'denyZipDownload' => false,
//     'denyUpdateCheck' => false,
//     'denyExtensionRename' => false,

//     'theme' => "oxygen",

//     'uploadURL' => "upload",
//     'uploadDir' => "",

//     'dirPerms' => 0755,
//     'filePerms' => 0644,

//     'access' => array(

//         'files' => array(
//             'upload' => true,
//             'delete' => true,
//             'copy' => true,
//             'move' => true,
//             'rename' => true
//         ),

//         'dirs' => array(
//             'create' => true,
//             'delete' => true,
//             'rename' => true
//         )
//     ),

//     'deniedExts' => "exe com msi bat php phps phtml php3 php4 cgi pl",

//     'types' => array(

//         // CKEditor & FCKEditor types
//         'files'   =>  "",
//         'flash'   =>  "swf",
//         'images'  =>  "*img",

//         // TinyMCE types
//         'file'    =>  "",
//         'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm",
//         'image'   =>  "*img",
//     ),

//     'filenameChangeChars' => array(/*
//         ' ' => "_",
//         ':' => "."
//     */),

//     'dirnameChangeChars' => array(/*
//         ' ' => "_",
//         ':' => "."
//     */),

//         'mime_magic' => "",

//         'maxImageWidth' => 0,
//         'maxImageHeight' => 0,

//         'thumbWidth' => 100,
//         'thumbHeight' => 100,

//         'thumbsDir' => ".thumbs",

//         'jpegQuality' => 90,

//         'cookieDomain' => "",
//         'cookiePath' => "",
//         'cookiePrefix' => 'KCFINDER_',

//     // THE FOLLOWING SETTINGS CANNOT BE OVERRIDED WITH SESSION CONFIGURATION
//         '_check4htaccess' => true,
//     //'_tinyMCEPath' => "/tiny_mce",

//         '_sessionVar' => &$_SESSION['ses_kcfinder'],
//     //'_sessionLifetime' => 30,
//     //'_sessionDir' => "/full/directory/path",

//     //'_sessionDomain' => ".mysite.com",
//     //'_sessionPath' => "/my/path",
//     );

    ?>