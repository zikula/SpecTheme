<?php
/**
 * Copyright Zikula Foundation 2015 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license MIT
 * @package SpecTheme
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\SpecTheme\Twig;

class SpecThemeExtension extends \Twig_Extension
{
    public function __construct()
    {
    }

    public function getName()
    {
        return 'spectheme_extension';
    }

    /**
     * Add variables to global scope for all templates.
     *
     * @return array
     */
    public function getGlobals()
    {
        return array(
            'SpecTheme' => array('test' => 'foo')
        );
    }

    /**
     * Register provided filters.
     * @return array
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('specPrefix', array($this, 'specPrefix')),
        );
    }

    /**
     * Register provided functions.
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('sum', [$this, 'sum']),
        );
    }

    /**
     * Add 'Spec:' before the string.
     * @param $value
     * @return string
     */
    public function specPrefix($value)
    {
        return __("Spec") . ": " . $value;
    }

    /**
     * Create a sum of two numbers.
     * @param int $x
     * @param int $y
     * @return int
     */
    public function sum($x = 0, $y = 0)
    {
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new \InvalidArgumentException();
        }

        return $x + $y;
    }
}
