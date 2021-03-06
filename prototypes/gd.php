<?php

/*
 * This file is part of the Zephir.
 *
 * (c) Zephir Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (function_exists('gd_info')) {
    return false;
}

/**
 * Function was prototyped by docs.
 *
 * @see http://www.php.net/manual/ru/ref.image.php
 */

/**
 * @see http://www.php.net/manual/ru/function.gd-info.php
 */
function gd_info()
{
}

/**
 * @see http://www.php.net/manual/ru/function.getimagesize.php
 *
 * @param string $filename
 * @param array  $imageinfo
 * @param mixed  $image
 * @param mixed  $threshold
 */
//function getimagesize($filename, array &$imageinfo) {}

/**
 * @see http://www.php.net/manual/ru/function.getimagesizefromstring.php
 *
 * @param string $imagedata
 * @param array  $imageinfo
 */
//function getimagesizefromstring($imagedata, array &$imageinfo) {}

/**
 * @see http://www.php.net/manual/ru/function.image-type-to-extension.php
 *
 * @param $imagetype
 * @param bool $include_dot
 */
//function image_type_to_extension($imagetype, $include_dot = true) {}

/**
 * @see http://www.php.net/manual/ru/function.image-type-to-mime-type.php
 *
 * @param int $imagetype
 *
 * @return string
 */
//function image_type_to_mime_type($imagetype) {}

/**
 * @see http://www.php.net/manual/ru/function.image2wbmp.php
 *
 * @param resource $image
 * @param string   $filename
 * @param int      $threshold
 *
 * @return bool
 */
function image2wbmp($image, $filename, $threshold)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imageaffine.php
 *
 * @param $image
 * @param array $affline
 * @param array $clip
 */
function imageaffine($image, array $affline, array $clip)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imageaffinematrixconcat.php
 *
 * @param array $m1
 * @param array $m2
 *
 * @return array
 */
function imageaffinematrixconcat(array $m1, array $m2)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imageaffinematrixget.php
 *
 * @param int   $type
 * @param mixed $options
 *
 * @return array
 */
function imageaffinematrixget($type, $options)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagealphablending.php
 *
 * @param resource $image
 * @param bool     $blendmode
 *
 * @return bool
 */
function imagealphablending($image, $blendmode)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imageantialias.php
 *
 * @param resource $image
 * @param bool     $enabled
 *
 * @return bool
 */
function imageantialias($image, $enabled)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagearc.php
 *
 * @param resource $image
 * @param int      $cx
 * @param int      $cy
 * @param int      $width
 * @param int      $height
 * @param int      $start
 * @param int      $end
 * @param int      $color
 *
 * @return bool
 */
function imagearc($image, $cx, $cy, $width, $height, $start, $end, $color)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagechar.php
 *
 * @param resource $image
 * @param int      $font
 * @param int      $x
 * @param int      $y
 * @param string   $c
 * @param int      $color
 *
 * @return bool
 */
function imagechar($image, $font, $x, $y, $c, $color)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecharup.php
 *
 * @param resource $image
 * @param int      $font
 * @param int      $x
 * @param int      $y
 * @param string   $c
 * @param int      $color
 *
 * @return bool
 */
function imagecharup($image, $font, $x, $y, $c, $color)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorallocate.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 *
 * @return int
 */
function imagecolorallocate($image, $red, $green, $blue)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorallocatealpha.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 * @param int      $alpha
 *
 * @return int
 */
function imagecolorallocatealpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorat.php
 *
 * @param resource $image
 * @param int      $x
 * @param int      $y
 *
 * @return int
 */
function imagecolorat($image, $x, $y)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorclosest.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 *
 * @return int
 */
function imagecolorclosest($image, $red, $green, $blue)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorclosestalpha.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 * @param int      $alpha
 *
 * @return int
 */
function imagecolorclosestalpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 *
 * @return int
 */
function imagecolorclosesthwb($image, $red, $green, $blue)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolordeallocate.php
 *
 * @param resource $image
 * @param int      $color
 *
 * @return bool
 */
function imagecolordeallocate($image, $color)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorexact.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 *
 * @return int
 */
function imagecolorexact($image, $red, $green, $blue)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorexactalpha.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 * @param int      $alpha
 *
 * @return int
 */
function imagecolorexactalpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolormatch.php
 *
 * @param resource $image1
 * @param resource $image2
 *
 * @return bool
 */
function imagecolormatch($image1, $image2)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorresolve.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 *
 * @return int
 */
function imagecolorresolve($image, $red, $green, $blue)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorresolvealpha.php
 *
 * @param resource $image
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 * @param int      $alpha
 *
 * @return int
 */
function imagecolorresolvealpha($image, $red, $green, $blue, $alpha)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorset.php
 *
 * @param resource $image
 * @param int      $index
 * @param int      $red
 * @param int      $green
 * @param int      $blue
 * @param int      $alpha
 */
function imagecolorset($image, $index, $red, $green, $blue, $alpha = 0)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecolorsforindex.php
 *
 * @param resource $image
 * @param int      $index
 *
 * @return array
 */
