<?php


namespace Domain\Patient;


class BaseMetabolicRateCalc
{
    public function calculate(float $weight, float $height, int $age, int $sex):int
    {
        $base = 10 * $weight + 6.25 * $height - 5 * $age;
        switch ($sex){
            case BodyData::FEMALE:
                $base -= 161;
                break;
            case BodyData::MALE:
                $base += 5;
                break;
        }
        return round($base);
    }
}