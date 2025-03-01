<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PeriodeKosEnum extends Enum
{
    #[Description('Harian')]
    const harian = "Harian";

    #[Description('Mingguan')]
    const mingguan = "Mingguan";

    #[Description('Bulanan')]
    const bulanan = "Bulanan";
}