function imagecolorsforindex($image, $index)
{
}

/**
 * @see http://www.php.net/manual/ru/function.imagecreate.php
 *
 * @param $width
 * @param $height
 *
 * @return resource
 */
function imagecreate($width, $height)
{
}

/**
 * http://php.net/manual/en/function.imagettfbbox.php.
 *
 * @param float  $size
 * @param float  $angle
 * @param string $fontfile
 * @param string $text
 *
 * @return array|bool
 */
function imagettfbbox($size, $angle, $fontfile, $text)
{
}

/**
 * @see http://php.net/manual/en/function.imagettftext.php
 *
 * @param resource $image
 * @param float    $size
 * @param float    $angle
 * @param int      $x
 * @param int      $y
 * @param int      $color
 * @param string   $fontfile
 * @param string   $text
 *
 * @return array|bool
 */
function imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text)
{
}

/*
 * @link http://php.net/manual/en/image.constants.php
 */
define('IMG_GIF', 1);
define('IMG_JPG', 2);
define('IMG_JPEG', 2);
define('IMG_PNG', 4);
define('IMG_WBMP', 8);
define('IMG_XPM', 16);
define('IMG_COLOR_TILED', -5);
define('IMG_COLOR_STYLED', -2);
define('IMG_COLOR_BRUSHED', -3);
define('IMG_COLOR_STYLEDBRUSHED', -4);
define('IMG_COLOR_TRANSPARENT', -6);
define('IMG_ARC_ROUNDED', 0);
define('IMG_ARC_PIE', 0);
define('IMG_ARC_CHORD', 1);
define('IMG_ARC_NOFILL', 2);
define('IMG_ARC_EDGED', 4);
define('IMG_GD2_RAW', 1);
define('IMG_GD2_COMPRESSED', 2);
define('IMG_EFFECT_REPLACE', 0);
define('IMG_EFFECT_ALPHABLEND', 1);
define('IMG_EFFECT_NORMAL', 2);
define('IMG_EFFECT_OVERLAY', 3);
define('GD_BUNDLED', 1);
define('IMG_FILTER_NEGATE', 0);
define('IMG_FILTER_GRAYSCALE', 1);
define('IMG_FILTER_BRIGHTNESS', 2);
define('IMG_FILTER_CONTRAST', 3);
define('IMG_FILTER_COLORIZE', 4);
define('IMG_FILTER_EDGEDETECT', 5);
define('IMG_FILTER_GAUSSIAN_BLUR', 7);
define('IMG_FILTER_SELECTIVE_BLUR', 8);
define('IMG_FILTER_EMBOSS', 6);
define('IMG_FILTER_MEAN_REMOVAL', 9);
define('IMG_FILTER_SMOOTH', 10);
define('IMG_FILTER_PIXELATE', 11);
define('GD_VERSION', '2.0.35');
define('GD_MAJOR_VERSION', 2);
define('GD_MINOR_VERSION', 0);
define('GD_RELEASE_VERSION', 35);
define('GD_EXTRA_VERSION', '');
define('PNG_NO_FILTER', 0);
define('PNG_FILTER_NONE', 8);
define('PNG_FILTER_SUB', 16);
define('PNG_FILTER_UP', 32);
define('PNG_FILTER_AVG', 64);
define('PNG_FILTER_PAETH', 128);
define('PNG_ALL_FILTERS', 248);
define('IMG_AFFINE_TRANSLATE', 0);
define('IMG_AFFINE_SCALE', 1);
define('IMG_AFFINE_ROTATE', 2);
define('IMG_AFFINE_SHEAR_HORIZONTAL', 3);
define('IMG_AFFINE_SHEAR_VERTICAL', 4);
define('IMG_CROP_DEFAULT', 0);
define('IMG_CROP_TRANSPARENT', 1);
define('IMG_CROP_BLACK', 2);
define('IMG_CROP_WHITE', 3);
define('IMG_CROP_SIDES', 4);
define('IMG_FLIP_BOTH', 3);
define('IMG_FLIP_HORIZONTAL', 1);
define('IMG_FLIP_VERTICAL', 2);
define('IMG_BELL', 1);
define('IMG_BESSEL', 2);
define('IMG_BICUBIC', 4);
define('IMG_BICUBIC_FIXED', 5);
define('IMG_BILINEAR_FIXED', 3);
define('IMG_BLACKMAN', 6);
define('IMG_BOX', 7);
define('IMG_BSPLINE', 8);
define('IMG_CATMULLROM', 9);
define('IMG_GAUSSIAN', 10);
define('IMG_GENERALIZED_CUBIC', 11);
define('IMG_HERMITE', 12);
define('IMG_HAMMING', 13);
define('IMG_HANNING', 14);
define('IMG_MITCHELL', 15);
define('IMG_POWER', 17);
define('IMG_QUADRATIC', 18);
define('IMG_SINC', 19);
define('IMG_NEAREST_NEIGHBOUR', 16);
define('IMG_WEIGHTED4', 21);
define('IMG_TRIANGLE', 20);
