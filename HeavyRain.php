<?php

require 'CityBuilder.php';

/**
 *
 */
class HeavyRain extends CityBuilder
{
    function __construct(){}

    public function exec($rand = false)
    {
        $city   = $rand ? $this->randomCity() : $this->staticCity();
        $result = 0;
        $leftBorder = 0;

        /* add your code here */

        $this->drawCity($city);

        echo json_encode($city) . " => " . $result . "\n";
    }

    public function drawCity($city) // HTML viewver for the city
    {
        $cityHeight = max($city);
        $cityWidth = count($city);

        echo '<table>';

        for ($i = 0; $i < $cityHeight; $i++)
        {
            echo '<tr>';

            for ($j = 0; $j < $cityWidth; $j++)
            {
                if ($city[$j] >= $cityHeight - $i)
                {
                    echo '<td style="border: 1px solid #45811e; background-color: #85d652; width: 10px; height: 10px;"></td>';
                }
                else
                {
                    echo '<td style="border: 1px solid #ffffff; width: 10px; height: 10px;"></td>';
                }
            }

            echo '</tr>';
        }

        echo '<tr>';
        
        for ($j = 0; $j < $cityWidth; $j++)
        {
            echo '<td style="text-align: center; border-top: 5px solid #2092f4;">' . ($j % 10) . '</td>';
        }

        echo '</tr></table>';
    }
}
