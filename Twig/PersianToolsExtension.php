<?php
/**
 * Copyright (C) 2013  Mohammad Niknam (intuxicated.ir)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace Intuxicated\PersianToolsBundle\Twig;

use Intuxicated\PersianToolsBundle\Lib\PersianTools;

class PersianToolsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'pdate' => new \Twig_Filter_Method($this, 'pdateFilter'),
        );
    }

    public function pdateFilter($timestamp = NULL,$format = 'Y-m-d')
    {
        $PT = new PersianTools();
        return $PT->pdate($format,$timestamp);
    }

    public function getName()
    {
        return 'persian_tools_extension';
    }
}