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
final class TypeKosEnum extends Enum
{

    #[Description('Putra')]
    const putra = "Putra";

    #[Description('Putri')]
    const putri = "putri";

    #[Description('Campur')]
    const campur = "Campur";
}
