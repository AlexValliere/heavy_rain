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

        $cityWidth = count($city);

        $this->drawCity($city);

        echo json_encode($city) . " => " . $result . "\n";
    }

    public function drawCity($city) // HTML viewver for the city
    {
        $cityHeight = max($city);
        $cityWidth = count($city);

        echo '<table>';

        for ($i = 0; $i < $cityWidth; $i++)
        {
            echo '<td style="text-align: center; border: 1px solid #94a494;">' . $city[$i] . '</td>';
        }

        for ($i = 0; $i < $cityHeight; $i++)
        {
            echo '<tr>';

            for ($j = 0; $j < $cityWidth; $j++)
            {
                if ($city[$j] >= $cityHeight - $i)
                {
                    echo '<td style="border: 1px solid #45811e; background-color: #85d652; width: 30px; height: 30px; text-align: center; color: #244624;"><small>' . ($cityHeight - $i) . '</small></td>';
                }
                else
                {
                    echo '<td style="border: 1px solid #ffffff; width: 30px; height: 30px;"></td>';
                }
            }

            echo '</tr>';
        }

        echo '<tr>';
        
        for ($i = 0; $i < $cityWidth; $i++)
        {
            echo '<td style="text-align: center; border: 1px solid #2092f4; border-top: 5px solid #2092f4;">' . $i . '</td>';
        }

        echo '</tr></table>';

        for ($i = 0; $i < $cityWidth; $i++)
        {
            $leftBorder = max(array_slice($city, 0, $i + 1));
            $rightBorder = max(array_slice($city, $i));

            echo "Current position is $i and left border size is $leftBorder and right border size is $rightBorder<br />";
        }
    }
}
