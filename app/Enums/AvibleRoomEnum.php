<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AvibleRoomEnum extends Enum
{
    #[Description('Tidak tersedia')]
    const tidak_tersedia = '0';

    #[Description('Tersedia')]
    const tersedia = '1';

}
