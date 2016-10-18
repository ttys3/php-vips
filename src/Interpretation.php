<?php

/**
 * This file was generated automatically. Do not edit!
 *
 * PHP version 7
 *
 * LICENSE:
 *
 * Copyright (c) 2016 John Cupitt
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category  Images
 * @package   Jcupitt\Vips
 * @author    John Cupitt <jcupitt@gmail.com>
 * @copyright 2016 John Cupitt
 * @license   https://opensource.org/licenses/MIT MIT
 * @version   GIT:ad44dfdd31056a41cbf217244ce62e7a702e0282
 * @link      https://github.com/jcupitt/php-vips
 */

namespace Jcupitt\Vips\Enum;

/**
 * The Interpretation enum.
 * @category  Images
 * @package   Jcupitt\Vips
 * @author    John Cupitt <jcupitt@gmail.com>
 * @copyright 2016 John Cupitt
 * @license   https://opensource.org/licenses/MIT MIT
 * @version   Release:0.1.2
 * @link      https://github.com/jcupitt/php-vips
 */
abstract class Interpretation {
    const ERROR = 'error';
    const MULTIBAND = 'multiband';
    const B_W = 'b_w';
    const HISTOGRAM = 'histogram';
    const XYZ = 'xyz';
    const LAB = 'lab';
    const CMYK = 'cmyk';
    const LABQ = 'labq';
    const RGB = 'rgb';
    const CMC = 'cmc';
    const LCH = 'lch';
    const LABS = 'labs';
    const SRGB = 'srgb';
    const YXY = 'yxy';
    const FOURIER = 'fourier';
    const RGB16 = 'rgb16';
    const GREY16 = 'grey16';
    const MATRIX = 'matrix';
    const SCRGB = 'scrgb';
    const HSV = 'hsv';
}
?>